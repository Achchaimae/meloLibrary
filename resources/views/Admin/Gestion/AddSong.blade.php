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
        <title>Add Song</title>
</head>
<body class="bg-gray-300"  style="background-image: url(./images/addsong.jpg); object-fit:cover;">
    <div class="mx-auto max-w-screen-xl px-4 pb-2 sm:px-6 lg:px-8    ">
        <div class="mx-auto max-w-lg">
            <form action="/Newsong" method="POST" enctype="multipart/form-data" class="mt-6 mb-0 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8 bg-white bg-opacity-90">
                @csrf                                               
                <div>
                    <label for="title" >What's the name of the song?</label>
            
                    <div class="relative">
                    <input
                        type="text"
                        name="title"
                        class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12"
                        placeholder="Enter title of the song"
                        value="{{old('tilte')}}"
                    />
            
                    </div>
                </div>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                <div class="flex justify-between">
                    <div>
                        <label for="artist" >What's the name of the Artist?</label>
                
                        <div class="relative">
                        <input
                            type="text"
                            name="artist"
                            class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12"
                            placeholder="Enter name of the Artist"
                            value="{{old('artist')}}"
                        />
                
                        </div>
                    </div>
                    @error('artist')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    <div>
                        <label for="writer" >What's the name of the writer?</label>
                
                        <div class="relative">
                        <input
                            type="text"
                            name="writer"
                            class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12"
                            placeholder="Enter name of the writer"
                            value="{{old('writer')}}"
                        />
                
                        </div>
                    </div>
                    @error('writter')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="tag" >Enter tags <span class="text-gray-500 text-sm">(separete with commas)</span> </label>
            
                    <div class="relative">
                    <input
                        type="text"
                        name="tag"
                        class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12"
                        placeholder="Enter tag of the song"
                        value="{{old('tag')}}"
                    />
            
                    </div>
                </div>
                @error('tag')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                <div>
                    <label for="image" >Choose a image for the cover</label>
            
                    <div class="relative">
                    <input
                        type="file"
                        name="image"
                        class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12"
                       
                        value="{{old('image')}}"
                    />
            
                    </div>
                </div>
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror 
                <div>
                    <label for="language" >What's the language of the song?</label>
            
                    <div class="relative">
                    
                    <select name="language" class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12">
                        <option disabled>language</option>
                        <option value="fr" class="text-semibold">frensh</option>
                        <option value="en">english</option>
                        <option value="ar">arab</option>
                        <option value="sp">spanish</option>
                    </select>

            
                    </div>
                </div>
                @error('language')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                <div class="flex justify-around">
                    <div>
                        <label for="release_date" >Release Date </label>
                
                        <div class="relative">
                        <input
                            type="date"
                            name="release_date"
                            class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12"
                            placeholder="Release Date"
                            value="{{old('release_date')}}"
                        />
                
                        </div>
                    </div>
                    @error('release_date')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    <div>
                        <label for="duration" >What's the duration of the song</label>
                
                        <div class="relative">
                            <input
                            type="text"
                            name="duration"
                            class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12"
                            placeholder="duration of the song"
                           
                            value="{{old('duration')}}"
                        />                     </div>
                    </div>
                    @error('duration')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                
                 <div>
                    <label for="music" >Choose the music's file</label>
            
                    <div class="relative">
                    <input
                        type="file"
                        name="music"
                        class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12"
                       
                        value="{{old('music')}}"
                    />
            
                    </div>
                </div>
                @error('music')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror 
                
                <div>
                    <label for="lyrics" >Insert the lyrics of the music</label>
            
                    <div class="relative">
                        <textarea name="lyrics" class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12"  >{{old('lyrics')}}</textarea>
                     </div>
                </div>
                @error('lyrics')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                <button
                    type="submit"
                    class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white"
                    >
                    Add Song
                    </button>
            </form>
        </div>
    </div>
</body>
</html>