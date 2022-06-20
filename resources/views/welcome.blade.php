<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <title>Laravel</title>

        
    </head>
    <body class="">
     
    <header class="bg-white divide-y ml-18 border-b fixed inset-x-0">

        <!-- Btn Search Active -->
        <div id="btn-search-active" class="hidden items-center justify-center px-2  bg-gray-200">
            <a href="" id="btn-back" class="px-3 mr-[20px] text-xl" onclick="back()">
                <i class="fa-solid fa-angle-left"></i>
            </a>
            <input type="text" placeholder="Search" class="w-[600px] bg-gray-200 border-b-2 px-4 py-2 focus:outline-none focus:border-b-gray-400 sm:w-3/5 lg:w-3/5">
            <button class=" flex items-center justify-center h-8 w-16 pr-5">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
        </div>
        <!-- End Btn Search Active -->


        <div id="header" class="flex justify-between items-center h-14 mx-4">
            <div class="ml-3 text-2xl  ">
                <span class="hidden md:inline cursor-pointer">
                <i class="fa-solid fa-bars" onclick="opensidebar()"></i>
            </span>
                <a href="" class="text-3xl -ml-3 md:ml-2">Affiliate</a>
            </div>
            <div id="btn-search" class=" realtive ml-20 sm:-ml-4 lg:-ml-20">
                <button class="sm:hidden" onclick="search()"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>

            <div class=" items-center justify-center flex-grow hidden sm:flex">
                <input type="text" placeholder="Search" class="border border-gray-400 h-8  px-1 py-2 focus:outline-none focus:border-blue-600 sm:w-3/5 lg:w-3/5">
                <button class="bg-gray-200 flex items-center justify-center h-8 w-16 border border-gray-400 border-l-0 hover:bg-gray-300">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <div class="flex items-center justify-center space-x-4">
                <button class="flex items-center justify-center pl-5 text-2xl">
                    <i class="fa-solid fa-bell"></i>
                </button>
                <button type="button" class="border px-5 py-1 border-blue-500 text-blue-500">
                    <a href="login.html">LOGIN</a>
                </button>
            </div>
        </div>


        <!-- Sidebar Open -->
        <div id="open-sidebar" class="hidden z-20">
            <div class="sidebar fixed top-0 bottom-0 p-2 w-[220px] overflow-y-auto text-center bg-white">
                <div class="text-gray-900 text-xl">
                    <div class="p-2.5 mt-1 flex items-center">
                        <a href="" class="cursor-pointer">
                            <i class="fa-solid fa-xmark" id="btn-close"></i>
                        </a>
                        <h1 class="font-bold cursor-pointer text-gray-900 ml-4">Affiliate</h1>
                    </div>
                    <hr class="my-2 text-gray-600">
                </div>
                <div class="p-2.5 mt-1 flex items-center rounded-md px-4 duration-300 cursor-pointer">
                    <i class="fa-solid fa-house"></i>
                    <span class="ml-4 text-md cursor-pointer">Beranda</span>
                </div>
                <div class="p-2.5 mt-1 flex items-center rounded-md px-4 duration-300 cursor-pointer" onclick="Dropdown()">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span class="ml-4 text-md cursor-pointer mr-4">Kategori</span>
                    <a href="" class="text-xl">
                        <i class="fa-solid fa-angle-up" id="arrow"></i>
                    </a>
                </div>

                <div class="text-left text-sm font-thin mt-2 w-4/5 mx-auto" id="submenu">
                    <h1 class="cursor-pointer p-2 hover:bg-gray-400 rounded-md mt-1"> <a href="">Shopee</a></h1>
                    <h1 class="cursor-pointer p-2 hover:bg-gray-400 rounded-md mt-1 "> <a href=" ">Shopee</a>
                    </h1>
                    <h1 class="cursor-pointer p-2 hover:bg-gray-400 rounded-md mt-1">
                        <a href="">Shopee</a></h1>
                </div>

                <div class="p-2.5 mt-1 flex items-center rounded-md px-4 duration300 cursor-pointer ">
                    <i class="fa-solid fa-house "></i>
                    <span class="ml-4 text-md cursor-pointer ">Marketplace</span>
                </div>
                <div class="p-2.5 mt-1 flex items-center rounded-md px-4 duration300 cursor-pointer ">
                    <i class="fa-solid fa-house "></i>
                    <span class="ml-4 text-md cursor-pointer ">Health</span>
                </div>
                <hr class="my-2 text-gray-600 ">

                <div class="p-2.5 mt-1 flex items-center rounded-md px-4 duration300 cursor-pointer ">
                    <i class="fa-solid fa-house "></i>
                    <span class="ml-4 text-md cursor-pointer ">Marketplace</span>
                </div>
                <div class="p-2.5 mt-1 flex items-center rounded-md px-4 duration300 cursor-pointer ">
                    <i class="fa-solid fa-house "></i>
                    <span class="ml-4 text-md cursor-pointer ">Health</span>
                </div>
                <div class="p-2.5 mt-1 flex items-center rounded-md px-4 duration300 cursor-pointer ">
                    <i class="fa-solid fa-house "></i>
                    <span class="ml-4 text-md cursor-pointer ">Marketplace</span>
                </div>
                <div class="p-2.5 mt-1 flex items-center rounded-md px-4 duration300 cursor-pointer ">
                    <i class="fa-solid fa-house "></i>
                    <span class="ml-4 text-xl cursor-pointer ">Health</span>
                </div>
                <div class="p-2.5 mt-1 flex items-center rounded-md px-4 duration300 cursor-pointer ">
                    <i class="fa-solid fa-house "></i>
                    <span class="ml-4 text-md cursor-pointer ">Health</span>
                </div>
                <hr class="my-2 text-gray-600 ">
            </div>

        </div>
        <!-- End Sidebar Open -->


        <div id="header2" class="md:ml-20 flex items-center sm:overflow-x-hidden overflow-x-scroll py-1 px-4 space-x-3 select-none scroll-smooth">
            <span class="text-md bg-gray-200 border border-gray-300 w-32 rounded-sm px-5 py-1 divide-x text-gray-800 shadow-inner inline-flex justify-items-center"> <span class="text-md -ml-3 pr-2"><i class="fa-solid fa-compass"></i></span> Explore</span>
            <hr class="border-r-2 border-gray-200 h-10">
            <span class="text-sm bg-gray-700 border border-gray-800 rounded-full px-2  text-gray-200 shadow-inner">Semua</span>
            <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2  text-gray-800 shadow-inner">Javascript</span>
            <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2  text-gray-800 shadow-inner">Wrestling</span>
            <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2  text-gray-800 shadow-inner">Python</span>
            <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2  text-gray-800 shadow-inner">Coding</span>
            <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2  text-gray-800 shadow-inner">Coding</span>
            <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2  text-gray-800 shadow-inner">Coding</span>
            <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2  text-gray-800 shadow-inner">News</span>
            <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2  text-gray-800 shadow-inner">CSS</span>
            <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2  text-gray-800 shadow-inner">Science</span>
            <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2  text-gray-800 shadow-inner">Comedy</span>
            <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2  text-gray-800 shadow-inner">Comedy</span>
            <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2  text-gray-800 shadow-inner">Comedy</span>
            <span class="text-sm bg-gray-200 border border-gray-300 rounded-full px-2  text-gray-800 shadow-inner">Comedy</span>
        </div>
    </header>

    </body>
</html>
