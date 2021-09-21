<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        if ($post) {
            echo "<h1> Dados deste Post </h1>";

            echo "<p><b>TAG:</b> {$post->slug} - <b>Titulo:</b> {$post->title} - <b>Conteúdo:</b> {$post->content}  </p>";
        }

        $user = $post->user()->first();
        if ($user) {
            echo "<h1> Dados do Autor </h1>";

            echo "<p><b>Nome:</b> {$user->name}, <b>Email:</b> {$user->email} </p>";

        }

        $categories = $post->categories()->get();
        if ($categories) {
            echo "<h1> Categorias do Post </h1>";
            foreach ($categories as $category) {
                echo "<p><b>Titulo:</b> {$category->title} - <b>Descrição:</b> {$category->description} </p>";
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
