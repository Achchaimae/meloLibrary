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
    <title>login</title>
</head>
<body  style="background-image: url(./images/bg.jpg); object-fit: contain;" >
  <button class="bg-white rounded-full p-2 px-3 mt-2 ml-2">
    <a href="/">
      <i class="fas fa-arrow-left"></i>
    </a>
  </button>

<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-lg">
      <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">
        Get started today
      </h1>
  
      <p class="mx-auto mt-4 max-w-md text-center text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sunt
        dolores deleniti inventore quaerat mollitia?
      </p>
  
      <form
        action=""
        class="mt-6 mb-0 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8"
      >
        <p class="text-center text-lg font-medium">Sign in to your account</p>
  
        <div>
          <label for="email" class="sr-only">Email</label>
  
          <div class="relative">
            <input
              type="email"
              class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12"
              placeholder="Enter email"
            />
          </div>
        </div>
  
        <div>
          <label for="password" class="sr-only">Password</label>
  
          <div class="relative">
            <input
              type="password"
              class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12"
              placeholder="Enter password"
            />
          </div>
        </div>
  
        <button
          type="submit"
          class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white"
        >
          Sign in
        </button>
  
        <p class="text-center text-sm text-gray-500">
          No account?
          <a class="underline" href="">Sign up</a>
        </p>
      </form>
    </div>
  </div>

</body>
</html>