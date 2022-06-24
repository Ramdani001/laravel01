<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">



</head>

<body>


    <div class="bg-white flex mt-20 justify-center h-50%">
        <form action="" method="" class="w-full sm:w-3/5 md:w-1/4 py-16 px-8 shadow-lg rounded-lg">
            <!-- Login -->
            <div id="login" class="">
                <a href="/" class="absolute -mt-10 text-xl text-semibold  ">
                    <i class="fa-solid fa-arrow-left-long"></i>
                </a>
                <h1 class="m-0 font-normal mb-12 text-center text-xl">Login</h1>
                <div class="relative h-12 mb-6">
                    <input type="text" name="username" placeholder="Email or Phone" class="absolute top-0 left-0 h-full w-full text-base outline-none p-4 rounded bg-transparent z-10 border-2 focus:border-[#1A73E8]">
                    <div class="flex justify-end">
                        <span class="w-6 h-6 text-[#1A73E8] bg-white z-10 mt-3 mr-3">
                    <i class="fa-solid fa-user"></i>
                  </span>
                    </div>
                </div>
                <div class="relative h-12 mb-6">
                    <input type="password" name="Password" placeholder="Password" class=" absolute top-0 left-0 h-full w-full text-base outline-none p-4 rounded bg-transparent z-50 border-2 focus:border-[#1A73E8]">

                    <div class="flex justify-end">
                        <span class="w-6 h-6 text-[#1A73E8] bg-white z-10 mt-3 mr-3">
                      <i class="fa-solid fa-lock"></i>
                  </span>
                    </div>

                    <div class="py-4 mt-3">
                        <a href="" class="font-semibold  hover:text-blue-400 text-[#1A73E8]">Lupa Password?</a>
                    </div>
                </div>

                <div class="py-5 mt-10">
                    <button type="submit" name="login" class="block mx-3 ml-auto py-2 px-8 outline-none border-none text-white transition-all ease-in-out duration-300 rounded font-medium hover:bg-blue-600 bg-[#1A73E8] cusor-pointer">
                  Login
                </button>
                    <span href="" onclick="signup()" class="absolute cursor-pointer hover:text-blue-400 text-[#1A73E8] font-semibold -mt-8">Buat Akun</span>
                </div>

            </div>
            <!-- End Login -->
            <!-- SignUp -->
            <div id="signup" class="hidden sm:-mt-14">
                <h1 class="m-0 font-normal mb-12 text-center text-xl">SignUp</h1>
                <div class="relative h-12 mb-6">
                    <input type="text" name="username" placeholder="Email or Phone" class="absolute top-0 left-0 h-full w-full text-base outline-none p-4 rounded bg-transparent z-10 border-2 focus:border-[#1A73E8]">
                    <div class="flex justify-end">
                        <span class="w-6 h-6 text-[#1A73E8] bg-white z-10 mt-3 mr-3">
                          <i class="fa-solid fa-user"></i>
                        </span>
                    </div>
                </div>
                <div class="relative h-12 mb-6">
                    <input type="password" name="Password" placeholder="Password" class=" absolute top-0 left-0 h-full w-full text-base outline-none p-4 rounded bg-transparent z-50 border-2 focus:border-[#1A73E8]">

                    <div class="flex justify-end">
                        <span class="w-6 h-6 text-[#1A73E8] bg-white z-10 mt-3 mr-3">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                    </div>
                </div>
                <div class="relative h-12 mb-6">
                    <input type="password" name="Password" placeholder="Password" class=" absolute top-0 left-0 h-full w-full text-base outline-none p-4 rounded bg-transparent z-50 border-2 focus:border-[#1A73E8]">

                    <div class="flex justify-end">
                        <span class="w-6 h-6 text-[#1A73E8] bg-white z-10 mt-3 mr-3">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                    </div>

                    <div class="py-4 mt-3">
                        <a href="" class="font-semibold  hover:text-blue-400 text-[#1A73E8]">Lupa Password?</a>
                    </div>
                </div>

                <div class="py-5 mt-10">
                    <button type="submit" name="login" class="block mx-3 mt-10 ml-auto py-2 px-8 outline-none border-none text-white transition-all ease-in-out duration-300 rounded font-medium hover:bg-blue-600 bg-[#1A73E8] cusor-pointer">
                    SignUp
                    </button>

                    <span href="" onclick="login()" class="absolute -mt-10 text-md font-medium ">Punya akun? <span class="text-[#1A73E8] cursor-pointer">Login</span> </span>

                </div>

            </div>
            <!-- End SingUp -->
        </form>
    </div>

    <script>
        function signup() {
            document.getElementById('login').classList.add('hidden');
            document.getElementById('signup').classList.remove('hidden')
        }

        function login() {
            document.getElementById('login').classList.remove('hidden');
            document.getElementById('signup').classList.add('hidden')
        }
    </script>

    <script src="script.js"></script>
</body>

</html>