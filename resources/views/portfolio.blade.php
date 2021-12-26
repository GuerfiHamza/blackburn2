@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <section>

        <div class="py-20 bg-gray-900 radius-for-skewed">
            <div class="container mx-auto px-4" x-data="{ tab: 'sites' }">
                <div class="mb-8 md:mb-16 max-w-lg mx-auto text-center">
                    <span class="text-purple-600 font-bold">Dolor sit amet consectutar</span>
                    <h2 class="mb-6 text-4xl lg:text-5xl font-bold font-heading text-white">Latest Projects</h2>
                    <div class="inline-flex flex-wrap py-1 sm:px-1 sm:space-x-1 bg-gray-800 rounded text-sm">
                        <button  @click.prevent="tab = 'sites'"
                        class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-white hover:text-white shadow-md rounded font-bold focus:outline-none transition duration-200" :class="{ 'bg-purple-600 ': tab === 'sites'}">Sites
                        Web
                    </button>
                        <button  @click.prevent="tab = 'logos'"
                            class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-white hover:text-white rounded hover:shadow-md font-bold focus:outline-none transition duration-200" :class="{ 'bg-purple-600 ': tab === 'logos'}">Logo</button>

                        <button  @click.prevent="tab = 'graphic'"
                            class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-white hover:text-white rounded hover:shadow-md font-bold focus:outline-none transition duration-200" :class="{ 'bg-purple-600 ': tab === 'graphic'}">Graphic
                        </button>

                    </div>
                </div>

                <div class="flex flex-wrap mb-8 -mx-4" x-show="tab === 'sites'">
                    @foreach ($web as $w)

                    <div class="w-full md:w-1/2 lg:w-1/4 mb-8 px-4">

                        <div class="relative mx-auto h-64 w-full rounded-xl">
                            <img class="relative h-full w-full rounded-xl object-contain"
                                src="{{asset('storage/'.$w->image)}}" alt="">

                            <div class="opacity-0  hover:opacity-100">
                                <div class="absolute inset-0  bg-gray-900 opacity-50 rounded-xl"></div>

                                <div class=" absolute inset-0 flex items-center justify-center">

                                    <a class="inline-block py-2 px-4 border-2  border-purple-600 hover:border-purple-600 bg-transparent text-gray-50 hover:bg-purple-600 hover:text-white tansition duration-200 rounded-xl font-bold leading-loose"
                                        href="#">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>
                <div class="flex flex-wrap mb-8 -mx-4" x-show="tab === 'logos'">
                    @foreach ($logos as $w)

                    <div class="w-full md:w-1/2 lg:w-1/4 mb-8 px-4">

                        <div class="relative mx-auto h-64 w-full rounded-xl">
                            <img class="relative h-full w-full rounded-xl object-contain"
                                src="{{asset('storage/'.$w->image)}}" alt="">

                            <div class="opacity-0  hover:opacity-100">
                                <div class="absolute inset-0  bg-gray-900 opacity-50 rounded-xl"></div>

                                <div class=" absolute inset-0 flex items-center justify-center">

                                    <a class="inline-block py-2 px-4 border-2  border-purple-600 hover:border-purple-600 bg-transparent text-gray-50 hover:bg-purple-600 hover:text-white tansition duration-200 rounded-xl font-bold leading-loose"
                                        href="#">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="flex flex-wrap mb-8 -mx-4" x-show="tab === 'graphic'">
                    @foreach ($graphic as $w)

                    <div class="w-full md:w-1/2 lg:w-1/4 mb-8 px-4">

                        <div class="relative mx-auto h-64 w-full rounded-xl">
                            <img class="relative h-full w-full rounded-xl object-contain"
                                src="{{asset('storage/'.$w->image)}}" alt="">

                            <div class="opacity-0  hover:opacity-100">
                                <div class="absolute inset-0  bg-gray-900 opacity-50 rounded-xl"></div>

                                <div class=" absolute inset-0 flex items-center justify-center">

                                    <a class="inline-block py-2 px-4 border-2  border-purple-600 hover:border-purple-600 bg-transparent text-gray-50 hover:bg-purple-600 hover:text-white tansition duration-200 rounded-xl font-bold leading-loose"
                                        href="#">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>



            </div>
        </div>

    </section>


@stop
