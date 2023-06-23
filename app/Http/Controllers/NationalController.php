<?php

namespace App\Http\Controllers;

use App\Models\National;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NationalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nationals = National::all();

        return view('national.index', ['nationals' => $nationals]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::check()) {
            return redirect('/login');
            }
        return view('national.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/login');
            }
        $national = new National();
        $national->name = $request->name;


        $national->save();

        return redirect('/nationals');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $national = National::find($id);

        return view('national.show', ['national' => $national]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!Auth::check()) {
            return redirect('/login');
            }
        $national = National::find($id);

        return view('national.edit', ['national' => $national]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!Auth::check()) {
            return redirect('/login');
            }
        $national = National::find($id);
        $national->name = $request->name;


        $national->save();

        return redirect('/nationals');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Auth::check()) {
            return redirect('/login');
            }
        $national = National::find($id);

        $national->delete();

        return redirect('/nationals');
    }
}