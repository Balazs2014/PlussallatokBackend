<?php

namespace App\Http\Controllers;

use App\Models\Plussallat;
use App\Http\Requests\StorePlussallatRequest;
use App\Http\Requests\UpdatePlussallatRequest;

class PlussallatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plussallats = Plussallat::all();
        return response()->json($plussallats);
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
     * @param  \App\Http\Requests\StorePlussallatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlussallatRequest $request)
    {
        $plussallat = new Plussallat();
        $plussallat->fill($request->all());
        $plussallat->save();
        return response()->json($plussallat, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plussallat  $plussallat
     * @return \Illuminate\Http\Response
     */
    public function show(Plussallat $plussallat, int $id)
    {
        $plussallat = Plussallat::findOrFail($id);
        return response()->json($plussallat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plussallat  $plussallat
     * @return \Illuminate\Http\Response
     */
    public function edit(Plussallat $plussallat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlussallatRequest  $request
     * @param  \App\Models\Plussallat  $plussallat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlussallatRequest $request, Plussallat $plussallat, int $id)
    {
        $plussallat = Plussallat::findOrFail($id);
        $plussallat->fill($request->all());
        $plussallat->save();
        return response()->json($plussallat, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plussallat  $plussallat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plussallat $plussallat, int $id)
    {
        $plussallat = Plussallat::destroy($id);
        return response()->noContent();
    }
}
