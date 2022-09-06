<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\FirstParty;
use App\Models\Newsletter;
use App\Models\SecondParty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Http\Requests\StoreNewsletterRequest;
use App\Http\Requests\UpdateNewsletterRequest;

class NewsletterController extends Controller
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
     * @param  \App\Http\Requests\StoreNewsletterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cekNewsletter = Newsletter::firstWhere('number_letter_of_assignment', $request->number_letter_of_assignment);
        $cekSecondParty = SecondParty::firstWhere('nip', $request->nip_second);
        $secondParty = new SecondParty;
        $newsletter = new Newsletter;

        if ($cekNewsletter == null) {
            if ($cekSecondParty == null) {

                $secondParty->fullname = $request->name_second;
                $secondParty->nip = $request->nip_second;
                $secondParty->position = $request->position_second;
                $secondParty->email = $request->email_second;
                $secondParty->handphone = $request->handphone_second;

                $secondParty->save();
                $secondParty->firstWhere('nip', $request->nip_second)->get();


                $newsletter->user_id = '1';
                $newsletter->first_party_id = $request->name_first;
                $newsletter->second_party_id = $secondParty->id;
                $newsletter->title = $request->title;
                $newsletter->description = $request->description;
                $newsletter->category = $request->category;
                $newsletter->kld = $request->kld;
                $newsletter->number_letter_of_assignment = $request->number_letter_of_assignment;
                $newsletter->location_city = $request->location;
                $newsletter->event_date = $request->date;
                $newsletter->save();

                return redirect('/storage');
            } else {
                $newsletter->user_id = '1';
                $newsletter->first_party_id = $request->name_first;
                $newsletter->second_party_id = $cekSecondParty->id;
                $newsletter->title = $request->title;
                $newsletter->description = $request->description;
                $newsletter->category = $request->category;
                $newsletter->kld = $request->kld;
                $newsletter->number_letter_of_assignment = $request->number_letter_of_assignment;
                $newsletter->location_city = $request->location;
                $newsletter->event_date = $request->date;
                $newsletter->save();
                return redirect('/storage');
            }
        } else {
            $title = 'home';
            $firstParty = FirstParty::all();
            $numberLetterOfAssignment = true;
            return view('form', compact('title', 'numberLetterOfAssignment', 'firstParty'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletter $newsletter)
    {
        $firstParty = FirstParty::all();
        $selectedNewsLetter = null;
        $numberLetterOfAssignment = false;
        $title = 'newsletter';
        return view('form', compact('firstParty', 'title', 'numberLetterOfAssignment', 'selectedNewsLetter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletter $newsletter)
    {
        $firstParty = FirstParty::all();

        $selectedNewsLetter = Newsletter::firstWhere('id', $newsletter->id);
        $selectedSecondParty = SecondParty::firstWhere('id', $newsletter->second_party_id);


        $numberLetterOfAssignment = false;
        $title = 'newsletter';
        return view('form_edit', compact('firstParty', 'title', 'numberLetterOfAssignment', 'selectedNewsLetter', 'selectedSecondParty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewsletterRequest  $request
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        //
    }

    public function getAllNewsLetter()
    {
        $newsletters = Newsletter::paginate(5);
        $no = 1;
        $title = 'storage';
        return view('storage', compact('title', 'newsletters', 'no'));
    }

    public function getLetterById(Newsletter $newsletter)
    {

        $newsletterById = Newsletter::find($newsletter->id);

        $firstParty = FirstParty::find($newsletterById->first_party_id);
        $secondParty = SecondParty::find($newsletterById->second_party_id);


        $title = 'storage'; // masih belum sesuai
        return view('newsletter', compact('title', 'newsletterById', 'firstParty', 'secondParty'));
    }
}