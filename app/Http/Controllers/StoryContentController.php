<?php

namespace App\Http\Controllers;

use App\Models\StoryContent;
use Illuminate\Http\Request;

class StoryContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $story_data = ServicesContent::first();

        return view('welcome', ['story_data' => $story_data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(StoryContent $storyContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StoryContent $storyContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $request->validate([
            'main_name' => 'required|string',
            'who_are_we' => 'required|string',
            'our_vision' => 'required|string',
            'history' => 'required|string',
            'image' => 'required',

        ]);


         // Handle the file upload
         if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('assets/img');
            
            // Ensure the directory exists
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            
            // Move the file to the specified path
            $file->move($path, $filename);


                // Find the record with ID = 1
          $storyContent = StoryContent::find(1);


           $storyContent->main_name = $request->input("main_name");
           $storyContent->who_are_we = $request->input("who_are_we");
           $storyContent->our_vision = $request->input("our_vision");
           $storyContent->history = $request->input("history");
           $storyContent->image = $filename;

           $storyContent->save();

           $story_data = StoryContent::first();

           return view('content.story_content', ['story_data' => $story_data]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StoryContent $storyContent)
    {
        //
    }
}
