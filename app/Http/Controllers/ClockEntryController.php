<?php

namespace App\Http\Controllers;

use App\ClockEntry;
use Illuminate\Http\Request;
use Auth;

class ClockEntryController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entry = new ClockEntry;
        $entry->user_id = Auth::user()->id;
        $entry->enterDate = new \DateTime;
        $entry->save();
        return redirect('/home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClockEntry  $clockEntry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClockEntry $clockentry)
    {
        $clockentry->leaveDate = new \DateTime;
        $clockentry->save();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClockEntry  $clockEntry
     * @return \Illuminate\Http\Response
     */
    public function show(ClockEntry $clockEntry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClockEntry  $clockEntry
     * @return \Illuminate\Http\Response
     */
    public function edit(ClockEntry $clockEntry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClockEntry  $clockEntry
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClockEntry $clockEntry)
    {
        //
    }
}
