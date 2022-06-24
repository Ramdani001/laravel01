<header class="bg-white divide-y ml-18 border-b fixed inset-x-0">
  
  <!-- Btn Search Active -->
  <div id="btn-search-active" class="hidden items-center justify-center px-2  bg-gray-200">
    <a href="" id="btn-back" class="px-3 mr-[20px] text-xl" onclick="back()">
        <i class="fa-solid fa-angle-left"></i>
    </a>
    <input id="search" type="text" placeholder="Search" onkeypress="searching(event)" class="w-[600px] bg-gray-200 border-b-2 px-4 py-2 focus:outline-none focus:border-b-gray-400 sm:w-3/5 lg:w-3/5">
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
                <a href="/" class="text-3xl -ml-3 md:ml-2 curdor-pointer">Affiliate</a>
            </div>
            <div id="btn-search" class=" realtive ml-20 sm:-ml-4 lg:-ml-20">
                <button class="sm:hidden" onclick="search()"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>

            <div class=" items-center justify-center flex-grow hidden sm:flex">
                <input id="search" onkeypress="searching(event)" name="search" type="text" placeholder="Search" class="border border-gray-400 h-8  px-1 py-2 focus:outline-none focus:border-blue-600 sm:w-3/5 lg:w-3/5">
                <button class="bg-gray-200 flex items-center justify-center h-8 w-16 border border-gray-400 border-l-0 hover:bg-gray-300">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <div class="flex items-center justify-center space-x-4">
                <button class="flex items-center justify-center pl-5 text-2xl">
                    <i class="fa-solid fa-bell"></i>
                </button>
                <button type="button" class="border px-5 py-1 border-blue-500 text-blue-500">
                    <a href="/login">LOGIN</a>
                </button>
            </div>
        </div>
