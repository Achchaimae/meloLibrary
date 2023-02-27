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
    <title>Sign Up</title>
</head>
<body class="bg-gray-300   " style="background-image: url(./images/casque.jpg); object-fit:cover;">
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8    ">
        <div class="mx-auto max-w-lg">
          <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">
            Get started today
          </h1>    
          <form action="" class="mt-6 mb-0 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8 bg-white bg-opacity-80">
            <p class="text-center text-lg font-medium">Create your account</p>
      
            <div>
              <label for="email" >What's your email?</label>
      
              <div class="relative">
                <input
                  type="email"
                  class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12"
                  placeholder="Enter email"
                />
      
              </div>
            </div>
            <div>
                <label for="email" >Confirm your email</label>
        
                <div class="relative">
                  <input
                    type="email"
                    class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12"
                    placeholder="Confirm your email again"
                  />
        
                </div>
              </div>
      
            <div>
              <label for="password" >Password</label>
      
              <div class="relative">
                <input
                  type="password"
                  class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12"
                  placeholder="Enter password"
                />
              </div>
            </div>
            <div>
                <label for="password" > Confirm Password</label>
        
                <div class="relative">
                  <input
                    type="password"
                    class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12"
                    placeholder="Confirm your password"
                  />
                </div>
              </div>
              <div>
                <label for="nickname" >What should we call you?</label>
        
                <div class="relative">
                  <input
                    type="text"
                    class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm ltr:pr-12 rtl:pl-12"
                    placeholder="Enter your nickname"
                  />
                </div>

              </div>
              <div>
                <label for="nickname" >What's your gender?</label>
        
                <div class="relative">
                  <input type="radio" id="gender" name="gender" class="relative" value="male">Male</option>
                  <input type="radio" id="gender" name="gender" value="female">Female</option>
                </div>

              </div>  
            <div class="checkbox">
                <input type="checkbox" name="checkbox" id="checkbox">
                <label for="checkbox">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
            </div>
              
      
            <button
              type="submit"
              class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white"
            >
              Sign in
            </button>
      
            <p class="text-center text-sm text-gray-500">
             Already have an account?
               <a class="underline" href="login.html">Sign in</a>
             
            </p>
          </form>
        </div>
      </div>
</body>
</html>