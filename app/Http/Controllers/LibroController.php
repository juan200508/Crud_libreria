<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Categoria;
use App\Models\Idioma;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libro = Libro::all();
        return view('libros.index', ['libro' => $libro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::pluck('titulo', 'cod_categoria');
        $autores = Autor::all()->pluck('nombre_apellido', 'cod_autor');
        $idioma = Idioma::all();
        return view('libros.create', ['idioma' => $idioma, 'categorias' => $categorias, 'autores' => $autores]);
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
            'titulo' => 'required|min:3|max:100',
            'descripcion' => 'required|min:3|max:100',
            'fecha_publicacion' => 'required',
            'cod_idioma' => 'required',
            'categorias' => 'required',
            'autores' => 'required'
        ]);

        $libro = Libro::create($request->all());
        $libro->categorias()->sync($request->categorias);
        return redirect()->route('libros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        $categorias = Categoria::pluck('titulo', 'cod_categoria');
        $autores = Autor::all()->pluck('nombre_apellido', 'cod_autor');
        $idioma = Idioma::all();
        return view('libros.edit', ['libros' => $libro, 'idioma' => $idioma, 'categorias' => $categorias, 'autores' => $autores]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        $request->validate([
            'titulo' => 'required|min:3|max:100',
            'descripcion' => 'required|min:3|max:100',
            'fecha_publicacion' => 'required',
            'cod_idioma' => 'required',
            'categorias' => 'required',
            'autores' => 'required'
        ]);

        $libro->update($request->all());
        $libro->categorias()->sync($request->asignaturas);
        $libro->autores()->sync($request->autores);
        return redirect()->route('libros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libros.index');
    }
}
