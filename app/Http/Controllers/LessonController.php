<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          
        if (Auth::user()->role != 'admin') {
    
            $author_courses = Course::where('user_id', Auth::user()->id)->get();
        } 
    
        else {
    
            $author_courses = Course::latest()->get();
        }
        
    
        return view('admin.lessons.create',compact('author_courses'));
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
            'course_id'             => 'required',
            'lesson_title'          => 'required',
            'serial'                => 'numeric',
            'lesson_video'          => 'required|mimetypes:video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi,video/webp',
        ],  
            [
                'course_id.required' => 'Course title filed is required',
            ]
    
        );


          // Insert Data in Database
          $lesson = Lesson::create([
            'course_id'        => $request->course_id,
            'lesson_title'     => $request->lesson_title, 
            'serial'           => $request->serial, 
            'lesson_video'     => 'video.mp4', 
            'created_at'       => Carbon::now(),
        ]);


        $lesson_video   = $request->file('lesson_video'); 
        $video_filename = $lesson->id.'-lesson_video.'. $lesson_video->extension();
        $video_location = public_path('uploads/courses/lessons/'); 
        $lesson_video->move($video_location, $video_filename); 

        $lesson->lesson_video = $video_filename; 


         // Save everything in database
         $lesson->save();

       // Return Back With Success Message
       return redirect()->route('lessons.show', $request->course_id)->withSuccess('Added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */ 
    public function show($id)
    {
        $lessons = Lesson::where('course_id', $id)->orderBy('serial', 'asc')->get();
        $course  = Course::find($id);

        return view('admin.lessons.index',[
            'lessons' => $lessons,
            'course' => $course,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {

        if (Auth::user()->role != 'admin') {

            $author_courses = Course::where('user_id', Auth::user()->id)->get();
        } 

        else {

            $author_courses = Course::latest()->get();
        }

        return view('admin.lessons.edit', compact('lesson', 'author_courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
    
         // Form Validation
         $request->validate([
            'course_id'             => 'required',
            'lesson_title'          => 'required',
            'lesson_video'          => 'mimetypes:video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi,video/webp',
        ],  
            [
                'course_id.required' => 'Course title filed is required',
            ]
    
        );


         //  Introp Video
         if($request->has('lesson_video')){

            $lesson_video   = $request->file('lesson_video'); 
            $video_filename = $lesson->id.'-lesson_video.'. $lesson_video->extension();
            $video_location = public_path('uploads/courses/lessons/'); 
            $lesson_video->move($video_location, $video_filename); 

            $lesson->lesson_video = $video_filename; 

        }

            // Update Other Fileds
            $lesson->course_id       = $request->course_id;
            $lesson->lesson_title    = $request->lesson_title;
            $lesson->serial          = $request->serial;

            $lesson->save();

            // Return Back With Success Message
            return redirect()->route('lessons.show', $request->course_id)->withSuccess('Updated successfully');

    }

    /**
     * Lessons Serialez
     */
    public function lessonsSerialize(Request $request,$id){

        $lesson = Lesson::find($id);

        // Form Validation
        $request->validate([
        'serial'                => 'numeric', 
        ]);
    

        // Update Field
        $lesson->serial      = $request->serial;

        $lesson->save();

         // Return Back With Success Message
         return redirect()->route('lessons.show', $lesson->getCourses->id)->withSuccess('Serialzed successfully');

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {

        // Delete all from database
        $lesson->delete();

        // Return Back
        return back()->withSuccess('Deleted sucessfully');

    }
}
