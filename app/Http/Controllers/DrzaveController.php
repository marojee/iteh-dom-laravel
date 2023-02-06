<?php

namespace App\Http\Controllers;

use App\Models\Drzava;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DrzaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Drzava::all());
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
     * @param  \App\Models\Drzava  $drzava
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Drzava::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Drzava  $drzava
     * @return \Illuminate\Http\Response
     */
    public function edit(Drzava $drzava)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Drzava  $drzava
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string',
            'trener' => 'required|string',
            'kapiten' => 'required|string',
            'broj_titula' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $drzava = Drzava::find($id);
        $drzava->naziv = $request->naziv;
        $drzava->trener = $request->trener;
        $drzava->kapiten = $request->kapiten;
        $drzava->broj_titula = $request->broj_titula;

        $drzava->save();

        return response()->json('Drzava azurirana');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Drzava  $drzava
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Drzava::find($id)->delete();

        return response()->json('Drzava obrisana');
    }
}
