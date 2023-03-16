
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
    <!-- alpine js -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css'>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>MeloLobrary</title>
</head>
<body class="grid grid-cols-[auto_1fr]  text-white h-screen fixed scroll-smooth w-full" style="background-color: black;">
    @extends('layouts.Nav')
    @section('content')

    
    <x-flash-message />
   
      
    <section class="px-3 overflow-y-scroll">
        <div class="flex justify-between items-center">
            <h1 class="font-bold text-3xl pb-5">Discover</h1>
            <div>
                <!-- <i class="fa-solid fa-circle-user text-3xl"></i> -->
                <button class="border border-white rounded-full px-4 py-2 font-bold hover:bg-white hover:text-black"><a href="/register
                    ">Register </a></button>
                <button class="border border-white  bg-white text-black font-bold rounded-full px-4 py-2 hover:scale-105"><a href="/login">Log in</a></button>
            </div>
        </div>
        
        <div >
            <h2 class=" text-gray-300 font-bold text-xl opacity-40 pb-5">Recently played</h2>
            <div class="flex  px-5 space-x-5 ">
                <div >
                    <img src="./images/cover.jpg" class="w-[200px] h-[200px] rounded" alt="">
                    <h2 class="font-semibold text-lg">SONG NAME</h2>
                    <h3 class="text-gray-300 font-bold text-sm opacity-40">Artist Name</h3>
                </div>
                <div class="">
                    <img src="./images/cover.jpg" class="w-[200px] h-[200px] rounded" alt="">
                    <h2 class="font-semibold text-lg">SONG NAME</h2>
                    <h3 class="text-gray-300 font-bold text-sm opacity-40">Artist Name</h3>
                </div>
                <div >
                    <img src="./images/cover.jpg" class="w-[200px] h-[200px] rounded" alt="">
                    <h2 class="font-semibold text-lg">SONG NAME</h2>
                    <h3 class="text-gray-300 font-bold text-sm opacity-40">Artist Name</h3>
                </div>
                <div >
                    <img src="./images/cover.jpg" class="w-[200px] h-[200px] rounded" alt="">
                    <h2 class="font-semibold text-lg">SONG NAME</h2>
                    <h3 class="text-gray-300 font-bold text-sm opacity-40">Artist Name</h3>
                </div>
                <div >
                    <img src="./images/cover.jpg" class="w-[200px] h-[200px] rounded" alt="">
                    <h2 class="font-semibold text-lg">SONG NAME</h2>
                    <h3 class="text-gray-300 font-bold text-sm opacity-40">Artist Name</h3>
                </div>
                
               
            </div>
        </div>
        <h2 class=" text-gray-300 font-bold text-xl opacity-40 pb-5 py-2">Random You May Like</h2>
        <div class=" w-full  flex justify-around  pb-44">
            <div class="bg-gray-700  rounded w-60 h-60 p-4">
                <img src="./images/tlp_hero_album-covers-d12ef0296af80b58363dc0deef077ecc-1552649680.jpg" alt="playlist image">
                <button class=" relative bottom-12 left-40  ">
                    <i class="fa-solid fa-circle-play text-4xl    text-[#058ED9]"></i>
                </button>
            </div>

            <div class="bg-gray-700  rounded w-60 h-60 p-4 ">
                <img src="./images/tlp_hero_album-covers-d12ef0296af80b58363dc0deef077ecc-1552649680.jpg" alt="playlist image" class="abs
                ">
                <button class=" relative bottom-12 left-40  ">
                    <i class="fa-solid fa-circle-play text-4xl    text-[#058ED9]"></i>
                </button>
            </div>

            <div class="bg-gray-700  rounded w-60 h-60 p-4">
                <img src="./images/tlp_hero_album-covers-d12ef0296af80b58363dc0deef077ecc-1552649680.jpg" alt="playlist image">
                <button class=" relative bottom-12 left-40  ">
                    <i class="fa-solid fa-circle-play text-4xltext-[#058ED9]"></i>
                </button>
            </div>
            <div class="bg-gray-700  rounded w-60 h-60 p-4">
                <img src="./images/tlp_hero_album-covers-d12ef0296af80b58363dc0deef077ecc-1552649680.jpg" alt="playlist image">
                <button class=" relative bottom-12 left-40  ">
                    <i class="fa-solid fa-circle-play text-4xl    text-[#058ED9]"></i>
                </button>
            </div>
        </div>
       
    </section>
    @endsection
    
</body>

</html>