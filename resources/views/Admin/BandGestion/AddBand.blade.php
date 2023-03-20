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
    <!-- css link -->
    <link rel="stylesheet" href="./css/style.css">
     <!-- icon link -->
    <link rel="icon" href="images/header.svg" type="image/icon type">
    <title>add band</title>
</head>
<body class="bg-gray-700 "  style="background-image: url(./images/background.jpg); object-fit:cover;">
   
    <div class="mx-auto max-w-screen-xl px-4 pb-2 sm:px-6 lg:px-8    ">
        <div class="mx-auto max-w-lg">
            <h1 class="text-white text-center font-extrabold text-2xl">Add New Band</h1>
            <form action="/NewBand" method="post"  enctype="multipart/form-data" class="mt-6 mb-0 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8 bg-white bg-opacity-90">
                @csrf
                <label for="image" >insert an image for the band</label>
                <input type="file" name="image" id="image" class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12">
                <label for="name">name</label>
                <input type="text" name="name" id="name"  class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12">
                <label for="members">Who's Members of the Bands ?</label>
                <input type="text" name="members" id="members" class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12">
                <label for="release_date">The date of realisation of the Band ?</label>
                <input type="date" name="release_date" id="release_date"  class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12">
                <label for="country">insert the country of the Band</label>
                <input type="text" name="country" id="country"  class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12"     >
                <button
                type="submit"
                class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white"
                >
                Add Band
                </button>
            </form>
        </div>
    </div>
</body>
</html>