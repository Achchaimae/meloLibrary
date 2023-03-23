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
            <div class="bg-[#058ED9] text-white w-60 h-60 p-8  rounded  flex flex-col justify-around items-center">
                <a href="/AddPlaylist">
                     <i class="fa-solid fa-plus text-2xl "></i>
                </a>
               
            </div>
            @foreach ($playlists as $playlist)
            {{-- {{$playlist->image}} --}}
            <div class="flex flex-col text-center">
                <div class="bg-[#058ED9] rounded w-60 h-60 p-4 relative  ">
                        <img src="{{asset('storage/'.$playlist->image ) }}" alt="playlist image relative" >
                    
                            <i   class="fa-solid fa-ellipsis text-black z-10 font-bold text-2xl right-7 top-[5%] absolute hover:cursor-pointer " onclick="toggle()"></i>
                        <div class="w-fit">
                            <div id="myDIV" class="flex flex-col hidden text-center    " >
                                <a href="/EditPlaylist/{{$playlist->id}}">
                                    <i class="fa-solid fa-edit text-white z-10  text-xl right-[10%] top-[15%] absolute text-black  "></i>
                                </a>
                                <a href="/DeletePlaylist/{{$playlist->id}}">
                                    <i class="fa-solid fa-trash text-white z-10  text-xl right-[10%] top-[30%] absolute  text-black "></i>
                                </a>
                            </div>
                        </div>

                    {{-- <button class=" relative bottom-20  left-40  transition ease-in-out delay-150 hover:scale-110  duration-300  ">
                        <i class="fa-solid fa-circle-play text-4xl    text-[#058ED9]"></i>
                    </button> --}}
                </div>
                <h3>{{$playlist->name}}</h3>
            </div>
            @endforeach
           
           
        </div>
    </section>
    @endsection
</body>
</html>
<script>
    function toggle() {
   var element = document.querySelectorAll("#myDIV");

   for(let el of element) {
         el.classList.toggle("hidden");
   }
}
</script>