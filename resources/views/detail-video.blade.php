@extends('layouts.detailvideo')

@section('detail-video')
    <!--Content Detail-->
    <div class="w-full md:w-[700px] bg-slate-50 h-screen md:mt-20 md:absolute">
        <div class="p-1 md:p-5">
            <div class="w-full h-full bg-gray-600 flex-shrink-0 overflow-hidden" class="object-cover">
                <img src="https://images.unsplash.com/photo-1497515114629-f71d768fd07c?ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="" class="object-cover h-full">
            </div>

            <!-- Views -->
            <div id="view" class="mt-3 pl-3" name="view">
                <span class="">
                    2,456,700 views
                </span>
            </div>
            <!-- Views -->

            <!-- Judul Video -->
            <div class="absolute ml-[140px] -mt-6 md:text-2xl md:ml-[220px] md:-mt-[15px]">
                <span>
                        Shopee Affiliate
                    </span>
            </div>
            <!-- End Judul Video -->

            <!-- Button Join -->
            <div class="mt-2 md:absolute md:text-2xl md:ml-[410px] md:-mt-[25px] bg-red-600 text-white text-center">
                <button type="submit" name="join" class="px-[100px] py-2">
                    JOIN
                </button>
            </div>
            <!-- End Button Join -->

            <!-- jumlah join -->
            <div id="join" class="md:ml-3 md:mt-0 absolute ml-[280px] -mt-[73px]" name="join">
                <span class="">
                    2,000 Join
                </span>
            </div>
            <!-- End jumlah join -->


            <!-- Deskripsi pekerjaan -->
            <div class="bg-gray-200 mt-3 md:mt-10">
                <div class="p-3">
                    <p><span class="font-semibold">Deskripsi Pekerjaan  :</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam est eaque laborum asperiores nesciunt nemo ipsum voluptas culpa iure harum vitae .</p>
                </div>
            </div>
            <!-- End Deskripsi pekerjaan -->

            <!-- Cara Kerja -->
            <div class="bg-gray-200 mt-2">
                <div class="p-3">
                    <p><span class="font-semibold">Cara Kerja  :</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam est eaque laborum asperiores nesciunt nemo</p>
                </div>
            </div>
            <!-- End Cara Kerja -->

            <!-- Commentar -->

            <div id="komentar" class="border-2">
                <div class="p-2  w-28 border-r-2 border-gray-200">
                    <span class="font-bold block">Comments</span>
                    <span>1,6K</span>
                </div>
                <div>
                    <div class="  absolute -mt-12 ml-32">
                        <div class="bg-blue-700 text-center pt-[1px] rounded-full h-7 w-7 text-white">
                            R
                        </div>
                        <div class="ml-10 -mt-8 w-full md:w-[500px]">
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing . . .
                            </p>
                        </div>
                    </div>
                </div>
            </div>



            <!-- End Commentar -->

        </div>
    </div>

    <main class="md:float-right mt-10 md:mt-20 md:w-[550px] md:mr-[65x]">

        <div class="bg-gray-500 text-2xl text-white font-bold py-1">
            <span class="p-4">KELAS BELAJAR</span>
        </div>


        <div class="bg-slate-50 mt-2 ">
            <div class=" grid grid-cols-1 md:grid-cols-2 md:space-y-2 md:p-2 row-gap-10 col-gap-2">

                <!-- Video List 1 -->

                <div class="md:ml-2 mt-1 cursor-pointer">
                    <div class="w-full h-full md:w-[250px] md:h-[150px] flex-shrink-0 overflow-hidden" class="object-cover">
                        <img src="https://images.unsplash.com/photo-1497515114629-f71d768fd07c?ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="" class="object-cover w-full h-full">
                    </div>

                    <!-- <div class="h-[110px] w-full bg-gray-700 overflow-hidden">
                    <iframe width="190" height="110" src="https://www.youtube.com/embed/cxQYh5mZHeM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div> -->
                </div>
                <div class="md:w-[275px] p-2">
                    <div class="text-sm font-bold">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                    <div class="text-xs text-gray-600">
                        <p>Channel Name</p>
                        <p>1 hours ago &middot; 87k views</p>
                    </div>
                </div>

                <!-- End Video List 1 -->
                <!-- Video List 1 -->

                <div class="md:ml-2 mt-1 cursor-pointer">
                    <div class="w-full h-full md:w-[250px] md:h-[150px] flex-shrink-0 overflow-hidden" class="object-cover">
                        <img src="https://images.unsplash.com/photo-1497515114629-f71d768fd07c?ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="" class="object-cover w-full h-full">
                    </div>

                    <!-- <div class="h-[110px] w-full bg-gray-700 overflow-hidden">
                    <iframe width="190" height="110" src="https://www.youtube.com/embed/cxQYh5mZHeM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div> -->
                </div>
                <div class="md:w-[275px] p-2">
                    <div class="text-sm font-bold">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                    <div class="text-xs text-gray-600">
                        <p>Channel Name</p>
                        <p>1 hours ago &middot; 87k views</p>
                    </div>
                </div>

                <!-- End Video List 1 -->
                <!-- Video List 1 -->

                <div class="md:ml-2 mt-1 cursor-pointer">
                    <div class="w-full h-full md:w-[250px] md:h-[150px] flex-shrink-0 overflow-hidden" class="object-cover">
                        <img src="https://images.unsplash.com/photo-1497515114629-f71d768fd07c?ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="" class="object-cover w-full h-full">
                    </div>

                    <!-- <div class="h-[110px] w-full bg-gray-700 overflow-hidden">
                    <iframe width="190" height="110" src="https://www.youtube.com/embed/cxQYh5mZHeM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div> -->
                </div>
                <div class="md:w-[275px] p-2">
                    <div class="text-sm font-bold">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                    <div class="text-xs text-gray-600">
                        <p>Channel Name</p>
                        <p>1 hours ago &middot; 87k views</p>
                    </div>
                </div>
                <!-- End Video List 1 -->
            </div>
        </div>
    </main>
   <!--Content Detail-->
@endsection