 
<aside class="w-20 flex flex-col sm:w-60 backg bg-gray-800" >
    <div class="px-5 py-3">
        <img src="./images/LM9AWED.png" class="w-10 h-10 rounded-full" alt="">
    </div>
    <ul class="px-5 flex h-96 flex-col place-content-evenly">

            <a href="/" class="hover:bg-white hover:text-blue-500 p-2 ">
                <li>
                    <i class="fa-solid fa-house"></i>
                    <span class="hidden sm:inline"> Explore</span>
                </li>
            </a>
            <a href="artist" class="hover:bg-white hover:text-blue-500 p-2 ">
                <li>
                    <i class="fa-solid fa-user"></i>
                    <span class="hidden sm:inline">Artists</span>
                
                </li>
            </a>
            <a href="album" class="hover:bg-white hover:text-blue-500 p-2 ">
                <li>
                    <i class="fa-solid fa-compact-disc"></i>
                    <span class="hidden sm:inline">Albums</span>
                </li>
            </a>
            <a href="playlist" class="hover:bg-white hover:text-blue-500 p-2 " >
                <li>
                    <i class="fa-solid fa-music"></i>
                    <span class="hidden sm:inline">Playlist</span>
                </li>
            </a>
        
        
    </ul>
</aside>
@yield('content')