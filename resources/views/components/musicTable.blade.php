
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
            @foreach ($songs  as $key => $music)
                <tr class="musicTable bg-transparent hover:bg-gray-200/20 cursor-pointer">
                    <td class="px-6">
                        {{$key +1}}
                    </td>
                    <td class="flex gap-4 items-center font-bold text-white ">
                        <img src="{{$music->image ? asset('storage/'.$music->image ) :'./images/cover.jpg'}}" alt="{{$music->title}}" class="musicImg w-14 h-14">
                        <a href="/singleMusic/{{$music->id}}" class="title hover:underline">{{$music->title}}</a>
                    </td>
                    <td class="album px-6 font-semibold">
                        {{$music->artist}}
                    </td>
                    <td class="date px-6 font-semibold text-gray-900 dark:text-white">
                        {{$music->release_date}}
                    </td>
                    <td class="duration px-6 text-center">
                        <span  class=" cursor-pointer hover:text-white"> {{$music->duration}} </span>
                        {{-- <i id="musicSetting" class="fa-solid fa-ellipsis text-xl cursor-pointer hover:text-white"></i> --}}
                    </td>
                    <td class="hidden">
                        <audio controls src="{{asset('storage/'.$music->music)}}" class="audio"></audio>
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