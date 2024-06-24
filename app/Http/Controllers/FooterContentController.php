<?php

namespace App\Http\Controllers;

use App\Models\FooterContent;
use Illuminate\Http\Request;

class FooterContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footer_data = FooterContent::first();

        return view('welcome', ['footer_data' => $footer_data]);
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
    public function show(FooterContent $footerContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FooterContent $footerContent)
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
            'description' => 'required|string',

        ]);


        $footerContent = FooterContent::find(1);


           $footerContent->main_name = $request->input("main_name");
           $footerContent->description = $request->input("description");
           
           

           $footerContent->save();

           $footer_data = FooterContent::first();

           return view('content.footer_content', ['footer_data' => $footer_data]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FooterContent $footerContent)
    {
        //
    }
}
