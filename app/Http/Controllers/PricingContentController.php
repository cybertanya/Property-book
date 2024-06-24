<?php

namespace App\Http\Controllers;

use App\Models\PricingContent;
use Illuminate\Http\Request;

class PricingContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pricing_data = PricingContent::first();

        return view('welcome', ['pricing_data' => $pricing_data]);
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
    public function show(PricingContent $pricingContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PricingContent $pricingContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'starter' => 'required|string',
            'exclusive' => 'required|string',
            'premium' => 'required|string',
        ]);


        $pricingContent = PricingContent::find(1);


           $pricingContent->starter = $request->input("starter");
           $pricingContent->exclusive = $request->input("exclusive");
           $pricingContent->premium = $request->input("premium");
         

           $pricingContent->save();

           $pricing_data = PricingContent::first();

           return view('content.pricing_content', ['pricing_data' => $pricing_data]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PricingContent $pricingContent)
    {
        //
    }
}
