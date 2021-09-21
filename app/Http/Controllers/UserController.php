<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
    public function show($id)
    {
        $user = User::find($id);

        if ($user) {
            echo "<h1> Dados do Usuário </h1>";

            echo "<p><b>Nome:</b> {$user->name}, <b>Email:</b> {$user->email} </p>";

        }

        $address = $user->address()->first();
        if ($address) {
            echo "<h1> Endereço do Usuário </h1>";

            echo "<p><b>Rua:</b> {$address->street}, {$address->number} - <b>Cidade</b>: {$address->city} - {$address->state}  </p>";
        }

        $posts = $user->post()->get();
        if ($posts) {
            echo "<h1> Posts do Usuário </h1>";
            foreach ($posts as $post) {
                echo "<p><b>TAG:</b> {$post->slug} - <b>Titulo:</b> {$post->title} - <b>Conteúdo:</b> {$post->content}  </p>";
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
