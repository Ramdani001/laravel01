<!-- Icon Sidebar -->

<aside id="icon-side" class="hidden md:fixed top-0 w-18 h-screen bg-white py-3 md:flex items-center flex-col mt-[56px] text-gray-700">
  <div id="main-side" class=" w-[240px] duration-300  relative">
    <div class="p-2.5 mt-1 flex items-center py-3 hover:bg-gray-200 rounded-md px-4 duration-300 cursor-pointer">
        <i class="fa-solid fa-house"></i>
        <span id="text-sides" class="ml-4 text-md cursor-pointer">Beranda</span>
    </div>
    <div class="p-2.5 mt-1 flex items-center py-3 hover:bg-gray-200 rounded-md px-4 duration-300 cursor-pointer" onclick="Dropdown()">
        <i class="fa-solid fa-calendar-check"></i>
        <div id="text-sides1" class="">
            <span class="ml-4 text- cursor-pointer mr-4">Kategori</span>
        
            <i class="fa-solid fa-angle-up" id="arrow"></i>
        </div>
        
    </div>

    <div class="text-left text-sm font-thin mt-2 w-4/5 mx-auto hidden" id="submenu">
        <h1 class="cursor-pointer p-2 hover:bg-gray-400 rounded-md mt-1"> <a href="">Shopee</a></h1>
        <h1 class="cursor-pointer p-2 hover:bg-gray-400 rounded-md mt-1 "> <a href=" ">Shopee</a>
        </h1>
        <h1 class="cursor-pointer p-2 hover:bg-gray-400 rounded-md mt-1">
            <a href="">Shopee</a></h1>
    </div> 

    <div id="main-sides2" class="p-2.5 -ml-3 mt-1 flex full items-center py-3 hover:bg-gray-200 rounded-md px-4 duration-300 cursor-pointer ">
        <img src="images/icon/icons-subcription.png" class="w-6 ml-2 mr-2" alt="">
        <span id="text-sides2" class="text-md cursor-pointer ">Subscription</span>
    </div>
    <div id="main-sides3" class="p-2.5 mt-1 flex items-center py-3 hover:bg-gray-200 rounded-md px-4 duration-300 cursor-pointer ">
        <i class="fa-solid fa-compass"></i>
        <span id="text-sides3" class=" text-md cursor-pointer ml-2">Explorer</span>
    </div>
    <div id="main-sides4" class="p-2.5 mt-1 -ml-2 flex items-center py-3 hover:bg-gray-200 rounded-md px-4 duration-300 cursor-pointer ">
        <img src="images/icon/icons-colection.png" class="w-6 mr-2" alt="">
        <span id="text-sides4" class=" text-md cursor-pointer ">Koleksi</span>
    </div>
    <hr class="my-2 text-gray-600 ">
    <div id="text-sides5" class="w-[250px] p-4">
        <p class="">
            Login untuk memberi tanda suka pada video, memberi komentar, dan subscribe
        </p>
    </div>
    <button id="text-sides6" type="button" class="ml-16 mt-1 border px-5 py-1 border-blue-500 text-blue-500">
        <a href="/login">LOGIN</a>
    </button>
    
    {{-- <button class="flex items-center justify-center flex-col  w-full px-5 py-4">
        <span class="-ml-1 text-md cursor-pointer"><span class="mr-2"><i class="fa-solid fa-house"></i> </span> Beranda</span>
          <span id="text-icon" class="hidden text-xs">Beranda</span>
      </button>
      <button class="flex items-center justify-center flex-col hover:bg-gray-200 w-full py-4 px-5">
        <span class="ml-4 text-md cursor-pointer duration-300"> <span class="mr-2"><i class="fa-solid fa-calendar-check"></i></span> Kategori </span><span class="ml-6"> <i class="fa-solid fa-angle-up" id="arrow"></i> </span>
          <span id="text-icon" class="hidden text-xs">Kategori</span>
      </button>
      <button class="flex items-center justify-center ml-5 flex-col hover:bg-gray-200 w-28 py-4 px-5">
          <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" width="5" height="2" class="font-bold style-scope yt-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;"><g class="style-scope yt-icon"><path d="M10,18v-6l5,3L10,18z M17,3H7v1h10V3z M20,6H4v1h16V6z M22,9H2v12h20V9z M3,10h18v10H3V10z" class="style-scope yt-icon"></path></g></svg>
          <span id="text-icon" class="hidden text-xs">Subcription</span>
      </button>
      <button class="flex items-center justify-center flex-col hover:bg-gray-200 w-28 ml-5  py-4 px-5">
          <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" width="5" height="2" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;"><g class="style-scope yt-icon"><path d="M9.8,9.8l-3.83,8.23l8.23-3.83l3.83-8.23L9.8,9.8z M13.08,12.77c-0.21,0.29-0.51,0.48-0.86,0.54 c-0.07,0.01-0.15,0.02-0.22,0.02c-0.28,0-0.54-0.08-0.77-0.25c-0.29-0.21-0.48-0.51-0.54-0.86c-0.06-0.35,0.02-0.71,0.23-0.99 c0.21-0.29,0.51-0.48,0.86-0.54c0.35-0.06,0.7,0.02,0.99,0.23c0.29,0.21,0.48,0.51,0.54,0.86C13.37,12.13,13.29,12.48,13.08,12.77z M12,3c4.96,0,9,4.04,9,9s-4.04,9-9,9s-9-4.04-9-9S7.04,3,12,3 M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2 L12,2z" class="style-scope yt-icon"></path></g></svg>
          <span id="text-icon" class="hidden text-xs">Explorer</span>
      </button>
      <button class="flex items-center justify-center flex-col hover:bg-gray-200 w-28 ml-5 py-4 px-5">
          <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" width="5" height="2" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;"><g class="style-scope yt-icon"><path d="M11,7l6,3.5L11,14V7L11,7z M18,20H4V6H3v15h15V20z M21,18H6V3h15V18z M7,17h13V4H7V17z" class="style-scope yt-icon"></path></g></svg>
          <span id="text-icon" class="hidden text-xs">Koleksi</span>
      </button> --}}
  </div>
</aside>
<!-- End Icon Sidebar -->

<aside class="w-full fixed bottom-0 bg-white md:hidden">
    <div class=" inline-flex ml-2">
        <div class="text-2xl px-6 py-2 hover:bg-gray-400">
            <i class="fa-solid fa-house"></i>
        </div>
        <div class="text-2xl px-6 py-2 hover:bg-gray-400">
            <i class="fa-solid fa-calendar-check"></i>
        </div>
        <div class="text-2xl px-6 py-2 hover:bg-gray-400">
            <img src="images/icon/icons-subcription.png" class="w-6 mt-[5px]" alt="">
        </div>
        <div class="text-2xl px-6 py-2 hover:bg-gray-400">
            <i class="fa-solid fa-compass"></i>
        </div>
        <div class="text-2xl px-6 py-2 hover:bg-gray-400">
            <img src="images/icon/icons-colection.png" class="w-6 mt-[5px]" alt="">
        </div>
    </div>
</aside>