<?php

namespace App\Http\Controllers;

use App\Models\Idioma;
use Illuminate\Http\Request;

class IdiomaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idioma = Idioma::all();
        return view('idiomas.index', ['idioma' => $idioma]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('idiomas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|min:3|max:100|unique:lib_idioma'
        ]);
        Idioma::create($request->all());
        return redirect()->route('idiomas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function show(Idioma $idioma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function edit(Idioma $idioma)
    {
        return view('idiomas.edit', ['idiomas' => $idioma]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Idioma $idioma)
    {
        $request->validate([
            'descripcion' => 'required|min:3|max:100|unique:lib_idioma'
        ]);
        $idioma->update($request->all());
        return redirect()->route('idiomas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Idioma $idioma)
    {
        $idioma->delete();
        return redirect()->route('idiomas.index');
    }
}
