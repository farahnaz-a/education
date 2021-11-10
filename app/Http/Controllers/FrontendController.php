<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Course;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    // Index Page
    public function index(){

        return view('frontend.index',[
            
            'banner'  => Banner::first(),
            'courses' => Course::latest()->get(),
        ]);

    }


    // Course List Page
    public function courseList(){
        
        return view('frontend.courseList',[
            'courses' => Course::latest()->get(),
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
    
    // Course Contact
    public function contacts(){

        return view('frontend.contacts');
    }

// End    
}
