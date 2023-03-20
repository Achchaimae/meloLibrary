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
   <div class=" shadow-lg w-full my-auto rounded p-4  ">
 
<div class='max-w-md mx-auto mb-4'>
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

   <table class="min-w-max w-full table-auto my-auto">
        <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Image</th>
                <th class="py-3 px-6 text-left">Title</th>
                <th class="py-3 px-6 text-center">Writer</th>
                <th class="py-3 px-6 text-center">Artist</th>
                <th class="py-3 px-6 text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($songs as $song)
           
           
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 text-left whitespace-nowrap">
                    <div class="flex items-center mr-2">
                            <img src="{{$song->image ? asset('storage/'.$song->image ) :'./images/cover.jpg'}}" alt="musica" class="w-12 h-12">
                    </div>
                </td>
                <td class="py-3 px-6 text-left whitespace-nowrap">
                    <div class="flex items-center font-medium">
                        {{ $song->title }}
                    </div>
                </td>
                <td class="py-3 px-6 text-left whitespace-nowrap">
                    <div class="flex items-center font-medium ">
                        {{ $song->writer }}
                    </div>
                </td>
                <td class="py-3 px-6 text-left whitespace-nowrap">
                    <div class="flex items-center font-medium">
                        {{ $song->artist }}
                    </div>
                </td>
                <td class="py-3 px-6 text-center">
                    <div class="flex item-center justify-center">
                        
                        <div class="w-4 mr-2 transform hover:text-green-500 hover:scale-110">
                            <a href="/EditSong/{{$song->id}}/edit">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                        </div>
                       
                        <form method="POST" action="DeleteSong/{{$song->id}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </form>

                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
   </table>
</div>
<button class="bg-blue-200 p-2 px-4 border-solid border-2 relative left-[90%] border-white w-24 mt-4 m-auto text-white drop-shadow-sm shadow-md  rounded-3xl">
    <a href="/AddSong">Add</a>
</button>
</section>
@endsection
</body>
</html>
