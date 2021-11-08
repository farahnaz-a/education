<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.banners.index', [
            'banner' => Banner::first(),
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
          // Form Validation
          $request->validate([
            'image'                 => 'image',
            'title'                 => 'required',
            'short_description'     => 'required',
            'background_color'      => 'required',
        ]);

         //  image
         if($request->hasFile('image')){

            $image = $request->file('image'); 
            $filename = 'image.'. $image->extension('image');
            $location = public_path('uploads/banners/'); 
            $image->move($location, $filename); 

            $banner->image = $filename; 

        }

        
        $banner->title              = $request->title;
        $banner->short_description  = $request->short_description;
        $banner->background_color   = $request->background_color;

        $banner->save();

        return back()->withSuccess('Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
