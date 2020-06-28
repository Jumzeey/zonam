@extends('layouts.app')

@section('content')
<div class="container px-4 mx-auto pt-16">
    <div class="popular-shows" id="popular">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            Popular Shows
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($popularTv  as $tv)
                <div class="mt-8">
                    <a href="{{route('tv.show', $tv['id'])}}">
                        <img src="{{asset('https://image.tmdb.org/t/p/w500/' . $tv['poster_path'])}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                     <div class="mt-2">
                       <a href="{{route('tv.show', $tv['id'])}}" class="text-lg mt-2 hover:text-grey-300"> {{$tv['name']}} </a>
                     </div>
                     <div class="flex items-center text-grey-400 text-sm mt-1">
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                        <span class="ml-1">{{$tv['vote_average'] * 10 . '%'}}</span>
                        <span class="mx-1">|</span>
                        <span>{{\carbon\carbon::parse($tv['first_air_date'])->format('M d, Y')}}</span>
                     </div>
                     <div class="text-gray-400 text-sm">
                        @foreach ($tv['genre_ids'] as $genre)
                            {{$genres->get($genre)}}@if (!$loop->last) , @endif
                        @endforeach
                     </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--top rated section-->
    <div class="top-rated-shows py-24" id="playing">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            Top Rated Shows
        </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($topRatedTv as $top)
                    <div class="mt-8">
                            <a href="{{route('tv.show', $top['id'])}}">
                                <img src="{{asset('https://image.tmdb.org/t/p/w500/' . $top['poster_path'])}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        <div class="mt-2">
                        <a href="{{route('tv.show', $top['id'])}}" class="text-lg mt-2 hover:text-grey-300"> {{$top['name']}} </a>
                        </div>
                        <div class="flex items-center text-grey-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                            <span class="ml-1">{{$top['vote_average'] * 10 . '%'}}</span>
                            <span class="mx-1">|</span>
                            <span>{{\carbon\carbon::parse($top['first_air_date'])->format('M d, Y')}}</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            @foreach ($top['genre_ids'] as $genre)
                                {{$genres->get($genre)}}@if (!$loop->last) , @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
</div>

@endsection
