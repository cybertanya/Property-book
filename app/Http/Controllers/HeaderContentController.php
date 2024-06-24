<?php

namespace App\Http\Controllers;

use App\Models\HeaderContent;
use Illuminate\Http\Request;


class HeaderContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header_data = HeaderContent::first();

        return view('welcome', ['header_data' => $header_data]);
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
    public function show(HeaderContent $headerContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HeaderContent $headerContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
     

        $request->validate([
            'main_name' => 'required|string',
            'description' => 'required|string',
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
          $headerContent = HeaderContent::find(1);

      

           $headerContent->main_name = $request->input("main_name");
           $headerContent->description = $request->input("description");
           $headerContent->image = $filename;

           $headerContent->save();

           $header_data = HeaderContent::first();

           return view('content.header_content', ['header_data' => $header_data]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HeaderContent $headerContent)
    {
        //
    }
}
