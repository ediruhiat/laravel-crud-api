<?php

namespace App\Http\Controllers;

use App\Models\Specs;
use Illuminate\Http\Request;

class SpecsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all specs
        return Specs::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create spec

        $request->validate([
            'slug' => ['required', 'unique:specs,slug'],
            'display' => 'required',
            'platform' => 'required',
            'cpu' => 'required',
            'rom' => 'required',
            'ram' => 'required',
            'camera' => 'required',
            'battery' => 'required',
        ]);
        
        return Specs::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Specs  $specs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get single spec
        return Specs::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Specs  $specs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // update spec
        $specs = Specs::find($id);
        $specs->update($request->all());

        return $specs;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Specs  $specs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete spec
        return Specs::destroy($id);
    }
}
