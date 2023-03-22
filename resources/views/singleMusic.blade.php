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
<body class="bg-gray-900">
    <section class="w-full">
        <div>
            <img src="{{asset('storage/'.$song->image)}}" alt="" class="w-[100%] h-96 object-cover">
            
                <div class="flex flex-row justify-between flex-around px-4">
                    <h1 class="text-3xl text-white font-extrabold">{{$song->title}}</h1>
                    <div>
                       
                         <div class="flex  justify-end items-center px-4">
                             <div class="flex justify-end items-center gap-2">
                                 <a href="" class="text-white text-2xl font-bold">
                                     <i class="fas fa-heart"></i>
                                 </a>
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
        </div>
        {{-- <div class="flex justify-center items-center ">
            <div class="flex flex-col justify-center items-center w-[100%]">
                <img src="{{asset('storage/'.$song->image)}}" alt="" class="w-[100%] h-96 object-cover">
                
                <div>
                    <div class="flex flex-between">
                        <h1 class="text-3xl text-white font-extrabold">{{$song->title}}</h1>
                        <div>
                           
                             <div class="flex  justify-end items-center px-4">
                                 <div class="flex justify-end items-center">
                                     <a href="" class="text-white text-2xl font-bold">
                                         <i class="fas fa-heart"></i>
                                     </a>
                                     <a href="" class="text-white text-2xl font-bold">
                                         <i class="fas fa-share"></i>
                                     </a>
                                 </div>
                             </div>
                 
                         </div>
                    </div>
                    <h3 class=" text-gray-300 font-medium ">{{$song->artist}}</h3>
                </div>
              
                <h1 class="text-2xl font-bold">{{$song->album}}</h1>
                
                <h1 class="text-xl font-bold  text-white">Lyrics</h1>
                <div class="text-white h-44 border-2 w-[70%] border-blue-500 p-2 rounded m-2">
                    {{$song->lyrics}}
                </div>
                
                <h1 class="text-2xl font-bold">{{$song->description}}</h1>
                    
            </div>
        </div> --}}
        

    </section>
    <footer class="bot-0">
        <audio controls class="w-[100%] bg-gray-700 text-gray-700 ">
                    <source src="{{asset('storage/'.$song->music)}}" type="audio/mpeg">
                </audio>
    </footer>
</body>
</html>