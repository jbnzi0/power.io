<?php

namespace App\Http\Controllers;

use App\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Award::latest()->paginate(15);
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
        $this->validate($request, [
            'title' => ['string', 'max:255'],
            'type' => ['string', 'max:255'],
            'sponsor' => ['string', 'max:255'],
            'notes' => ['string', 'max:355'],
        ]);

        return Award::create([
            'title' => $request['title'],
            'type' => $request['type'],
            'sponsor' => $request['sponsor'],
            'notes' => $request['notes'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function show(Award $award)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function edit(Award $award)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Award $award)
    {
        $award = Award::findOrFail($award->id);
        
        $this->validate($request, [
            'title' => ['string', 'max:255'],
            'type' => ['string', 'max:255'],
            'sponsor' => ['string', 'max:255'],
            'notes' => ['string', 'max:355'],
        ]);

        $award->update($request->all());
        return ['message' => 'Award updated'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function destroy(Award $award)
    {
        $award = Award::findOrFail($award->id);
        $award->delete();
        return ['message' => 'User Deleted'];
    }
}
