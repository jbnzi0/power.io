<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Publication::latest()->paginate(15);
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
            'content' => ['string', 'string']
        ]);

        return Publication::create([
            'title' => $request['title'],
            'type' => $request['type'],
            'content' => $request['content'],
            'compact_title' => str_replace(" ", "_",$request['title']),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $publication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publication $publication)
    {
        $publication = Publication::findOrFail($publication->id);
        
        $this->validate($request, [
            'title' => ['string', 'max:255'],
            'type' => ['string', 'max:255'],
            'content' => ['string', 'string']
        ]);

        $publication->update($request->all());
        return ['message' => 'Publication updated'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
        $publication = Publication::findOrFail($publication->id);
        $publication->delete();
        return ['message' => 'User Deleted'];
    }
}


