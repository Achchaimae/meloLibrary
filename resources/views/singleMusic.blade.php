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
    <title>{{$song->title}}</title>
</head>
<x-flash-message />
<body class="bg-gray-900">
    <section class="w-full">
        <div>
            <img src="{{asset('storage/'.$song->image)}}" alt="" class="w-[100%] h-96 object-cover">
            
                <div class="flex flex-row justify-between flex-around px-4">
                    <h1 class="text-3xl text-white font-extrabold">{{$song->title}}</h1>
                    <div>
                       
                         <div class="flex  justify-end items-center px-4">
                             <div class="flex justify-end items-center gap-2">
                                
                                 <form action="/like" method="POST" class="text-center  text-black flex flex-col  w-[70%] rounded m-auto ">
                                    @csrf
                                   <div class="flex gap-2">
                                        <input type="hidden" name="song_id" value="{{ $song->id }}" />
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }} ">
                                        <button class=" text-2xl font-bold text-blue-300 {{ session('isLiked') ? 'text-red-500' : '' }}">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                   </div>
                                   
                               </form>
                               <a href="" class="text-white text-2xl font-bold">
                                <i class="fas fa-share"></i>
                               
                            </a>
                             </div>
                         </div>
             
                     </div>
                </div>
                <h3 class=" text-gray-300 font-medium px-6 ">{{$song->artist}}</h3>
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-2xl font-bold  text-white">Lyrics</h1>
                    <div class="text-white h-44 border w-[70%] border-blue-500 p-2 rounded m-2">
                        {{$song->lyrics}}
                    </div>
                </div>
                <div class="bg-white m-auto w-[70%] rounded p-2 ">
                    <h1 class="text-xl font-bold  ">Comments :</h1>
                    <div class="flex flex-col gap-2 p-2">
                        <div class="bg-blue-200 w-[50%] px-4 py-1 rounded">
                            @foreach ($comments as $comment)
                            <div>
                                <div  class="bg-blue-200 w-[80%] px-4 py-1 rounded">
                                   <span class="bg-blue-300 px-4 py-1 rounded"> {{$comment->comment}}</span>
                                </div>
                            </div>
                                
                                @endforeach
                        </div>
                        
                    </div>
                   <form action="/addComment" method="POST" class="text-center  text-black flex flex-col  w-[70%] rounded m-auto ">
                        @csrf
                       <div class="flex gap-2">
                            <input type="text" placeholder="Enter Your Comment here ..." name="comment" class="bg-gray-100 w-[90%] p-2 rounded">
                            <input type="hidden" name="song_id" value="{{ $song->id }}" />
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <button>
                                <i class="fa-solid fa-paper-plane"></i>
                            </button>
                       </div>
                       
                   </form>
                </div>
        </div>
    </section>
    <footer class="bot-0 mt-4">
        <audio controls class="w-[100%] bg-gray-700 text-gray-700 ">
                    <source src="{{asset('storage/'.$song->music)}}" type="audio/mpeg">
                </audio>
    </footer>
</body>
</html>