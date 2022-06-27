@extends('layouts.main')

@section('content')
<main class=" ml-0 md:ml-[250px] md:mr-5 pt-20 md:pt-24">
        <div class="border-b-4 border-gray-300 border-opacity-75 sm:space-x-5 space-y-8 pb-12">
            <div class=" grid grid-cols-1  space-y-8 sm:grid-cols-2 md:grid-cols-4  row-gap-10 col-gap-2">
                <div class="w-68 ml-2  mt-8 cursor-pointer">
                    <div class="h-40 w-full bg-gray-700 overflow-hidden">
                        <a href="/detail-video" class=" w-full h-40">
                            <img src="https://images.unsplash.com/photo-1500835556837-99ac94a94552?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" alt="">
                        </a>
                        {{-- <iframe width="300" height="160" src="https://www.youtube.com/embed/cxQYh5mZHeM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                    </div> 
                    <div class="flex mt-2">
                        <div class="h-10 w-10 bg-blue-300 rounded-full flex-shrink-0 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1570724061670-86a53c509dee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" alt="">
                        </div>
                        <div class="ml-2">
                            <div class="text-sm font-bold">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                            <div class="text-xs text-gray-600">
                                <p>Channel Name</p>
                                <p>1 hours ago &middot; 87k views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-68 ml-3">
                    <div class="h-40 w-full bg-gray-700 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1500835556837-99ac94a94552?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" alt="">
                    </div>
                    <div class="flex mt-2">
                        <div class="h-10 w-10 bg-blue-300 rounded-full flex-shrink-0 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1570724061670-86a53c509dee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" alt="">
                        </div>
                        <div class="ml-2">
                            <div class="text-sm font-bold">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                            <div class="text-xs text-gray-600">
                                <p>Channel Name</p>
                                <p>90 hours ago &middot; 87k views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-68 ml-3">
                    <div class="h-40 w-full bg-gray-700 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1500835556837-99ac94a94552?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" alt="">
                    </div>
                    <div class="flex mt-2">
                        <div class="h-10 w-10 bg-blue-300 rounded-full flex-shrink-0 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1570724061670-86a53c509dee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" alt="">
                        </div>
                        <div class="ml-2">
                            <div class="text-sm font-bold">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                            <div class="text-xs text-gray-600">
                                <p>Channel Name</p>
                                <p>9 hours ago &middot; 87k views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-68 ml-3">
                    <div class="h-40 w-full bg-gray-700 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1500835556837-99ac94a94552?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" alt="">
                    </div>
                    <div class="flex mt-2">
                        <div class="h-10 w-10 bg-blue-300 rounded-full flex-shrink-0 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1570724061670-86a53c509dee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" alt="">
                        </div>
                        <div class="ml-2">
                            <div class="text-sm font-bold">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                            <div class="text-xs text-gray-600">
                                <p>Channel Name</p>
                                <p>9 hours ago &middot; 87k views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-68 ml-3">
                    <div class="h-40 w-full bg-gray-700 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1500835556837-99ac94a94552?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" alt="">
                    </div>
                    <div class="flex mt-2">
                        <div class="h-10 w-10 bg-blue-300 rounded-full flex-shrink-0 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1570724061670-86a53c509dee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" alt="">
                        </div>
                        <div class="ml-2">
                            <div class="text-sm font-bold">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                            <div class="text-xs text-gray-600">
                                <p>Channel Name</p>
                                <p>9 hours ago &middot; 87k views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-68 ml-3">
                    <div class="h-40 w-full bg-gray-700 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1500835556837-99ac94a94552?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" alt="">
                    </div>
                    <div class="flex mt-2">
                        <div class="h-10 w-10 bg-blue-300 rounded-full flex-shrink-0 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1570724061670-86a53c509dee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" alt="">
                        </div>
                        <div class="ml-2">
                            <div class="text-sm font-bold">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                            <div class="text-xs text-gray-600">
                                <p>Channel Name</p>
                                <p>9 hours ago &middot; 87k views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-68 ml-3">
                    <div class="h-40 w-full bg-gray-700 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1500835556837-99ac94a94552?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" alt="">
                    </div>
                    <div class="flex mt-2">
                        <div class="h-10 w-10 bg-blue-300 rounded-full flex-shrink-0 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1570724061670-86a53c509dee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" alt="">
                        </div>
                        <div class="ml-2">
                            <div class="text-sm font-bold">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                            <div class="text-xs text-gray-600">
                                <p>Channel Name</p>
                                <p>9 hours ago &middot; 87k views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-68 ml-3">
                    <div class="h-40 w-full bg-gray-700 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1500835556837-99ac94a94552?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" alt="">
                    </div>
                    <div class="flex mt-2">
                        <div class="h-10 w-10 bg-blue-300 rounded-full flex-shrink-0 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1570724061670-86a53c509dee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" alt="">
                        </div>
                        <div class="ml-2">
                            <div class="text-sm font-bold">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                            <div class="text-xs text-gray-600">
                                <p>Channel Name</p>
                                <p>9 hours ago &middot; 87k views</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="border-b-4 border-gray-300 sm:space-x-5 space-y-8 border-opacity-75 pb-12 ">
            <div class=" grid grid-cols-1 space-y-8 sm:grid-cols-2 md:grid-cols-4 row-gap-10 col-gap-2 ">
                <div class="w-68 ml-1 mt-8 cursor-pointer ">
                    <div class="h-40 w-full bg-gray-700 overflow-hidden ">
                        <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80 " alt=" ">
                    </div>
                    <div class="flex mt-2 ">
                        <div class="h-10 w-10 bg-blue-300 rounded-full flex-shrink-0 overflow-hidden ">
                            <img src="https://images.unsplash.com/photo-1570724061670-86a53c509dee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60 " alt=" ">
                        </div>
                        <div class="ml-2 ">
                            <div class="text-sm font-bold ">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                            <div class="text-xs text-gray-600 ">
                                <p>Channel Name</p>
                                <p>1 hours ago &middot; 87k views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-68 ml-3 ">
                    <div class="h-40 w-full bg-gray-700 overflow-hidden ">
                        <img src="https://images.unsplash.com/photo-1500835556837-99ac94a94552?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60 " alt=" ">
                    </div>
                    <div class="flex mt-2 ">
                        <div class="h-10 w-10 bg-blue-300 rounded-full flex-shrink-0 overflow-hidden ">
                            <img src="https://images.unsplash.com/photo-1570724061670-86a53c509dee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60 " alt=" ">
                        </div>
                        <div class="ml-2 ">
                            <div class="text-sm font-bold ">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                            <div class="text-xs text-gray-600 ">
                                <p>Channel Name</p>
                                <p>90 hours ago &middot; 87k views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-68 ml-3 ">
                    <div class="h-40 w-full bg-gray-700 overflow-hidden ">
                        <img src="https://images.unsplash.com/photo-1500835556837-99ac94a94552?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60 " alt=" ">
                    </div>
                    <div class="flex mt-2 ">
                        <div class="h-10 w-10 bg-blue-300 rounded-full flex-shrink-0 overflow-hidden ">
                            <img src="https://images.unsplash.com/photo-1570724061670-86a53c509dee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60 " alt=" ">
                        </div>
                        <div class="ml-2 ">
                            <div class="text-sm font-bold ">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                            <div class="text-xs text-gray-600 ">
                                <p>Channel Name</p>
                                <p>9 hours ago &middot; 87k views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-68 ml-3 ">
                    <div class="h-40 w-full bg-gray-700 overflow-hidden ">
                        <img src="https://images.unsplash.com/photo-1500835556837-99ac94a94552?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60 " alt=" ">
                    </div>
                    <div class="flex mt-2 ">
                        <div class="h-10 w-10 bg-blue-300 rounded-full flex-shrink-0 overflow-hidden ">
                            <img src="https://images.unsplash.com/photo-1570724061670-86a53c509dee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60 " alt=" ">
                        </div>
                        <div class="ml-2 ">
                            <div class="text-sm font-bold ">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                            <div class="text-xs text-gray-600 ">
                                <p>Channel Name</p>
                                <p>9 hours ago &middot; 87k views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-68 ml-3 ">
                    <div class="h-40 w-full bg-gray-700 overflow-hidden ">
                        <img src="https://images.unsplash.com/photo-1500835556837-99ac94a94552?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60 " alt=" ">
                    </div>
                    <div class="flex mt-2 ">
                        <div class="h-10 w-10 bg-blue-300 rounded-full flex-shrink-0 overflow-hidden ">
                            <img src="https://images.unsplash.com/photo-1570724061670-86a53c509dee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60 " alt=" ">
                        </div>
                        <div class="ml-2 ">
                            <div class="text-sm font-bold ">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                            <div class="text-xs text-gray-600 ">
                                <p>Channel Name</p>
                                <p>9 hours ago &middot; 87k views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-68 ml-3 ">
                    <div class="h-40 w-full bg-gray-700 overflow-hidden ">
                        <img src="https://images.unsplash.com/photo-1500835556837-99ac94a94552?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60 " alt=" ">
                    </div>
                    <div class="flex mt-2 ">
                        <div class="h-10 w-10 bg-blue-300 rounded-full flex-shrink-0 overflow-hidden ">
                            <img src="https://images.unsplash.com/photo-1570724061670-86a53c509dee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60 " alt=" ">
                        </div>
                        <div class="ml-2 ">
                            <div class="text-sm font-bold ">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                            <div class="text-xs text-gray-600 ">
                                <p>Channel Name</p>
                                <p>9 hours ago &middot; 87k views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-68 ml-3 ">
                    <div class="h-40 w-full bg-gray-700 overflow-hidden ">
                        <img src="https://images.unsplash.com/photo-1500835556837-99ac94a94552?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60 " alt=" ">
                    </div>
                    <div class="flex mt-2 ">
                        <div class="h-10 w-10 bg-blue-300 rounded-full flex-shrink-0 overflow-hidden ">
                            <img src="https://images.unsplash.com/photo-1570724061670-86a53c509dee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60 " alt=" ">
                        </div>
                        <div class="ml-2 ">
                            <div class="text-sm font-bold ">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                            <div class="text-xs text-gray-600 ">
                                <p>Channel Name</p>
                                <p>9 hours ago &middot; 87k views</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-68 ml-3 ">
                    <div class="h-40 w-full bg-gray-700 overflow-hidden ">
                        <img src="https://images.unsplash.com/photo-1500835556837-99ac94a94552?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60 " alt=" ">
                    </div>
                    <div class="flex mt-2 ">
                        <div class="h-10 w-10 bg-blue-300 rounded-full flex-shrink-0 overflow-hidden ">
                            <img src="https://images.unsplash.com/photo-1570724061670-86a53c509dee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60 " alt=" ">
                        </div>
                        <div class="ml-2 ">
                            <div class="text-sm font-bold ">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                            <div class="text-xs text-gray-600 ">
                                <p>Channel Name</p>
                                <p>9 hours ago &middot; 87k views</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>

        </div>

    </main>
@endsection