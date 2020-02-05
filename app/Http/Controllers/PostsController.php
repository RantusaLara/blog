<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// To moras zal rocno
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('index')->with('posts', $posts);
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
        $post = Post::find($id);
        //dd($post);
        return view('show')->with('post', $post);
    }

    //----------------------
    public function nova()
    {
        $post = Post::find($name);;
       // return view('nova')->with('post', $post;
    }
    //----------------------

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    public function posodobi(Request $request, $id)
    {
        $input = $request->input();

        $post = Post::find($id);

        $post->naslov = $input['firstName'];
        $post->opis = $input['lastName'];

        $post->update();

        return redirect('/izpis');
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
        $post = Post::find($id);
        $post->delete();

        // redirect here, pazi da imas ruto za destroy v web.php
    }

    public function izpis() {
        $posts = Post::all();
        return view('izpis')->with('posts', $posts);
    }

    public function vnos(Request $request)
    {
        //dd($request);

        $sifrant = $request->input();
        //dd($sifrant)

        $ime = $sifrant['ime'];
        $firstName = $sifrant['firstName'];
        $lastName = $sifrant['lastName'];

        // Pripravim model 'Post'
        $post = new Post();
        $post->naslov = $firstName;
        $post->opis = $lastName;

        // Shranim izpolnjeno instanco 'Posta' v bazo
        $post->save();

        return $this->izpis();
    }
}
