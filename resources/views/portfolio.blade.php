@extends('layouts.app')
@section('title', 'Portfolio')
@section('content')
    <section>

        <div class="py-20 bg-gray-900 radius-for-skewed">
            <div class="container mx-auto px-4" x-data="{ tab: 'sites' }">
                <div class="mb-8 md:mb-16 max-w-lg mx-auto text-center">
                    <span class="text-purple-600 font-bold">Our best designs</span>
                    <h2 class="mb-6 text-4xl lg:text-5xl font-bold font-heading text-white">Latest Projects</h2>
                    <div class="inline-flex flex-wrap py-1 sm:px-1 sm:space-x-1 bg-gray-800 rounded text-sm">
                        <button @click.prevent="tab = 'sites'"
                            class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-white hover:text-white shadow-md rounded font-bold focus:outline-none transition duration-200"
                            :class="{ 'bg-purple-600 ': tab === 'sites'}">Sites
                            Web
                        </button>
                        <button @click.prevent="tab = 'logos'"
                            class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-white hover:text-white rounded hover:shadow-md font-bold focus:outline-none transition duration-200"
                            :class="{ 'bg-purple-600 ': tab === 'logos'}">Logo</button>

                        <button @click.prevent="tab = 'graphic'"
                            class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-white hover:text-white rounded hover:shadow-md font-bold focus:outline-none transition duration-200"
                            :class="{ 'bg-purple-600 ': tab === 'graphic'}">Graphic
                        </button>

                    </div>
                </div>

                <div class="flex flex-wrap mb-8 -mx-4" x-show="tab === 'sites'" x-data="{ open: false }">

                    @foreach ($web as $w)

                        <div class="w-full md:w-1/2 lg:w-1/4 mb-8 px-4">

                            <div class="relative mx-auto h-64 w-full rounded-xl">
                                <img class="relative h-full w-full rounded-xl object-contain"
                                    src="{{ asset('storage/' . $w->image) }}" alt="">

                                <div class="opacity-0  hover:opacity-100">
                                    <div class="absolute inset-0  bg-gray-900 opacity-50 rounded-xl"></div>

                                    <div class=" absolute inset-0 flex items-center justify-center">

                                        <button id=""
                                            class=" modal inline-block py-2 px-4 border-2  border-purple-600 hover:border-purple-600 bg-transparent text-gray-50 hover:bg-purple-600 hover:text-white tansition duration-200 rounded-xl font-bold leading-loose"
                                            @click="open = true" type="button" data-id="{{ $w->id }}">View
                                            Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
                        x-show="open">
                        <div class="max-w-3xl px-6 py-4 mx-auto text-left bg-gray-800 rounded-xl shadow-lg"
                            @click.away="open = false" x-transition:enter="motion-safe:ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                            <div class="flex items-center justify-between">
                                <h5 class="mr-3 text-black max-w-none"></h5>

                                <button type="button" class="z-50 cursor-pointer text-white" @click="open = false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>

                            <div class="flex flex-wrap overflow-hidden md:-mx-1 lg:-mx-2 xl:-mx-2">
                                <div
                                    class="w-2/3 overflow-hidden md:my-1 md:px-1 md:w-2/3 lg:my-2 lg:px-2 lg:w-2/3 xl:my-2 xl:px-2 xl:w-2/3">

                                    <img alt="" class="w-full image">
                                </div>
                                <div
                                    class="w-1/3 overflow-hidden md:my-1 md:px-1 md:w-1/3 lg:my-2 lg:px-2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/3">

                                    <h1 class="font-bold text-xl title text-white"></h1>
                                    <p class="description"></p>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
                <div class="flex flex-wrap mb-8 -mx-4" x-show="tab === 'logos'"  x-data="{ open2: false }">
                    @foreach ($logos as $w)

                        <div class="w-full md:w-1/2 lg:w-1/4 mb-8 px-4">

                            <div class="relative mx-auto h-64 w-full rounded-xl">
                                <img class="relative h-full w-full rounded-xl object-contain"
                                    src="{{ asset('storage/' . $w->image) }}" alt="">

                                <div class="opacity-0  hover:opacity-100">
                                    <div class="absolute inset-0  bg-gray-900 opacity-50 rounded-xl"></div>

                                    <div class=" absolute inset-0 flex items-center justify-center">

                                        <button
                                        class="modal inline-block py-2 px-4 border-2  border-purple-600 hover:border-purple-600 bg-transparent text-gray-50 hover:bg-purple-600 hover:text-white tansition duration-200 rounded-xl font-bold leading-loose"
                                        @click="open2 = true" type="button" data-id="{{ $w->id }}">View
                                        Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
                        x-show="open2">
                        <div class="max-w-3xl px-6 py-4 mx-auto text-left bg-gray-800 rounded-xl shadow-lg"
                            @click.away="open2 = false" x-transition:enter="motion-safe:ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                            <div class="flex items-center justify-between">
                                <h5 class="mr-3 text-black max-w-none"></h5>

                                <button type="button" class="z-50 cursor-pointer text-white" @click="open2 = false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>

                            <div class="flex flex-wrap overflow-hidden md:-mx-1 lg:-mx-2 xl:-mx-2">
                                <div
                                    class="w-2/3 overflow-hidden md:my-1 md:px-1 md:w-2/3 lg:my-2 lg:px-2 lg:w-2/3 xl:my-2 xl:px-2 xl:w-2/3">

                                    <img  alt="" class="w-full image">
                                </div>
                                <div
                                    class="w-1/3 overflow-hidden md:my-1 md:px-1 md:w-1/3 lg:my-2 lg:px-2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/3">

                                    <h1 id="" class="font-bold text-xl title text-white"></h1>
                                    <p class="description"></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap mb-8 -mx-4" x-show="tab === 'graphic'"  x-data="{ open3: false }">
                    @foreach ($graphic as $w)

                        <div class="w-full md:w-1/2 lg:w-1/4 mb-8 px-4">

                            <div class="relative mx-auto h-64 w-full rounded-xl">
                                <img class="relative h-full w-full rounded-xl object-contain"
                                    src="{{ asset('storage/' . $w->image) }}" alt="">

                                <div class="opacity-0  hover:opacity-100">
                                    <div class="absolute inset-0  bg-gray-900 opacity-50 rounded-xl"></div>

                                    <div class=" absolute inset-0 flex items-center justify-center">

                                        <button
                                        class="modal inline-block py-2 px-4 border-2  border-purple-600 hover:border-purple-600 bg-transparent text-gray-50 hover:bg-purple-600 hover:text-white tansition duration-200 rounded-xl font-bold leading-loose"
                                        @click="open3 = true" type="button" data-id="{{ $w->id }}">View
                                        Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
                    x-show="open3">
                    <div class="max-w-3xl px-6 py-4 mx-auto text-left bg-gray-800 rounded-xl shadow-lg"
                        @click.away="open3 = false" x-transition:enter="motion-safe:ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                        <div class="flex items-center justify-between">
                            <h5 class="mr-3 text-black max-w-none"></h5>

                            <button type="button" class="z-50 cursor-pointer text-white" @click="open3 = false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <div class="flex flex-wrap overflow-hidden md:-mx-1 lg:-mx-2 xl:-mx-2">
                            <div
                                class="w-2/3 overflow-hidden md:my-1 md:px-1 md:w-2/3 lg:my-2 lg:px-2 lg:w-2/3 xl:my-2 xl:px-2 xl:w-2/3">

                                <img  alt="" class="w-full image">
                            </div>
                            <div
                                class="w-1/3 overflow-hidden md:my-1 md:px-1 md:w-1/3 lg:my-2 lg:px-2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/3">

                                <h1 id="" class="font-bold text-xl title text-white"></h1>
                                <p class="description"></p>
                            </div>

                        </div>
                    </div>
                </div>
                </div>



            </div>
        </div>

    </section>


@section('scripts')
    <script>
        $(document).ready(function() {

            $('body').on('click', '.modal', function(event) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var id = $(this).data('id');

                $.ajax({
                    type: 'GET',
                    url: '/portfolio/' + id,
                    dataType: 'JSON',

                    success: function(data) {
                        // console.log(data);
                        $('.title').text(data.title);
                        $('.image').prop("src", "{{ asset('storage/') }}" + '/' + data.image);
                        $('.description').val(data.description);


                    },
                })
            });

        });
    </script>
@endsection
@stop
