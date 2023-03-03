<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- tailwind link -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- fontawsome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://kit.fontawesome.com/93e0a23dda.css" crossorigin="anonymous"> -->
    <!-- css link -->
    <link rel="stylesheet" href="./css/style.css">
     <!-- icon link -->
    <link rel="icon" href="images/header.svg" type="image/icon type">
    <title>MeloLobrary</title>
</head>
<body class="grid grid-cols-[auto_1fr] text-white h-screen" style="background-color: black;">
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
    <section class=" px-1 overflow-y-scroll ">
        <div class="flex justify-between items-center">
            <h1 class="font-bold text-3xl pb-5">Discover</h1>
            <div>
                <!-- <i class="fa-solid fa-circle-user text-3xl"></i> -->
                <button class="border border-white rounded-full px-4 py-2 font-bold hover:bg-white hover:text-black">Sign up</button>
                <button class="border border-white  bg-white text-black font-bold rounded-full px-4 py-2 hover:scale-105">Log in</button>
            </div>
        </div>
        
        <h2 class=" text-gray-300 font-bold text-xl opacity-40 pb-5">Recently played</h2>
        <div class="flex flex-wrap">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 px-5 ">
                <div class="flex flex-col justify-center h-64 w-fit p-4 items-center bg-[#058ED9] rounded ">
                    <img src="./images/LM9AWED.png" alt="oussama" class="w-44 rounded-full drop-shadow-2xl  ">
                    <h3 class="text-white font-bold text-sm  text-xl">Oussama Ouafidi</h3>
                    <h5 class="text-gray-300 mr-28 font-semibold">Artist</h5>
                </div>
                <div class="flex flex-col justify-center h-64 w-fit p-4 items-center bg-red-500 shadow-lg rounded ">
                    <img src="./images/LM9AWED.png" alt="oussama" class="w-44 rounded-full drop-shadow-2xl  ">
                    <h3 class="text-white font-bold text-sm  text-xl">Oussama Ouafidi</h3>
                    <h5 class="text-gray-300 mr-28 font-semibold">Artist</h5>
                </div>
                <div class="flex flex-col justify-center h-64 w-fit p-4 items-center bg-green-500 rounded ">
                    <img src="./images/LM9AWED.png" alt="oussama" class="w-44 rounded-full drop-shadow-2xl  ">
                    <h3 class="text-white font-bold text-sm  text-xl">Oussama Ouafidi</h3>
                    <h5 class="text-gray-300 mr-28 font-semibold">Artist</h5>
                </div>
                <div class="flex flex-col justify-center h-64 w-fit p-4 items-center bg-yellow-500 rounded ">
                    <img src="./images/LM9AWED.png" alt="oussama" class="w-44 rounded-full drop-shadow-2xl  ">
                    <h3 class="text-white font-bold text-sm  text-xl">Oussama Ouafidi</h3>
                    <h5 class="text-gray-300 mr-28 font-semibold">Artist</h5>
                </div>
                <div class="flex flex-col justify-center h-64 w-fit p-4 items-center bg-red-400 rounded ">
                    <img src="./images/LM9AWED.png" alt="oussama" class="w-44 rounded-full drop-shadow-2xl  ">
                    <h3 class="text-white font-bold text-sm  text-xl">Oussama Ouafidi</h3>
                    <h5 class="text-gray-300 mr-28 font-semibold">Artist</h5>
                </div>
            </div>
        </div>
        <h2 class=" text-gray-300 font-bold text-xl opacity-40 pb-5">Top Artists</h2>
        <div class=" flex gap-2 justify-around flex-wrap">
            <div class="bg-gray-500 p-4 w-[30%] rounded flex  justify-around">
                <img src="./images/LM9AWED.png" alt="Artist" class="w-20 rounded ">
                <div class="flex flex-col">
                    <p class="text-gray-700 text-xl font-semibold">Oussama Ouafidi</p>
                    <p>Artist</p>
                </div>
            </div>
            <div class="bg-gray-500 p-4 w-[30%] rounded flex  justify-around">
                <img src="./images/LM9AWED.png" alt="Artist" class="w-20 rounded ">
                <div class="flex flex-col">
                    <p class="text-gray-700 text-xl font-semibold">Oussama Ouafidi</p>
                    <p>Artist</p>
                </div>
            </div>
            <div class="bg-gray-500 p-4 w-[30%] rounded flex  justify-around">
                <img src="./images/LM9AWED.png" alt="Artist" class="w-20 rounded ">
                <div class="flex flex-col">
                    <p class="text-gray-700 text-xl font-semibold">Oussama Ouafidi</p>
                    <p>Artist</p>
                </div>
            </div>
            <div class="bg-gray-500 p-4 w-[30%] rounded flex  justify-around">
                <img src="./images/LM9AWED.png" alt="Artist" class="w-20 rounded ">
                <div class="flex flex-col">
                    <p class="text-gray-700 text-xl font-semibold">Oussama Ouafidi</p>
                    <p>Artist</p>
                </div>
            </div>
            
        </div>
    </section>
    

     
</body>
</html>
<!-- <div class="flex justify-around flex-wrap gap-4">
            <div class="bg-gray-500 p-4 w-[30%] rounded flex  justify-around">
                <img src="./images/LM9AWED.png" alt="Artist" class="w-20 rounded ">
                <div class="flex flex-col">
                    <p class="text-gray-700 text-xl font-semibold">Oussama Ouafidi</p>
                    <p>Artist</p>
                </div>
           </div>
           <div class="bg-gray-500 p-4 w-[30%] rounded flex  justify-around">
                <img src="./images/LM9AWED.png" alt="Artist" class="w-20 rounded ">
                <div class="flex flex-col">
                    <p class="text-gray-700 text-xl font-semibold">Oussama Ouafidi</p>
                    <p>Artist</p>
                </div>
            </div>
            <div class="bg-gray-500 p-4 w-[30%] rounded flex  justify-around">
                <img src="./images/LM9AWED.png" alt="Artist" class="w-20 rounded ">
                <div class="flex flex-col">
                    <p class="text-gray-700 text-xl font-semibold">Oussama Ouafidi</p>
                    <p>Artist</p>
                </div>
           </div>
           <div class="bg-gray-500 p-4 w-[30%] rounded flex  justify-around">
            <img src="./images/LM9AWED.png" alt="Artist" class="w-20 rounded ">
            <div class="flex flex-col">
                <p class="text-gray-700 text-xl font-semibold">Oussama Ouafidi</p>
                <p>Artist</p>
            </div>
            </div>
            <div class="bg-gray-500 p-4 w-[30%] rounded flex  justify-around">
                <img src="./images/LM9AWED.png" alt="Artist" class="w-20 rounded ">
                <div class="flex flex-col">
                    <p class="text-gray-700 text-xl font-semibold">Oussama Ouafidi</p>
                    <p>Artist</p>
                </div>
            </div>
            <div class="bg-gray-500 p-4 w-[30%] rounded flex  justify-around">
                <img src="./images/LM9AWED.png" alt="Artist" class="w-20 rounded ">
                <div class="flex flex-col">
                    <p class="text-gray-700 text-xl font-semibold">Oussama Ouafidi</p>
                    <p>Artist</p>
                </div>
           </div>

           
        </div> -->
















