
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
                    <td class="date px-6 font-semibold text-gray-900  text-center dark:text-white">                            
                             {{-- add to playlist --}}
                        <i class="fa-solid fa-thumbtack  text-xl cursor-pointer text-white  hover:text-red-500 relative" onclick="toggle({{$music->id}})"></i>
                        {{-- form to add to playlist --}}
                        <form action="/AddToPlaylist" method="POST" id="myDIV{{$music->id}}"  class="hidden bg-white right-[5%] rounded flex flex-col text-black ">
                            @csrf
                            {{-- i need to find a way to send the playlist id to the controller --}}
                           
                            <select name="playlist_id" class="bg-transparent ">
                                @foreach ($playlists as $playlist)
                                    <option value="select playlist" @disabled(true)></option>
                                    <option value="{{$playlist->id}}">{{$playlist->name}}</option>
                                @endforeach
                            </select>
                            <input type="hidden" name="music_id" value="{{$music->id}}">
                            <button type="submit" class="bg-indigo-400 rounded ">Add</button>    
                        </form> 
                      

                       
                    </td>
                    <td class="hidden">
                        <audio controls src="{{asset('storage/'.$music->music)}}" class="audio"></audio>""
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