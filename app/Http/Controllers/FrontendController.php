<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    // Index Page
    public function index(){

        return view('frontend.index',[
            
            'banner' => Banner::first(),
        ]);

    }


    // Course List Page
    public function courseList(){
        
        return view('frontend.courseList');
    }

    // Course List Page
    public function courseDetails(){

        return view('frontend.courseDetails');
    }
    
    // Course List Page
    public function contacts(){

        return view('frontend.contacts');
    }

// End    
}
