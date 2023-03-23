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
            <h1 class="text-3xl font-bold m-2">Albums</h1>
            <div class=" w-full  flex justify-between gap-2 p pb-44 pt-4 flex-wrap">
                <x-musicTable :songs=$songs :playlists=$playlists />
            </div>
        </div>
    </section>
    @endsection

    <x-footer />

     
</body>
<script src="{{asset('js/handleMusic.js')}}" defer></script>
</html>