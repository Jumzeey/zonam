@extends('layouts.app')

@section('content')
<div class="movie-info border-b border-gray-800 flex">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <div class="flex-none">
            <img src="{{asset('https://image.tmdb.org/t/p/w500/' . $movie['poster_path'])}}" alt="poster" class="w-64 lg:w-96">
        </div>
        <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">
                    {{$movie['title']}}
                </h2>
                <div class="flex flex-wrap items-center text-grey-400 text-sm">
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                        <span class="ml-1">{{$movie['vote_average'] * 10 . '%'}}</span>
                        <span class="mx-1">|</span>
                        <span>Febuary 20, 2019</span>
                        <span class="mx-1"> | </span>
                        <span>{{\carbon\carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
                        <span class="mx-1">
                            @foreach ($movie['genres'] as $genre)
                                {{$genre['name']}}@if (!$loop->last) , @endif
                            @endforeach
                        </span>
                </div>
                <div>
                    <h3 class="tagline" dir="auto"><i>{{$movie['tagline']}}</i></h3>
                </div>
                <div>
                    <div>
                        <h2><b>Overview</b></h2>
                    </div>
                  <p class="text-gray-300 mt-8 ">
                    {{$movie['overview']}}
                 </p>
                </div>
                <div class="mt-12">
                    <h4 class="font-semibold text-white">
                        Featured cast
                    </h4>
                    <div class="flex m-4">
                    @foreach ($movie['credits']['crew'] as $crew )
                        @if ($loop->index <2)
                            <div class="mr-8">
                                <div>{{$crew['name']}}</div>
                                <div class="text-sm text-gray-400">{{$crew['job']}}</div>
                            </div>
                        @endif
                    @endforeach
                    </div>
                    @if (count($movie['videos']['results']) > 0)
                        <div class="mt-12">
                        <a href='https://youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}' class="flex inline-flex items-center rounded font-semibold text-gray-900 bg-orange-500 px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                             <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                                <span class="ml-2">Play Trailer</span>
                        </a>
                    </div>
                    @endif
                 </div>
        </div>
    </div>
</div><!-- end movie-info-->

<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Top Cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($movie['credits']['cast'] as $cast )
                @if ($loop->index <5)
                    <div class="mt-8">
                        <div>
                                <img src="{{asset('https://image.tmdb.org/t/p/w300/' . $cast['profile_path'])}}" alt="cast" class="hover:opacity-75 transition ease-in-out duration-150">
                        </div>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">{{$cast['name']}}</a>
                            <div class="text-sm text-gray-400">
                                {{$cast['character']}}
                            </div>
                        </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</div><!-- end cast-->



<div>
<h2 class="text-4xl font-semibold text-center">Similar Movies</h2>
@include('partials.carousel')
</div><!--recommended ends-->
@endsection
