<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Str;

class CourseController extends Controller
{

     /**
     * Constructor
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('verified');
        $this->middleware('CheckUser');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        if(Auth::user()->role == 'admin'){
            $courses = Course::latest()->get();
        }
        else {
            $courses = Course::where('user_id', Auth::id())->get();

        }

        return view('admin.courses.index',[
            'courses' => $courses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create',[

            'categories' => Category::orderBy('category_name', 'asc')->get(),
            'authors'    => User::where('role', 'author')->orderBy('name', 'asc')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Form Validation
        $request->validate([
            'title'                 => 'required',
            'price'                 => 'required',
            'language'              => 'required',
            'thumbnail_image'       => 'required|image',
            'intro_video'           => 'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi',
            'short_description'     => 'required',
            'category_id'           => 'required',
            'user_id'               => 'required',
            'course_overview'       => 'required',
        ],  
            [
                'category_id.required' => 'Category filed is required',
                'user_id.required'     => 'User filed is required',
            ]
    
        );

          // Slug
          $create_slug = str::slug($request->title);
          $random      = str::random(10);
  
          $slug = $create_slug. '-' .$random;
 
        // Insert Data in Database
         $course = Course::create([
             'title'               => $request->title,
             'thumbnail_image'     => 'image.jpg', 
             'short_description'   => $request->short_description,
             'category_id'         => $request->category_id, 
             'user_id'             => $request->user_id, 
             'course_overview'     => $request->course_overview, 
             'price'               => $request->price, 
             'language'            => $request->language, 
             'level'               => $request->level, 
             'duration'            => $request->duration, 
             'slug'                => $slug,
             'created_at'          => Carbon::now(),
         ]);

          // Upload Thumbnail Image
            $thumbnail_image = $request->file('thumbnail_image'); 
            $filename = $course->id.'-thumbnail_image.'. $thumbnail_image->extension();
            $location = public_path('uploads/courses/'); 
            $thumbnail_image->move($location, $filename); 

            $course->thumbnail_image = $filename; 


          // Upload Introp Video
          if($request->has('intro_video')){

                $intro_video = $request->file('intro_video'); 
                $video_filename = $course->id.'-intro_video.'. $intro_video->extension();
                $video_location = public_path('uploads/courses/'); 
                $intro_video->move($video_location, $video_filename); 

                $course->intro_video = $video_filename; 

          }

          // Save everything in database
          $course->save();

        // Return Back With Success Message
        return redirect()->route('courses.index')->withSuccess('Added successfully');


    // End
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('admin.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.courses.edit', [

            'course'     => $course,
            'categories' => Category::orderBy('category_name', 'asc')->get(),
            'authors'    => User::where('role', 'author')->orderBy('name', 'asc')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        
        // Form Validation
        $request->validate([
            'title'                 => 'required',
            'price'                 => 'required',
            'language'              => 'required',
            'thumbnail_image'       => 'image',
            'intro_video'           => 'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi',
            'short_description'     => 'required',
            'category_id'           => 'required',
            'user_id'               => 'required',
            'course_overview'       => 'required',
        ],  
            [
                'category_id.required' => 'Category filed is required',
                'user_id.required'     => 'User filed is required',
            ]
        );

          // Thumbnail Image
          if($request->has('thumbnail_image')){

            $thumbnail_image = $request->file('thumbnail_image'); 
            $filename = $course->id.'-thumbnail_image.'. $thumbnail_image->extension('thumbnail_image');
            $location = public_path('uploads/courses/'); 
            $thumbnail_image->move($location, $filename); 

            $course->thumbnail_image = $filename; 

        }

        //  Introp Video
        if($request->has('intro_video')){

                $intro_video = $request->file('intro_video'); 
                $video_filename = $course->id.'-intro_video.'. $intro_video->extension('intro_video');
                $video_location = public_path('uploads/courses/'); 
                $intro_video->move($video_location, $video_filename); 

                $course->intro_video = $video_filename; 

            }

        // Update Other Fileds
        $course->title              = $request->title;
        $course->short_description  = $request->short_description;
        $course->category_id        = $request->category_id;
        $course->user_id            = $request->user_id;
        $course->course_overview    = $request->course_overview;
        $course->price              = $request->price;
        $course->language           = $request->language;
        $course->level              = $request->level;
        $course->duration           = $request->duration;

        $course->save();

        // Return Back With Success Message
        return redirect()->route('courses.show', $course->id)->withSuccess('Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return back()->withSuccess('Deleted sucessfully');
    }
}
