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
    @extends('layouts.Nav')
    @section('content')

    <section class=" px-1 overflow-y-scroll ">
        <div class="flex justify-between items-center">
            <h1 class="font-bold text-3xl pb-5">Discover</h1>
            @auth
            @else
            <div>
                <!-- <i class="fa-solid fa-circle-user text-3xl"></i> -->
                <button class="border border-white rounded-full px-4 py-2 font-bold hover:bg-white hover:text-black"><a href="/register
                    ">Register </a></button>
                <button class="border border-white  bg-white text-black font-bold rounded-full px-4 py-2 hover:scale-105"><a href="/login">Log in</a></button>
            </div>
            @endauth
        </div>
        
        <h2 class=" text-gray-300 font-bold text-xl opacity-40 pb-5">Artists</h2>
        <div class="flex flex-wrap">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 px-5 ">
                @foreach ($artists as $artist)
                <div class="flex flex-col justify-center h-64 w-fit p-4 items-center bg-[#058ED9] rounded ">
                    <img src="{{$artist->image ? asset('storage/'.$artist->image ) :'./images/cover.jpg'}}" alt="oussama" class="w-44 h-44 object-cover rounded-full drop-shadow-2xl  ">
                    <h3 class="text-white font-bold text-sm  text-xl">{{$artist->name}}</h3>
                   
                </div>
                @endforeach
               
            </div>
        </div>
        {{-- <h2 class=" text-gray-300 font-bold text-xl opacity-40 pb-5">Top Artists</h2>
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
            
        </div> --}}
    </section>
    
@endsection
     
</body>
</html>