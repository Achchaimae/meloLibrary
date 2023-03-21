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
    @extends('layouts.AdminNav')
    @section('content')
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
            <div class="flex flex-col justify-center h-64 w-fit p-4 items-center bg-gray-700  shadow-lg rounded ">
                <a href="/AddArtist">
                    <i class="fa-solid fa-plus text-2xl w-44 text-center text-white "></i>
                </a>
            </div>
            @foreach ($artists as $artist)
            <div class="flex flex-col justify-center h-64 w-fit p-4 items-center bg-indigo-500 shadow-lg rounded relative  group/item">
                <img src="{{$artist->image ? asset('storage/'.$artist->image ) :'./images/cover.jpg'}}"  alt="oussama" class="w-44 h-44 object-cover rounded-full drop-shadow-2xl  ">
                <h3 class="text-white font-bold text-sm  text-xl">{{$artist->name}}</h3>
                {{-- <h5 class="text-gray-300 mr-28 font-semibold">{{$artist->country}}</h5> --}}
                <div class="flex flex-col absolute top-2 left-24 invisible gap-2 group/edit group-hover/item:visible">
                    <a href="/EditArtist/{{$artist->id}}">
                        <i class="fa-solid fa-edit text-xl w-44 text-center text-white "></i>
                    </a>
                    <a href="/DeleteArtist/{{$artist->id}}">
                        <i class="fa-solid fa-trash text-xl w-44 text-center text-white "></i>
                </div>
            </div>
            
            @endforeach
           
 </div>
 </section>
 @endsection
</body>
</html>