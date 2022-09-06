<?php

namespace App\Http\Controllers;

use App\Models\FirstParty;
use App\Http\Requests\StoreFirstPartyRequest;
use App\Http\Requests\UpdateFirstPartyRequest;
use Illuminate\Http\Request;

class FirstPartyController extends Controller
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
     * @param  \App\Http\Requests\StoreFirstPartyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFirstPartyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FirstParty  $firstParty
     * @return \Illuminate\Http\Response
     */
    public function show(FirstParty $firstParty)
    {
    }

    public function getSelectedFirstParty($id)
    {
        $selected = FirstParty::where('id', $id)->get();
        return response()->json($selected);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FirstParty  $firstParty
     * @return \Illuminate\Http\Response
     */
    public function edit(FirstParty $firstParty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFirstPartyRequest  $request
     * @param  \App\Models\FirstParty  $firstParty
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFirstPartyRequest $request, FirstParty $firstParty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FirstParty  $firstParty
     * @return \Illuminate\Http\Response
     */
    public function destroy(FirstParty $firstParty)
    {
        //
    }
}