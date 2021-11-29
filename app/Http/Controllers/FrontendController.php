<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Course;
use App\Models\LiveSession;
use Illuminate\Http\Request;
use Livewire\LivewireTagCompiler;

class FrontendController extends Controller
{

    // Index Page
    public function index(){

        return view('frontend.index',[
            
            'banner'  => Banner::first(),
            'courses' => Course::latest()->take(6)->get(),
        ]);

    }


    // Course List Page
    public function courseList(){
        
        return view('frontend.courseList',[
            'courses' => Course::latest()->Paginate(9),
        ]);
    }

    // Course Details
    public function courseDetails($slug){

        $course = Course::where('slug', $slug)->first();

        return view('frontend.courseDetails',[
            
            'course'          => $course,
            'related_courses' => Course::where('category_id', $course->category_id)->get(),
        ]);
    }

    // Course By Category
    public function courseByCategory($category_name){

        $category = Category::where('category_name', $category_name)->first();

        $courses = Course::where('category_id', $category->id)->Paginate(6);

        return view('frontend.courseList',compact('courses', 'category'));

    } 

    // Course Filtering With Ajax
    public function courseFiltering(Request $request){

        $courses = Course::where('category_id' , $request->category)->Paginate(9);

        $view = view('includes.course',compact('courses'));

        $response = $view->render();

        return response()->json(['response' => $response]);

    } 

    // Live Sessions List
    public function liveSessions(){
        return view('frontend.live_sessions',[
            
            'livesessions' => LiveSession::latest()->Paginate(2),
        ]);
    }

    // Live Sessions Details
    public function liveSessionsDetails($id){

        $livesession = LiveSession::find($id)->first();

        return view('frontend.livesessionsDetails',[
            'livesession'          => $livesession,
            'related_livesessions' => LiveSession::where('category_id', $livesession->category_id)->get(),
        ]);
    }

    // Course Filtering With Ajax
    public function livesessionsFiltering(Request $request){

        $livesessions = LiveSession::where('category_id' , $request->category)->Paginate(9);

        $view = view('includes.livesessions',compact('livesessions'));

        $response = $view->render();

        return response()->json(['response' => $response]);

    } 

    // Search
    public function search(Request $request){

        $search = $request->search;

        $category = Category::where('category_name', 'LIKE', '%'.$search.'%')->first();
        
        if ($category != null) {

            $courses = Course::where('title', 'LIKE', '%'.$search.'%')->orwhere('category_id', $category->id)->Paginate(9);
        }
        else {
            $courses = Course::where('title', 'LIKE', '%'.$search.'%')->Paginate(9);
        }
        
        return view('frontend.courseList', compact('courses'));
    }

    // Course Contact
    public function contacts(){

        return view('frontend.contacts');
    }
    



// End    
}
