<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSurvelRequest;
use App\Http\Requests\UpdateSurvelRequest;
use App\Models\Survel;

class SurvelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $survey = Survel::all();

        return view('survey.index',compact('survey'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('survey.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSurvelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSurvelRequest $request)
    {
        $data = Survel::create($request->all());

        return redirect()->route('survey.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Survel  $survel
     * @return \Illuminate\Http\Response
     */
    public function show(Survel $survel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Survel  $survel
     * @return \Illuminate\Http\Response
     */
    public function edit(Survel $survel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSurvelRequest  $request
     * @param  \App\Models\Survel  $survel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSurvelRequest $request, Survel $survel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Survel  $survel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survel $survel)
    {
        //
    }
}
