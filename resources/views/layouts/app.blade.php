<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movie app</title>

        <!-- stylesheets -->
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        @livewireStyles

    </head>
    <body class="font-sans bg-gray-900 text-white">

    <nav class="border-b border-gray-800">
      <div class="container px-4 mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                <a href="{{route('movies.index')}}">
                    Logo
                </a>
                </li>
                <li class="md:ml-16">
                    <a href="{{route('movies.index')}}" class="hover:text-gray-300 mt-3 md:mt-0">
                        Movie
                    </a>
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
            <div class='relative mt-3 md:mt-0'>
                <input type='text' class='bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline' placeholder='Search Movies...'>
                <div class="absolute top-0">
                    <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/></svg>
                </div>
            </div>
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
      <script src="{{asset('js/app.js')}}"></script>
      @livewireScripts
    </body>
</html>
