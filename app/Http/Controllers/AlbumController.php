<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Album;
class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all();

        return view('album.index', [
            'albums' => $albums,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('album.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $album = new Album();
        $album->name = $request->name;
        $album->description = $request->description;
        $album->year = $request->year;


        $album->save();

        return redirect('/albums');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $album = Album::find($id);
        return view('album.show', [
            'album' => $album,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $album = Album::find($id);
        return view('album.edit', [
            'album' => $album,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $album =  Album::find($id);

        $album->name = $request->name;
        $album->description = $request->description;
        $album->year = $request->year;


        $album->save();

        return redirect('/albums');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $album = Album::find($id);

        $album->delete();

        return redirect('/albums');
    }
}
