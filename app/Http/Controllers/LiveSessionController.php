<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\LiveSession;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LiveSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.liveSessions.index',[
            'liveSessions' => LiveSession::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.liveSessions.create', [
            'categories' => Category::orderBy('category_name', 'asc')->get(),
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
      // Validation 
      $request->validate([
        'title'              => 'required',
        'category_id'        => 'required',
        'description'        => 'required',
        'zoom_id'            => 'required',
        'password'           => 'required',
        'date'               => 'required',
        'price'              => 'required',
        'cover_image'        => 'required|image',
    ],
        [
            'category_id.required' => 'The category filed is required',
        ]

    );

    
    $liveSession = LiveSession::create([

        'title'              => $request->title,
        'subtitle'           => $request->subtitle,
        'category_id'        => $request->category_id,
        'description'        => $request->description,
        'zoom_id'            => $request->zoom_id,
        'password'           => $request->password,
        'date'               => $request->date,
        'price'              => $request->price,
        'cover_image'        => 'foo.jpg',
        'created_at'         => Carbon::now(),
    ]);


    // Image Upload
    $image = $request->file('cover_image');
    $filename = $liveSession->id. '.' .$image->extension();
    $location = public_path('uploads/liveSessions/');
    $image->move($location, $filename);
    $liveSession->cover_image = $filename; 

    // Save everythink in database
    $liveSession->save();

    return redirect()->route('liveSessions.index')->withSuccess('Live Session added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LiveSession  $liveSession
     * @return \Illuminate\Http\Response
     */
    public function show(LiveSession $liveSession)
    {
        return view('admin.liveSessions.show', compact('liveSession'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LiveSession  $liveSession
     * @return \Illuminate\Http\Response
     */
    public function edit(LiveSession $liveSession)
    {
        return view('admin.liveSessions.edit', compact('liveSession'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LiveSession  $liveSession
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LiveSession $liveSession)
    {
        // Validation 
        $request->validate([
            'title'              => 'required',
            'category_id'        => 'required',
            'description'        => 'required',
            'zoom_id'            => 'required',
            'password'           => 'required',
            'date'               => 'required',
            'price'              => 'required',
            'cover_image'        => 'image',
        ],
            [
                'category_id.required' => 'The category filed is required',
            ]

        );

          // Image Upload
         if($request->has('cover_image')){   

            $image = $request->file('cover_image');
            $filename = $liveSession->id. '.' .$image->extension();
            $location = public_path('uploads/liveSessions/');
            $image->move($location, $filename);
            $liveSession->cover_image = $filename; 
        }

            // Update Other Fileds
            $liveSession->title       = $request->title;
            $liveSession->subtitle    = $request->subtitle;
            $liveSession->price       = $request->price;
            $liveSession->description = $request->description;
            $liveSession->zoom_id     = $request->zoom_id;
            $liveSession->password    = $request->password;
            $liveSession->date        = $request->date;

            $liveSession->save();

            // Return Back With Success Message
            return redirect()->route('liveSessions.show', $liveSession->id)->withSuccess('Updated successfully');


    // End    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LiveSession  $liveSession
     * @return \Illuminate\Http\Response
     */
    public function destroy(LiveSession $liveSession)
    {
        $existing = public_path('uploads/liveSessions/' . $liveSession->cover_image); 

        if ($liveSession->cover_image) {
             unlink($existing);
        }

        $liveSession->delete();

        return back()->withSuccess('Deleted Successfully');
    }

// End    
}
