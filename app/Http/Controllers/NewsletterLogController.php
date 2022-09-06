<?php

namespace App\Http\Controllers;

use App\Models\NewsletterLog;
use App\Http\Requests\StoreNewsletterLogRequest;
use App\Http\Requests\UpdateNewsletterLogRequest;

class NewsletterLogController extends Controller
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
     * @param  \App\Http\Requests\StoreNewsletterLogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsletterLogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsletterLog  $newsletterLog
     * @return \Illuminate\Http\Response
     */
    public function show(NewsletterLog $newsletterLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsletterLog  $newsletterLog
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsletterLog $newsletterLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewsletterLogRequest  $request
     * @param  \App\Models\NewsletterLog  $newsletterLog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsletterLogRequest $request, NewsletterLog $newsletterLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsletterLog  $newsletterLog
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsletterLog $newsletterLog)
    {
        //
    }
}