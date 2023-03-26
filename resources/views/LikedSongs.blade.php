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
    <livewire:styles />
    <livewire:scripts />
    <title>MeloLobrary</title>
</head>
<body class="grid grid-cols-[auto_1fr]  text-white h-screen fixed scroll-smooth w-full" style="background-color: black;">
    @extends('layouts.Nav')
    @section('content')
   
    <x-flash-message />
    <section class=" p-2 w-full overflow-y-scroll ">
        @livewire('search')
        <div>
            <h1 class="text-3xl font-bold m-2">Liked Songs</h1>
            <div class=" w-full  flex justify-between gap-2 p pb-44 pt-4 flex-wrap">
              
<div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-400 border-b border-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Titre
                </th>
                <th scope="col" class="px-6 py-3">
                    Album
                </th>
                <th scope="col" class="px-6 py-3">
                    Creation Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Duration
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($likes  as $key => $music)
                <tr class="musicTable bg-transparent hover:bg-gray-200/20 cursor-pointer">
                    <td class="px-6">
                        {{$key +1}}
                    </td>
                    
                    <td class="flex gap-4 items-center font-bold text-white ">
                        <img src="{{$music->songs->image ? asset('storage/'.$music->songs->image ) :'./images/cover.jpg'}}" alt="{{$music->title}}" class="musicImg w-14 h-14">
                        <a href="/singleMusic/{{$music->id}}" class="title hover:underline">{{ $music->songs->title }}</a>
                    </td>
                    <td class="album px-6 font-semibold">
                        {{-- {{$music->}} --}}
                        {{  $music->songs->artist }}
                    </td>
                    <td class="date px-6 font-semibold text-gray-900 dark:text-white">
                        {{$music->songs->release_date}}
                    </td>
                    <td class="duration px-6 text-center">
                        <span  class=" cursor-pointer hover:text-white"> {{$music->songs->duration}} </span>
                    </td>
                    <td class="hidden">
                        <audio controls src="{{asset('storage/'.$music->songs->music)}}" class="audio"></audio>""
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



<script src="{{asset('js/handleDate.js')}}"></script>
<script >
    function toggle(musicId) {
   
    var element = document.querySelectorAll("#myDIV" + musicId);

    for(let el of element) {
        el.classList.toggle("hidden");
    }
}
</script>
            </div>
        </div>
    </section>
    @endsection

    <x-footer />

     
</body>
<script src="{{asset('js/handleMusic.js')}}" defer></script>
</html>