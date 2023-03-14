<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- tailwind link -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- fontawsome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://kit.fontawesome.com/93e0a23dda.css" crossorigin="anonymous"> -->
    <!-- css link -->
    <link rel="stylesheet" href="./css/style.css">
     <!-- icon link -->
    <link rel="icon" href="images/header.svg" type="image/icon type">
    <title>Dashboard</title>
</head>
<body class="flex w-full h-screen fixed scroll-smooth ">
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
        <a href="/Playlists" class="hover:bg-white hover:text-blue-500 p-2 " >
            <li>
                <i class="fa-solid fa-music px-5"></i>
                Playlist
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
<section class="bg-indigo-50 w-[85%] p-4">
    <!-- component -->
    <div class=" shadow-lg w-full my-auto rounded p-4 h-auto ">
         <div class='max-w-md mx-auto mb-4 '>
             <div class="relative flex items-center w-full h-12 rounded focus-within:shadow-lg bg-white overflow-hidden">
                 <div class="grid place-items-center h-full w-12 text-gray-300">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                     </svg>
                 </div>
 
                 <input
                 class="peer h-full w-full outline-none text-sm text-gray-700 pr-2"
                 type="text"
                 id="search"
                 placeholder="Search something.." /> 
             </div>
         </div>
         <div class="flex justify-between flex-wrap  gap-2 p-4 rounded">
             <div class="bg-gray-700  text-white w-60 h-60 p-8  rounded  flex flex-col justify-around items-center">
                 <i class="fa-solid fa-plus text-2xl "></i>
             </div>
             <div class="bg-gray-700  text-white w-60 h-60 p-4  rounded  flex flex-col justify-around items-center group/item ">
                 <div class="flex relative flex-wrap z-1 justify-center items-center group/edit group-hover/item:scale-110 group-hover/item:opacity-30 ">
                     <img src="./images/band.jpg" alt="playlist" class="w-24 h-24">
                     <img src="./images/cover.jpg" alt="" class="w-24 h-24">
                     <img src="./images/cover.jpg" alt="" class="w-24 h-24">
                     <img src="./images/band.jpg" alt="playlist" class="w-24 h-24">
                 </div>
                 <div class="text-center z-10 group/edit group-hover/item:hidden ">
                     <div class="font-bold text-xl">Happy</div>
                 </div>
                 <div class=" justify-between items-center gap-4 z-10 m-auto absolute hidden group/edit group-hover/item:block ">
                    <i class="fa-solid fa-trash-can bg-gray-700 p-2 rounded-full"></i>
                    <i class="fa-solid fa-edit bg-gray-700 p-2 rounded-full"></i>
                 </div>
             </div>
             <div class="bg-gray-700  text-white w-60 h-60 p-4  rounded  flex flex-col justify-around items-center group/item ">
                <div class="flex relative flex-wrap z-1 justify-center items-center group/edit group-hover/item:scale-110 group-hover/item:opacity-30 ">
                    <img src="./images/band.jpg" alt="playlist" class="w-24 h-24">
                    <img src="./images/cover.jpg" alt="" class="w-24 h-24">
                    <img src="./images/cover.jpg" alt="" class="w-24 h-24">
                    <img src="./images/band.jpg" alt="playlist" class="w-24 h-24">
                </div>
                <div class="text-center z-10 group/edit group-hover/item:hidden ">
                    <div class="font-bold text-xl">Sad</div>
                </div>
                <div class=" justify-between items-center gap-4 z-10 m-auto absolute hidden group/edit group-hover/item:block ">
                   <i class="fa-solid fa-trash-can bg-gray-700 p-2 rounded-full"></i>
                   <i class="fa-solid fa-edit bg-gray-700 p-2 rounded-full"></i>
                </div>
            </div>
             
            <div class="bg-gray-700  text-white w-60 h-60 p-4  rounded  flex flex-col justify-around items-center group/item ">
                <div class="flex relative flex-wrap z-1 justify-center items-center group/edit group-hover/item:scale-110 group-hover/item:opacity-30 ">
                    <img src="./images/band.jpg" alt="playlist" class="w-24 h-24">
                    <img src="./images/cover.jpg" alt="" class="w-24 h-24">
                    <img src="./images/cover.jpg" alt="" class="w-24 h-24">
                    <img src="./images/band.jpg" alt="playlist" class="w-24 h-24">
                </div>
                <div class="text-center z-10 group/edit group-hover/item:hidden ">
                    <div class="font-bold text-xl">Chill</div>
                </div>
                <div class=" justify-between items-center gap-4 z-10 m-auto absolute hidden group/edit group-hover/item:block ">
                   <i class="fa-solid fa-trash-can bg-gray-700 p-2 rounded-full"></i>
                   <i class="fa-solid fa-edit bg-gray-700 p-2 rounded-full"></i>
                </div>
            </div>
            <div class="bg-gray-700  text-white w-60 h-60 p-4  rounded  flex flex-col justify-around items-center group/item ">
                <div class="flex relative flex-wrap z-1 justify-center items-center group/edit group-hover/item:scale-110 group-hover/item:opacity-30 ">
                    <img src="./images/band.jpg" alt="playlist" class="w-24 h-24">
                    <img src="./images/cover.jpg" alt="" class="w-24 h-24">
                    <img src="./images/cover.jpg" alt="" class="w-24 h-24">
                    <img src="./images/band.jpg" alt="playlist" class="w-24 h-24">
                </div>
                <div class="text-center z-10 group/edit group-hover/item:hidden ">
                    <div class="font-bold text-xl">Gaming</div>
                </div>
                <div class=" justify-between items-center gap-4 z-10 m-auto absolute hidden group/edit group-hover/item:block ">
                   <i class="fa-solid fa-trash-can bg-gray-700 p-2 rounded-full"></i>
                   <i class="fa-solid fa-edit bg-gray-700 p-2 rounded-full"></i>
                </div>
            </div>
         </div>
 </div>
 </section>
</body>
</html>