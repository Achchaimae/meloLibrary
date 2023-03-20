<aside class="bg-gray-900  w-[15%] flex flex-col items-center text-white  ">
    <div class="px-5 py-3 flex flex-col justify-center items-center">
        <img src="./images/LM9AWED.png" class="w-20 h-20 rounded-full border-4 border-green-500 " alt="">
        <div class="font-[lobster]">Achchaimae Khalaf</div>
        <div class="text-sm">Admin</div>
    </div>
    <ul class="w-full flex h-96 flex-col place-content-evenly">
        <a href="/Dashboard" class="hover:bg-white hover:text-blue-500 p-2 ">
            <li>
                <i class="fa-solid fa-music px-5"></i>
                Songs
            </li>
        </a>
        <a href="/Comments" class="hover:bg-white hover:text-blue-500 p-2 ">
            <li>
                <i class="fa-regular fa-comment px-5"></i>
                Comments
            
            </li>
        </a>
        <a href="/Bands" class="hover:bg-white hover:text-blue-500 p-2 ">
            <li>
                <i class="fa-solid fa-users px-5"></i>
                Bands
            </li>
        </a>
        <a href="/Artists" class="hover:bg-white hover:text-blue-500 p-2 " >
            <li>
                <i class="fa-solid fa-music px-5"></i>
                Artists
            </li>
        </a>
        
        <a href="/logout" class="hover:bg-white hover:text-blue-500 p-2 relative top-20">
        <li>
                <i class="fa-solid fa-sign-out px-5"></i>
                Logout
            </li>
        </a>
        
        
    </ul>
    
</aside>
@yield('content')