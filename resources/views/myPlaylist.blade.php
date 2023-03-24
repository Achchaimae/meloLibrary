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
    <title>{{$playlist->name}}</title>
</head>
<body class="bg-gray-900">
    <section class="w-full">
        <div>
            <img src="{{asset('storage/'.$playlist->image)}}" alt="" class="w-[100%] h-96 object-cover">
            <div class="text-5xl text-white font-extrabold text-center">
                {{$playlist->name}}
            </div>
        </div>
        
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
                {{-- {{dd($playlist->Songs)}} --}}
                
                {{-- @foreach ($playlist->Songs  as $playlist) --}}
                @foreach ($playlist->Songs  as $key => $playlist)
                <tr class="musicTable bg-transparent hover:bg-gray-200/20 cursor-pointer">
                    <td class="px-6">
                        {{$key +1}}
                    </td>
                    
                    <td class="flex gap-4 items-center font-bold text-white ">
                        <img src="{{$playlist->image ? asset('storage/'.$playlist->image ) :'./images/cover.jpg'}}" alt="{{$playlist->title}}" class="musicImg w-14 h-14">
                        <a href="/singleMusic/{{$playlist->id}}" class="title hover:underline">{{$playlist->title}}</a>
                    </td>
                    <td class="album px-6 font-semibold">
                        {{$playlist->artist}}
                    </td>
                    <td class="date px-6 font-semibold text-gray-900 dark:text-white">
                        {{$playlist->release_date}}
                    </td>
                    <td class="duration px-6 text-center">
                        <span  class=" cursor-pointer hover:text-white"> {{$playlist->duration}} </span>
                        {{-- <i id="playlistSetting" class="fa-solid fa-ellipsis text-xl cursor-pointer hover:text-white"></i> --}}
                    </td>
                    
                    <td class="hidden">
                        <audio controls src="{{asset('storage/'.$playlist->music)}}" class="audio"></audio>""
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- 
<div class="grid grid-cols-4 gap-4">
    @foreach ($musics as $music)
        <div id="music" class="allMusics bg-gray-600/30 flex flex-col gap-3 p-4 rounded-xl overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:bg-gray-600/60 ">
            <img id="musicImg" class="rounded-xl shadow-[0_0_15px] shadow-black object-fill" src="{{asset('storage/' . $music->music_image)}}" alt=""/>
            <div>
                <h2 class="text-white font-bold text-xl">{{$music->music_name}}</h2>
                <p class="text-gray-400">{{$music->artist_group}}</p>
            </div>
            <audio controls src="{{asset('storage/' . $music->music_audio)}}" hidden></audio>
        </div>
    @endforeach
</div> --}}


{{-- 
<div class="grid grid-cols-4 gap-4">
    @foreach ($musics as $music)
        <div id="music" class="allMusics bg-gray-600/30 flex flex-col gap-3 p-4 rounded-xl overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:bg-gray-600/60 ">
            <img id="musicImg" class="rounded-xl shadow-[0_0_15px] shadow-black object-fill" src="{{asset('storage/' . $music->music_image)}}" alt=""/>
            <div>
                <h2 class="text-white font-bold text-xl">{{$music->music_name}}</h2>
                <p class="text-gray-400">{{$music->artist_group}}</p>
            </div>
            <audio controls src="{{asset('storage/' . $music->music_audio)}}" hidden></audio>
        </div>
    @endforeach
</div> --}}


<script src="{{asset('js/handleDate.js')}}"></script>
<script >
    function toggle(musicId) {
   
    var element = document.querySelectorAll("#myDIV" + musicId);

    for(let el of element) {
        el.classList.toggle("hidden");
    }
}
</script>
   
</body>
</html>