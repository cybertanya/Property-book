<?php

namespace App\Http\Controllers;

use App\Models\ServicesContent;
use Illuminate\Http\Request;

class ServicesContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services_data = ServicesContent::first();

        return view('welcome', ['services_data' => $services_data]);
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
    public function show(ServicesContent $servicesContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServicesContent $servicesContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'refreshing_design' => 'required|string',
            'solid_bootstrap' => 'required|string',
            'speed' => 'required|string',
            'fully_customizable' => 'required|string',
            'regular_updates' => 'required|string',
            'components' => 'required|string',

        ]);


        $servicesContent = ServicesContent::find(1);


           $servicesContent->refreshing_design = $request->input("refreshing_design");
           $servicesContent->solid_bootstrap = $request->input("solid_bootstrap");
           $servicesContent->speed = $request->input("speed");
           $servicesContent->fully_customizable = $request->input("fully_customizable");
           $servicesContent->regular_updates = $request->input("regular_updates");
           $servicesContent->components = $request->input("components");
           

           $servicesContent->save();

           $services_data = ServicesContent::first();

           return view('content.services_content', ['services_data' => $services_data]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServicesContent $servicesContent)
    {
        //
    }
}
