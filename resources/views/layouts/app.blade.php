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
      <div class="container mx-auto flex items-center justify-between px-4 py-6">
        <ul class="flex items-center">
            <li>
              <a>
                <svg  xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 96 24" >

                            <path d="M330.804,171.002c-3.6-6.4-12-8.8-18.8-4.8l-45.6,26.4l-11.6,6.8v63.2l10.8,6.4c0.4,0,0.4,0.4,0.8,0.4l44.8,26
                                c2,1.6,4.8,2.4,7.6,2.4c7.6,0,13.6-6,13.6-13.6v-53.6l0.4-52.8C332.804,175.402,332.404,173.002,330.804,171.002z"/>
                            <path d="M64.404,150.602c35.6,0,64.4-28.8,64.4-64.4c0-35.6-28.8-64.4-64.4-64.4s-64.4,28.8-64.4,64.4
                                C-0.396,121.802,28.804,150.602,64.404,150.602z M64.404,59.802c14.8,0,26.4,12,26.4,26.4c0,14.8-12,26.4-26.4,26.4
                                c-14.4,0-26.4-12-26.4-26.4C37.604,71.402,49.604,59.802,64.404,59.802z"/>
                            <path d="M227.604,154.202c-10.4,5.2-22,8.4-34.4,8.4c-15.2,0-29.6-4.4-41.6-12.4h-45.6c-12,8-26.4,12.4-41.6,12.4
                                c-12.4,0-24-2.8-34.4-8.4c-9.2,5.2-15.6,15.6-15.6,26.8v97.6c0,18,14.8,32.4,32.4,32.4h164.4c18,0,32.4-14.8,32.4-32.4v-97.6
                                C243.204,169.802,236.804,159.402,227.604,154.202z"/>
                            <path d="M193.204,150.602c35.6,0,64.4-28.8,64.4-64.4c0-35.6-28.8-64.4-64.4-64.4c-35.6,0-64.4,28.8-64.4,64.4
                                C128.804,121.802,157.604,150.602,193.204,150.602z M193.204,59.802c14.8,0,26.4,12,26.4,26.4c0,14.8-12,26.4-26.4,26.4
                                c-14.4,0-26.4-12-26.4-26.4C166.804,71.402,178.404,59.802,193.204,59.802z" fill="#ffffff"/>

                </svg>
               </a>
            </li>
            <li class="ml-16">
                <a href="#" class="hover:text-gray-300">
                    Movie
                </a>
            </li>
            <li class="ml-6">
                <a href="#" class="hover:text-gray-300">
                    Tv Shows
                </a>
            </li>
            <li class="ml-6">
                <a href="#" class="hover:text-gray-300">
                    Actors
                </a>
            </li>
        </ul>
         <!--the search bar-->
            <div class="flex items-center">
                <div class="relative">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1 pl-8 focus:outline-none focus:shadow-outline" placeholder="search">
                </div>
            </div>

      </div>
    </nav>
      @yield('content')
    </body>
</html>
