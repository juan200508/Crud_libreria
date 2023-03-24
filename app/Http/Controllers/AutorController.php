<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;
use App\Models\Sexo;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autore = Autor::all();
        return view('autores.index', ['autores' => $autore]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sexo = Sexo::all();
        return view('autores.create', ['sexo' => $sexo]);
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
            'nombres' => 'required|min:3|max:100',
            'apellidos' => 'required|min:3|max:100',
            'cod_sexo' => 'required'
        ]);

        Autor::create($request->all());
        return redirect()->route('autores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show(Autor $autore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit(Autor $autore)
    {
        $sexo = Sexo::all();
        return view('autores.edit', ['autor' => $autore, 'sexos' => $sexo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autor $autore)
    {
        $request->validate([
            'nombres' => 'required|min:3|max:100',
            'apellidos' => 'required|min:3|max:100',
            'cod_sexo' => 'required'
        ]);

        $autore->update($request->all());
        return redirect()->route('autores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autor $autore)
    {
        $autore->delete();

        return redirect()->route('autores.index');
    }
}
