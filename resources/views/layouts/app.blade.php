<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movie app</title>

        <!-- stylesheets -->
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!--scripts-->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>
    <body class="font-sans bg-gray-900 text-white">
<div id='app'>
    <nav class="border-b border-gray-800">
      <div class="container px-4 mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                <a href="{{route('movies.index')}}">
                    Logo
                </a>
                </li>
                <li class="md:ml-16">
                    <div class="bg-gray-800 flex items-center justify-center">
                        <div class="inline-block relative" x-data="{ open: false }">
                            <button x-on:click=" open = !open" class="focus:outline-none shadow cursor-pointer inline-block text-gray-700 hover:text-black flex border border-gray-400 rounded p-2 pl-3 pr-1 bg-gray-100" :class="{'font-semibold': open, 'shadow-none': open}">
                            Movie
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" :class="{'rotate-180': open}" class="ml-1 transform inline-block fill-current text-gray-500 w-6 h-6"><path fill-rule="evenodd" d="M15.3 10.3a1 1 0 011.4 1.4l-4 4a1 1 0 01-1.4 0l-4-4a1 1 0 011.4-1.4l3.3 3.29 3.3-3.3z"/></svg>
                            </button>

                            <ul x-show="open" class="bg-white absolute mt-2 shadow rounded w-40 py-1 text-indigo-600" style='z-index:10;'
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform -translate-y-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-end="opacity-0 transform -translate-y-3"
                            >
                                <li><a href="#popular" class="py-1 px-3 block hover:bg-gray-800">Popular</a></li>
                                <li><a href="#playing" class="py-1 px-3 border-b block hover:bg-gray-800">Now Playing</a></li>
                                <li><a href="#rated" class="py-1 px-3 block hover:bg-gray-800">Top Rated</a></li>
                                <li><a href="#coming" class="py-1 px-3 block hover:bg-gray-800">UpComing</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="md:ml-6">
                    <a href="#" class="hover:text-gray-300 mt-3 md:mt-0">
                        Tv Shows
                    </a>
                </li>
                <li class="md:ml-6">
                    <a href="#" class="hover:text-gray-300 mt-3 md:mt-0">
                        Actors
                    </a>
                </li>
            </ul>
         <!--the search bar-->
        <div class="flex flex-col md:flex-row items-center">
             <searchbar-component></searchbar-component>
                 <!--the profile-->
                    <div class="md:ml-4 mt-3 md:mt-0">
                        <a href="#">
                        <img src="{{asset('/img/avatar.jpg')}}" alt="avatar" class="rounded-full w-8 h-8">
                        </a>
                    </div>
        </div>
      </div>
    </nav>

      @yield('content')
</div>
      <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
