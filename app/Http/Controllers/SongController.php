<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Category;
use App\Models\National;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Song::All();
        return view('song.index', ['songs' => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artists = Artist::all();
        $categories = Category::all();
        $albums = Album::all();
        $nationals = National::all();
        return view('song.create',[
            'artists' => $artists,
            'categories' => $categories,
            'albums' => $albums,
            'nationals' => $nationals
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $song = new Song();
        $song->name = $request->name;
        $song->artist_id = $request->artist;
        $song->album_id = $request->album;
        $song->national_id = $request->national;
        $song->category_id = $request->category;
        $video = $request->file('video')->store('upload');
        $song->video = substr($video, strlen('public/'));
        $song->save();

        return redirect('/songs')->with('status', 'Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $song = Song::find($id);

        return view('song.show', ['song' => $song]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $song = Song::find($id);

        return view('song.edit', ['song' => $song]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $song = Song::find($id);
        $artists = Artist::all();
        $categories = Category::all();
        $albums = Album::all();
        $nationals = National::all();
        return view('song.edit', [
            'song' => $song,
            'artists' => $artists,
            'categories' => $categories,
            'albums' => $albums,
            'nationals' => $nationals
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $song = Song::find($id);

        $song->delete();

        return redirect('/songs');
    }
}
