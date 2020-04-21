<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movie app</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body class="font-sans bg-gray-900 text-white">

    <nav class="border-b border-gray-800">
      <div class="container px-4 mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
        <ul class="flex flex-col md:flex-row items-center">
            <li>
              <a href="/">
                 Logo
               </a>
            </li>
            <li class="md:ml-16">
                <a href="#" class="hover:text-gray-300 mt-3 md:mt-0">
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
                <div class="relative mt-3 md:mt-0">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1 pl-8 text-sm focus:outline-none focus:shadow-outline" placeholder="search">
                </div>
                <div class="absolute top-0">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve" width="14" height="14" class= "fill-current text-gray-500  mt-8 ml-2"><g class="nc-icon-wrapper"><line data-color="color-2" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="22" y1="22" x2="16.4" y2="16.4" stroke-linejoin="miter"></line> <circle fill="none" stroke="#fff" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" cx="10" cy="10" r="9" stroke-linejoin="miter"></circle></g></svg>
                </div>
                 <!--the profile-->
        <div class="md:ml-4 mt-3 md:mt-0">
            <a href="#">
             <img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8">
            </a>
        </div>
            </div>


      </div>
    </nav>
      @yield('content')
    </body>
</html>
