<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = Artist::all();

        return view('artist.index', ['artists' => $artists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $artist = new Artist();
        $artist->name = $request->name;
        $artist->age = $request->age;
        $artist->nationality = $request->nationality;
        $artist->email = $request->email;
        $artist->biography = $request->biography;

        $artist->save();

        return redirect('/artists');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artist = Artist::find($id);

        return view('artist.show', ['artist' => $artist]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $artist = Artist::find($id);

        return view('artist.edit', ['artist' => $artist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $artist =  Artist::find($id);
        $artist->name = $request->name;
        $artist->age = $request->age;
        $artist->nationality = $request->nationality;
        $artist->email = $request->email;
        $artist->biography = $request->biography;

        $artist->save();

        return redirect('/artists');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artist = Artist::find($id);

        $artist->delete();

        return redirect('/artists');
    }
}
