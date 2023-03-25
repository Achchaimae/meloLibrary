 
<aside class="w-20 flex flex-col h-screen sm:w-60 md-62  backg bg-gray-800" >
    <div class="px-5 py-3">
        <img src="./images/dummy-user.png" class="w-10 h-10 rounded-full" alt="">
    </div>
    <ul class="w-full flex h-96 flex-col place-content-evenly">

            <a href="/" class="hover:bg-white hover:text-blue-500 py-2 relative top-20">
                <li>
                    <i class="fa-solid fa-house px-5"></i>
                    <span class="hidden sm:inline"> Explore</span>
                </li>
            </a>
            <a href="artist" class="hover:bg-white hover:text-blue-500 py-2 relative top-20">
                <li>
                    <i class="fa-solid fa-user px-5"></i>
                    <span class="hidden sm:inline">Artists</span>
                
                </li>
            </a>
            <a href="album" class="hover:bg-white hover:text-blue-500 py-2 relative top-20">
                <li>
                    <i class="fa-solid fa-compact-disc px-5"></i>
                    <span class="hidden sm:inline">Albums</span>
                </li>
            </a>
            <a href="playlist" class="hover:bg-white hover:text-blue-500 py-2 relative top-20" >
                <li>
                    <i class="fa-solid fa-music px-5"></i>
                    <span class="hidden sm:inline">Playlist</span>
                </li>
            </a>
            @auth
            <a href="/logout" class="hover:bg-white hover:text-blue-500 py-2 relative top-72">
                <li>
                    <i class="fa-solid fa-sign-out px-5"></i>
                    Logout
                </li>
            </a>
            @else
            @endauth
        
        
    </ul>
</aside>
@yield('content')