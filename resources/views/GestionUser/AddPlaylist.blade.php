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
    <h1 class="text-white text-center mt-4 font-bold  text-2xl ">Create New Playlist</h1>
    <section class="bg-blue-300 w-[60%]  m-auto rounded-sm  p-4 border border-gray-500 mt-36 " >
        <form action="/Newplaylist" method="post" enctype="multipart/form-data" class="flex  justify-around items-center m-auto  h-96 ">
            
            @csrf
            <div class=" rounded p-6 w-80 h-44 bg-white">
                <input type="file" id="file-upload" class="hidden" name="image">
                <label for="file-upload" class="z-20 flex flex-col-reverse items-center justify-center w-full h-full cursor-pointer ">
                    <p class="z-10 text-xs font-light text-center text-gray-500">Drag & Drop your files here</p>
                    <svg class="z-10 w-8 h-8 text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path>
                    </svg>
                </label>
            </div>
            <div class="flex flex-col justify-between h-28"> 
                <div class="flex flex-col ">
                <label for="name" class="text-blue-900 font-bold">Name of Playlist</label>
                <input type="text" name="name" class="rounded w-72  py-2 " placeholder="Name of Playlist" >
            </div>
                
                
                <button type="submit" class="bg-blue-500 w-fit p-2  text-white rounded ">Create  Playlist</button>

            </div>
            
        </form>
    </section>
</body>
</html>