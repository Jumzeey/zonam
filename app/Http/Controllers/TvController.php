<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $popularTv= Http::get('https://api.themoviedb.org/3/tv/popular?api_key=af01ac3e86bae1ffd464d0687ad2fb8a')
        ->json()['results'];

         $topRatedTv= Http::get('https://api.themoviedb.org/3/tv/top_rated?api_key=af01ac3e86bae1ffd464d0687ad2fb8a&page=1')
        ->json()['results'];

        $genreArray= Http::get('https://api.themoviedb.org/3/genre/tv/list?api_key=af01ac3e86bae1ffd464d0687ad2fb8a')
        ->json()['genres'];

        $genre = collect($genreArray)->mapWithKeys(function ($genre){
            return [$genre['id']=>$genre['name']];
        });

        return view('tvseries', [
            'popularTv'=>$popularTv,
            'topRatedTv'=>$topRatedTv,
            'genres'=>$genre,
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
         $tv= Http::get('https://api.themoviedb.org/3/tv/'.$id.'?api_key=af01ac3e86bae1ffd464d0687ad2fb8a&language=en-US&append_to_response=credits,videos,recommendations,similar,reviews')
        ->json();

        return view('tvshow', [
            'tv' => $tv,
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
