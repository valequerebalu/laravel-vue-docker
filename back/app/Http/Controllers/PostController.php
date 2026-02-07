<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = [
            ['id' => 1, 'title' => 'Primer post', 'content' => 'Contenido del primer post'],
            ['id' => 2, 'title' => 'Segundo post', 'content' => 'Contenido del segundo post'],
            ['id' => 3, 'title' => 'Tercer post', 'content' => 'Contenido del tercer post'],
        ];
      
        return view('posts.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Crear un nuevo post";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('posts.show', ['id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('posts.edit', ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Actualizar el post con id: $id";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Eliminar el post con id: $id";
    }
}
