<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ActorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actors1= Http::get('https://api.themoviedb.org/3/person/popular?api_key=af01ac3e86bae1ffd464d0687ad2fb8a&page=1')
        ->json()['results'];
        $actors2= Http::get('https://api.themoviedb.org/3/person/popular?api_key=af01ac3e86bae1ffd464d0687ad2fb8a&page=2')
        ->json()['results'];
        $actors3= Http::get('https://api.themoviedb.org/3/person/popular?api_key=af01ac3e86bae1ffd464d0687ad2fb8a&page=3')
        ->json()['results'];
        $actors4= Http::get('https://api.themoviedb.org/3/person/popular?api_key=af01ac3e86bae1ffd464d0687ad2fb8a&page=4')
        ->json()['results'];
        $actors5= Http::get('https://api.themoviedb.org/3/person/popular?api_key=af01ac3e86bae1ffd464d0687ad2fb8a&page=5')
        ->json()['results'];
        $actors6= Http::get('https://api.themoviedb.org/3/person/popular?api_key=af01ac3e86bae1ffd464d0687ad2fb8a&page=6')
        ->json()['results'];

      

        return view('actors',  [
            'actors1'=>$actors1,
            'actors2'=>$actors2,
            'actors3'=>$actors3,
            'actors4'=>$actors4,
            'actors5'=>$actors5,
            'actors6'=>$actors6,
        ]);
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
        $actors= Http::get('https://api.themoviedb.org/3/person/'.$id.'?api_key=af01ac3e86bae1ffd464d0687ad2fb8a&language=en-US&append_to_response=credits,external_ids')
        ->json();

        return view('actor', [
            'actors' => $actors,
        ]);
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
