@extends('layouts.app')

@section('content')
<div class="movie-info border-b border-gray-800 flex">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <div class="flex-none">
            <img src="/img/sonic.jpg" alt="poster" class="w-64 md:w-96">
        </div>
        <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">
                    Sonic- The edgehog
                </h2>
                <div class="flex flex-wrap items-center text-grey-400 text-sm">
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                        <span class="ml-1">85%</span>
                        <span class="mx-1">|</span>
                        <span>Febuary 20, 2019</span>
                        <span class="mx-1"> | </span>
                        <span>Action, Thriller, Drama</span>
                </div>
                  <p class="text-gray-300 mt-8 ">
                Et velit proident mollit culpa enim anim fugiat amet enim est tempor.Non mollit ullamco exercitation et cupidatat anim. Dolor veniam ullamco veniam Lorem elit ullamco occaecat. Cillum minim aliquip officia magna ut Lorem do culpa culpa amet sint ex aute.
                 </p>
                 <div class="mt-12">
                    <h4 class="font-semibold text-white">
                        Featured cast
                    </h4>
                    <div class="flex m-4">
                        <div>
                            <div>Bong jo Oh</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                        <div class="ml-8">
                            <div>Bong jo Oh</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                    </div>
                    <div class="mt-12">
                        <button class="flex items-center rounded font-semibold text-gray-900 bg-orange-500 px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                             <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                                <span class="ml-2">Play Trailer</span>
                        </button>
                    </div>
                 </div>
        </div>
    </div>
</div><!-- end movie-info-->

<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                     <a href="#">
                            <img src="/img/actor1.jpg" alt="actor1" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">John Doe</a>
                            <div class="text-sm text-gray-400">
                                John Smith
                            </div>
                        </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                            <img src="/img/actor2.jpg" alt="actor2" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">John Doe</a>
                            <div class="text-sm text-gray-400">
                                John Smith
                            </div>
                        </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                            <img src="/img/actor3.jpg" alt="actor3" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">John Doe</a>
                            <div class="text-sm text-gray-400">
                                John Smith
                            </div>
                        </div>
                </div>
                <div class="mt-8">
                   <a href="#">
                            <img src="/img/actor4.jpg" alt="actor4" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">John Doe</a>
                            <div class="text-sm text-gray-400">
                                John Smith
                            </div>
                        </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                            <img src="/img/actor5.jpg" alt="actor5" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">John Doe</a>
                            <div class="text-sm text-gray-400">
                                John Smith
                            </div>
                        </div>
                </div>
        </div>
    </div>
</div><!-- end cast-->

<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Images</h2>
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8">
                <div class="mt-8">
                     <a href="#">
                            <img src="/img/image1.jpg" alt="actor1" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>

                </div>
                <div class="mt-8">
                    <a href="#">
                            <img src="/img/image2.jpg" alt="actor2" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>

                </div>
                <div class="mt-8">
                    <a href="#">
                            <img src="/img/image3.jpg" alt="actor3" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>

                </div>
                <div class="mt-8">
                   <a href="#">
                            <img src="/img/image4.jpg" alt="actor4" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>

                </div>
                <div class="mt-8">
                    <a href="#">
                            <img src="/img/image5.jpg" alt="actor5" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>

                </div>
        </div>
    </div>
</div><!-- end cast-->
@endsection
