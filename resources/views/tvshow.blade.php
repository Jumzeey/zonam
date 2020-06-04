@extends('layouts.app')

@section('content')
<div class="tv-info border-b border-gray-800 flex">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <div class="flex-none">
            <img src="{{asset('https://image.tmdb.org/t/p/w500/' . $tv['poster_path'])}}" alt="poster" class="lg:w-64">
        </div>
        <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">
                    {{$tv['name']}}
                </h2>
                <div class="flex flex-wrap items-center text-grey-400 text-sm">
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                        <span class="ml-1">{{$tv['vote_average'] * 10 . '%'}}</span>
                        <span class="mx-1"> | </span>
                        <span>{{\carbon\carbon::parse($tv['last_air_date'])->format('M d, Y')}}</span>
                        <span class="mx-1">
                            @foreach ($tv['genres'] as $genre)
                                {{$genre['name']}}@if (!$loop->last) , @endif
                            @endforeach
                        </span>
                </div>
                <div>
                    <div>
                        <h2><b>Overview</b></h2>
                    </div>
                  <p class="text-gray-300 mt-8 ">
                    {{$tv['overview']}}
                 </p>
                </div>
                <div class="mt-12">
                    <h4 class="font-semibold text-white">
                        Created By
                    </h4>
                    <div class="flex m-4">
                        @foreach ($tv['credits']['crew'] as $crew )
                            @if ($loop->index <2)
                                <div class="mr-8">
                                    <div>{{$crew['name']}}</div>
                                    <div class="text-sm text-gray-400">{{$crew['job']}}</div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div x-data="{ isOpen: false }">
                    @if (count($tv['videos']['results']) > 0)
                        <div class="mt-12">
                            <button
                                x-on:click=" isOpen = !isOpen"
                                class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150"
                            >
                                <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                                <span class="ml-2">Play Trailer</span>
                            </button>
                        </div>
                        <div
                            style="background-color: rgba(0, 0, 0, .5);"
                            class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                            x-show="isOpen"
                            >
                                <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto" x-on:click.away="isOpen = false">
                                    <div class="bg-gray-900 rounded">
                                        <div class="flex justify-end pr-4 pt-2">
                                            <button
                                               x-on:click=" isOpen = false"
                                                class="text-3xl leading-none hover:text-gray-300">&times;
                                            </button>
                                        </div>
                                        <div class="modal-body px-8 py-8">
                                            <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                                                <iframe class="responsive-iframe absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/{{ $tv['videos']['results'][0]['key'] }}" style="border:0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    @endif


                </div>

                   </div>
        </div>
    </div>
</div><!-- end movie-info-->

<div class="tv-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Top Cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($tv['credits']['cast'] as $cast )
                @if ($loop->index <10)
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
@endsection
