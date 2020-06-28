@extends('layouts.app')

@section('content')
<div class="container px-4 mx-auto pt-16">
    <div class="popular-movies" id="popular">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            Popular Movies
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($popularMovies  as $movie)
                <div class="mt-8">
                    <a href="{{route('movies.show', $movie['id'])}}">
                        <img src="{{asset('https://image.tmdb.org/t/p/w500/' . $movie['poster_path'])}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                     <div class="mt-2">
                       <a href="{{route('movies.show', $movie['id'])}}" class="text-lg mt-2 hover:text-grey-300"> {{$movie['title']}} </a>
                     </div>
                     <div class="flex items-center text-grey-400 text-sm mt-1">
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                        <span class="ml-1">{{$movie['vote_average'] * 10 . '%'}}</span>
                        <span class="mx-1">|</span>
                        <span>{{\carbon\carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
                     </div>
                     <div class="text-gray-400 text-sm">
                        @foreach ($movie['genre_ids'] as $genre)
                            {{$genres->get($genre)}}@if (!$loop->last) , @endif
                        @endforeach
                     </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--now playing section-->
    <div class="now-playing py-24" id="playing">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            Now Playing
        </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($nowPlaying as $playing)
                    <div class="mt-8">
                            <a href="{{route('movies.show', $playing['id'])}}">
                                <img src="{{asset('https://image.tmdb.org/t/p/w500/' . $playing['poster_path'])}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        <div class="mt-2">
                        <a href="{{route('movies.show', $playing['id'])}}" class="text-lg mt-2 hover:text-grey-300"> {{$playing['title']}} </a>
                        </div>
                        <div class="flex items-center text-grey-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                            <span class="ml-1">{{$playing['vote_average'] * 10 . '%'}}</span>
                            <span class="mx-1">|</span>
                            <span>{{\carbon\carbon::parse($playing['release_date'])->format('M d, Y')}}</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            @foreach ($playing['genre_ids'] as $genre)
                                {{$genres->get($genre)}}@if (!$loop->last) , @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
    <!--top rated section-->
    <div class="top-rated py-24" id="rated">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            Top Rated
        </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($topRated as $rated)
                    <div class="mt-8">
                            <a href="{{route('movies.show', $rated['id'])}}">
                                <img src="{{asset('https://image.tmdb.org/t/p/w500/' . $rated['poster_path'])}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        <div class="mt-2">
                        <a href="{{route('movies.show', $rated['id'])}}" class="text-lg mt-2 hover:text-grey-300"> {{$rated['title']}} </a>
                        </div>
                        <div class="flex items-center text-grey-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                            <span class="ml-1">{{$rated['vote_average'] * 10 . '%'}}</span>
                            <span class="mx-1">|</span>
                            <span>{{\carbon\carbon::parse($rated['release_date'])->format('M d, Y')}}</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            @foreach ($rated['genre_ids'] as $genre)
                                {{$genres->get($genre)}}@if (!$loop->last) , @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
    <!--upComing section-->
    <div class="up-coimng py-24" id="coming">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            UpComing Movies
        </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($upComing as $coming)
                    <div class="mt-8">
                            <a href="{{route('movies.show', $coming['id'])}}">
                                <img src="{{asset('https://image.tmdb.org/t/p/w500/' . $coming['poster_path'])}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        <div class="mt-2">
                        <a href="{{route('movies.show', $coming['id'])}}" class="text-lg mt-2 hover:text-grey-300"> {{$coming['title']}} </a>
                        </div>
                        <div class="flex items-center text-grey-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                            <span class="ml-1">{{$coming['vote_average'] * 10 . '%'}}</span>
                            <span class="mx-1">|</span>
                            <span>{{\carbon\carbon::parse($coming['release_date'])->format('M d, Y')}}</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            @foreach ($coming['genre_ids'] as $genre)
                                {{$genres->get($genre)}}@if (!$loop->last) , @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
</div>

@endsection
