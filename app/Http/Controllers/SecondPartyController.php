<?php

namespace App\Http\Controllers;

use App\Models\SecondParty;
use App\Http\Requests\StoreSecondPartyRequest;
use App\Http\Requests\UpdateSecondPartyRequest;

class SecondPartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreSecondPartyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSecondPartyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SecondParty  $secondParty
     * @return \Illuminate\Http\Response
     */
    public function show(SecondParty $secondParty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SecondParty  $secondParty
     * @return \Illuminate\Http\Response
     */
    public function edit(SecondParty $secondParty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSecondPartyRequest  $request
     * @param  \App\Models\SecondParty  $secondParty
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSecondPartyRequest $request, SecondParty $secondParty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SecondParty  $secondParty
     * @return \Illuminate\Http\Response
     */
    public function destroy(SecondParty $secondParty)
    {
        //
    }
}
