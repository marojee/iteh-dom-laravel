<?php

namespace App\Http\Controllers;

use App\Models\Stadion;
use Illuminate\Http\Request;

class StadioniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Stadion::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stadion  $stadion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Stadion::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stadion  $stadion
     * @return \Illuminate\Http\Response
     */
    public function edit(Stadion $stadion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stadion  $stadion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stadion $stadion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stadion  $stadion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stadion $stadion)
    {
        //
    }
}
