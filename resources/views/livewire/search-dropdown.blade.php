<div class="relative mt-3 md:mt-0">
    <input type="text" wire:model="search" placeholder="Search movies..." class="bg-gray-800 rounded-full w-64 px-4 py-1 pl-8 text-sm focus:outline-none focus:shadow-outline">
    <div class="absolute top-0">
        <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/></svg>
    </div>
    <div class='absolute bg-gray-800 text-sm rounded w-64 mt-4'>
        <ul>
            <li class=border-b border-grey-700>
                <a href='#' class='block hover:bg-grey-700 px-3 py-3'>
                    {{$search}}
                </a>
            </li>
            <li class=border-b border-grey-700>
                <a href='#' class='block hover:bg-grey-700 px-3 py-3'>
                    Avengers
                </a>
            </li>
            <li class=border-b border-grey-700>
                <a href='#' class='block hover:bg-grey-700 px-3 py-3'>
                    Avengers
                </a>
            </li>
        </ul>
    </div>
</div>
