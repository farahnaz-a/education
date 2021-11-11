<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
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

    // Course Details
    public function courseByCategory($category_name){

        $category = Category::where('category_name', $category_name)->get();

        foreach ($category as $value) {

            $courses = $value->getCourses;
            return view('frontend.coursesByCategory',compact('courses'));
        }

    }
    
    // Course Contact
    public function contacts(){

        return view('frontend.contacts');
    }


    // Search
    public function search(Request $request){

        $search = $request->search;

        $category = Category::where('category_name', 'LIKE', '%'.$search.'%')->first();
        
        if ($category != null) {

            $courses = Course::where('title', 'LIKE', '%'.$search.'%')->orwhere('category_id', $category->id)->get();
        }
        else {
            $courses = Course::where('title', 'LIKE', '%'.$search.'%')->get();
        }
        
        return view('frontend.search', compact('courses'));
    }



// End    
}
