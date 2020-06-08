@extends('layouts.app')

@section('content')
    <div class="container px-4 mx-auto pt-16">
        <div class="popular-shows" id="popular">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            Popular Actors
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($actors1  as $acts1)
                <div class="mt-8">
                    <a href="{{route('actor.show', $acts1['id'])}}">
                        <img src="{{asset('https://image.tmdb.org/t/p/w500/' . $acts1['profile_path'])}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                     <div class="mt-2">
                       <a href="{{route('actor.show',$acts1['id'])}}" class="text-lg mt-2 hover:text-grey-300"> {{$acts1['name']}} </a>
                     </div>
                </div>
            @endforeach
            @foreach ($actors2  as $acts2)
                <div class="mt-8">
                    <a href="{{route('actor.show', $acts2['id'])}}">
                        <img src="{{asset('https://image.tmdb.org/t/p/w500/' . $acts2['profile_path'])}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                     <div class="mt-2">
                       <a href="{{route('actor.show',$acts2['id'])}}" class="text-lg mt-2 hover:text-grey-300"> {{$acts2['name']}} </a>
                     </div>
                </div>
            @endforeach
            @foreach ($actors3  as $acts3)
                <div class="mt-8">
                    <a href="{{route('actor.show', $acts3['id'])}}">
                        <img src="{{asset('https://image.tmdb.org/t/p/w500/' . $acts3['profile_path'])}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                     <div class="mt-2">
                       <a href="{{route('actor.show',$acts3['id'])}}" class="text-lg mt-2 hover:text-grey-300"> {{$acts3['name']}} </a>
                     </div>
                </div>
            @endforeach
            @foreach ($actors4  as $acts4)
                <div class="mt-8">
                    <a href="{{route('actor.show', $acts4['id'])}}">
                        <img src="{{asset('https://image.tmdb.org/t/p/w500/' . $acts4['profile_path'])}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                     <div class="mt-2">
                       <a href="{{route('actor.show',$acts4['id'])}}" class="text-lg mt-2 hover:text-grey-300"> {{$acts4['name']}} </a>
                     </div>
                </div>
            @endforeach
            @foreach ($actors5  as $acts5)
                <div class="mt-8">
                    <a href="{{route('actor.show', $acts5['id'])}}">
                        <img src="{{asset('https://image.tmdb.org/t/p/w500/' . $acts5['profile_path'])}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                     <div class="mt-2">
                       <a href="{{route('actor.show',$acts5['id'])}}" class="text-lg mt-2 hover:text-grey-300"> {{$acts5['name']}} </a>
                     </div>
                </div>
            @endforeach
            @foreach ($actors6  as $acts6)
                <div class="mt-8">
                    <a href="{{route('actor.show', $acts6['id'])}}">
                        <img src="{{asset('https://image.tmdb.org/t/p/w500/' . $acts6['profile_path'])}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                     <div class="mt-2">
                       <a href="{{route('actor.show',$acts6['id'])}}" class="text-lg mt-2 hover:text-grey-300"> {{$acts6['name']}} </a>
                     </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
