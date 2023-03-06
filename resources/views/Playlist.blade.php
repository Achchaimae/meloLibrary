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
    <title>Playlist</title>
</head>
<body class="flex  text-white h-screen fixed scroll-smooth " style="background-color: black;">
    @extends('layouts.Nav')
    @section('content')

    <section class=" mx-4">
        <h1 class="text-3xl font-bold m-2">Playlist</h1>
        <div class="mt-6  w-full  flex justify-between gap-2 p pb-44 pt-4 flex-wrap">
            <div class="bg-[#058ED9] rounded w-60 h-60 p-4 ">
                <div class="grid grid-cols-2 ">
                    <img src="./images/cover.jpg" alt="playlist image"  class="w-22">
                    <img src="./images/tlp_hero_album-covers-d12ef0296af80b58363dc0deef077ecc-1552649680.jpg" alt="playlist image" class="w-22" > 
                    <img src="./images/tlp_hero_album-covers-d12ef0296af80b58363dc0deef077ecc-1552649680.jpg" alt="playlist image" class="w-22">
                    <img src="./images/cover.jpg" alt="playlist image" class="w-22" >

                </div>
                
                <button class=" relative bottom-12 left-40  transition ease-in-out delay-150 hover:scale-110  duration-300  ">
                    <i class="fa-solid fa-circle-play text-4xl    text-[#058ED9]"></i>
                </button>
            </div>
            <div class="bg-[#058ED9] rounded w-60 h-60 p-4 ">
                <div class="grid grid-cols-2 ">
                    <img src="./images/cover.jpg" alt="playlist image"  class="w-22">
                    <img src="./images/tlp_hero_album-covers-d12ef0296af80b58363dc0deef077ecc-1552649680.jpg" alt="playlist image" class="w-22" > 
                    <img src="./images/tlp_hero_album-covers-d12ef0296af80b58363dc0deef077ecc-1552649680.jpg" alt="playlist image" class="w-22">
                    <img src="./images/cover.jpg" alt="playlist image" class="w-22" >

                </div>
                
                <button class=" relative bottom-12 left-40  transition ease-in-out delay-150 hover:scale-110  duration-300  ">
                    <i class="fa-solid fa-circle-play text-4xl    text-[#058ED9]"></i>
                </button>
            </div>
            <div class="bg-[#058ED9] rounded w-60 h-60 p-4 ">
                <div class="grid grid-cols-2 ">
                    <img src="./images/cover.jpg" alt="playlist image"  class="w-22">
                    <img src="./images/tlp_hero_album-covers-d12ef0296af80b58363dc0deef077ecc-1552649680.jpg" alt="playlist image" class="w-22" > 
                    <img src="./images/tlp_hero_album-covers-d12ef0296af80b58363dc0deef077ecc-1552649680.jpg" alt="playlist image" class="w-22">
                    <img src="./images/cover.jpg" alt="playlist image" class="w-22" >

                </div>
                
                <button class=" relative bottom-12 left-40  transition ease-in-out delay-150 hover:scale-110  duration-300  ">
                    <i class="fa-solid fa-circle-play text-4xl    text-[#058ED9]"></i>
                </button>
            </div>
            <div class="bg-[#058ED9] rounded w-60 h-60 p-4 ">
                <div class="grid grid-cols-2 ">
                    <img src="./images/cover.jpg" alt="playlist image"  class="w-22">
                    <img src="./images/tlp_hero_album-covers-d12ef0296af80b58363dc0deef077ecc-1552649680.jpg" alt="playlist image" class="w-22" > 
                    <img src="./images/tlp_hero_album-covers-d12ef0296af80b58363dc0deef077ecc-1552649680.jpg" alt="playlist image" class="w-22">
                    <img src="./images/cover.jpg" alt="playlist image" class="w-22" >

                </div>
                
                <button class=" relative bottom-12 left-40  transition ease-in-out delay-150 hover:scale-110  duration-300  ">
                    <i class="fa-solid fa-circle-play text-4xl    text-[#058ED9]"></i>
                </button>
            </div>
        </div>
    </section>
    @endsection
</body>
</html>