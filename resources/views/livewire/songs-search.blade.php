


<div class='max-w-md mx-auto mb-4'>
    <div class="relative flex items-center w-full h-12 rounded focus-within:shadow-lg bg-white overflow-hidden">
        <div class="grid place-items-center h-full w-12 text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>

        <input
        type="text" wire:model="searchQuery" wire:keyup="search" placeholder="Search..." name="playlist_songs" required="required"
        class="peer h-full w-full outline-none text-sm text-gray-700 pr-2"
        type="text"
        id="search"
        placeholder="Search something.." /> 
        <div class="absolute right-0 top-0 h-full w-12 text-gray-300 cursor-pointer flex items-center justify-center">
            <i class="fa-solid fa-circle-search text-2xl"></i>
        </div>
    </div>
    @if($songs && count($songs))
            <ul>
                @foreach($songs as $song)
                <div class="mt-12">
                    <img src="{{$song->image ? asset('storage/'.$song->image ) :'./images/cover.jpg'}}" class="w-[200px] h-[200px] rounded" alt="">
                    <h2 class="font-semibold text-lg">{{$song->title}}</h2>
                    <h3 class="text-gray-300 font-bold text-sm opacity-40">{{$song->artist}}</h3>
                </div>
                @endforeach
            </ul>
        @endif
</div>