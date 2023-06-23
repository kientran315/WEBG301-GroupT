<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Category;
use App\Models\National;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if (!Auth::check()) {
            return redirect('/login');
            }
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
        if (!Auth::check()) {
            return redirect('/login');
            }
        $song = new Song();
        $song->name = $request->name;
        $song->album_id = $request->album;
        $song->national_id = $request->national;
        $song->category_id = $request->category;
        $video = $request->file('video')->store('upload');
        $song->video = substr($video, strlen('public/'));
        $song->save();
        $song->artists()->attach($request->artists);

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
        if (!Auth::check()) {
            return redirect('/login');
            }
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        if (!Auth::check()) {
        return redirect('/login');
        }
        $song =  Song::find($id);
        $song->name = $request->name;
        $song->artists()->sync($request->artists);
        $song->album_id = $request->album;
        $song->national_id = $request->national;
        $song->category_id = $request->category;
        if($request->hasFile('video')){
            $video = $request->file('video')->store('upload');
            $song->video = substr($video, strlen('public/'));
          }  else{
                $song->video == null;
          }
      
        $song->save();

        return redirect('/songs')->with('status', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Auth::check()) {
            return redirect('/login');
            }
        $song = Song::find($id);

        $song->delete();

        return redirect('/songs');
    }

    public function search(){
        $search_text = $_GET['query'];
        $songs = Song::where('name', 'LIKE', '%'.$search_text.'%')->get(); 
        return view('song.search', ['songs' => $songs]);
    }
}
