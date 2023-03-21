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
    
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

<script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.3.x/dist/index.js"></script>
    <title>add Artist</title>
</head>
<body class="bg-gray-700 "  style="background-image: url(./images/background.jpg); object-fit:cover;">
    <div class="mx-auto max-w-screen-xl px-4 pb-2 sm:px-6 lg:px-8    ">
        <div class="mx-auto max-w-lg">
            <h1 class="text-2xl font-bold text-center text-white text-gray-900">New Artist</h1>
            <form action="/UpdateArtist/{{$artist->id}}" method="post"  enctype="multipart/form-data" class="mt-6 mb-0 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8 bg-white bg-opacity-90">
                @csrf
                @method('PUT')
                <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
                    <!-- Photo File Input -->
                    <input type="file" name="image" class="hidden" x-ref="photo" x-on:change="
                                        photoName = $refs.photo.files[0].name;
                                        const reader = new FileReader();
                                        reader.onload = (e) => {
                                            photoPreview = e.target.result;
                                        };
                                        reader.readAsDataURL($refs.photo.files[0]);
                    "
                    value="{{ old('image') }}">

                    <label class="block text-gray-700 text-sm font-bold mb-2 text-center" for="photo">
                        Profile Photo <span class="text-red-600"> </span>
                    </label>
                    
                    <div class="text-center">
                        <!-- Current Profile Photo -->
                        <div class="mt-2" x-show="! photoPreview">
                            <img src="./images/User.png" class="w-40 h-40 m-auto rounded-full shadow">
                        </div>
                        <!-- New Profile Photo Preview -->
                        <div class="mt-2" x-show="photoPreview" style="display: none;">
                            <span class="block w-40 h-40 rounded-full m-auto shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                            </span>
                        </div>
                        <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3" x-on:click.prevent="$refs.photo.click()">
                            Select New Photo
                        </button>
                    </div>
                </div>
                @error('image')
                <div class="text-red-500 mt-2 text-sm">
                  {{ $message }}
                @enderror
                {{-- <label for="image" >insert an image for the band</label> --}}
                {{-- <input type="file" name="image" id="image" class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12"> --}}
                <label for="name">name</label>
                <input type="text" name="name"  value="{{ old('name') }}" class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12">
                @error('name')
                <div class="text-red-500 mt-2 text-sm">
                  {{ $message }}
                @enderror
                <label for="country">Country?</label>
                <input type="text" name="country"  value="{{ old('country') }}"   class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12"     >
                @error('country')
                <div class="text-red-500 mt-2 text-sm">
                  {{ $message }}
                @enderror
                <label for="birth">Artist's Birthday ?</label>
                <input type="date" name="birth"  value="{{ old('birth') }}"  class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12">
                @error('birth')
                <div class="text-red-500 mt-2 text-sm">
                  {{ $message }}
                @enderror
                <button
                type="submit"
                class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white"
                >
                Add
                </button>
            </form>
        </div>
    </div>
</body>
</html>