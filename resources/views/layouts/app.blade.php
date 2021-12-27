<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blackburn - @yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Blackburn specialize in creating all types of websites (E-commerce, Showcase etc...) & graphic content (Logos, Banner, Roll-ups etc...)">
    <meta name="keywords"
        content="Web, Design, WebDesign, Logo, E-commerce, creation de siteweb,blog, blackburn,charte graphique, facebook post">
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-187779000-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-187779000-1');

        </script>
</head>

<body class="antialiased bg-gray-900">
    <section>
        <div x-data="{ isOpen: false }">

            <nav class="relative px-6 py-6 flex justify-between items-center bg-gray-900">
                <a class="text-white text-3xl font-bold leading-none" href="{{ route('welcome') }}">
                    <img class="w-36" src="img/logo.png" alt="BLACKBURN">
                </a>
                <div class="lg:hidden" data-no-turbolink>
                    <button class="navbar-burger flex items-center text-white p-3" @click="isOpen = !isOpen" data-no-turbolink>
                        <svg class="block h-4 w-4 fill-current" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Mobile menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </button>
                </div>
                <ul
                    class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
                    <li><a class="text-sm text-gray-300 hover:text-white" href="{{ route('welcome') }}">Home</a></li>
                    <li class="text-gray-800">
                        <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewbox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                            </path>
                        </svg>
                    </li>
                    <li><a class="text-sm text-gray-300 hover:text-white" href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li class="text-gray-800">
                        <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewbox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                            </path>
                        </svg>
                    </li>
                    <li><a class="text-sm text-gray-300 hover:text-white" href="{{ route('web') }}">Web</a></li>
                    {{-- <li class="text-gray-800">
                        <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewbox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                            </path>
                        </svg>
                    </li> --}}
                    {{-- <li><a class="text-sm text-gray-300 hover:text-white" href="{{ route('design') }}">Design</a></li> --}}

                </ul>
                <a class="hidden lg:block py-2 px-6 bg-purple-600 hover:bg-purple-700 text-sm text-white font-bold rounded-xl transition duration-200"
                    href="{{ route('contact') }}">Contact Us</a>

            </nav>
            <div class="navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-sm z-50 tanslate-x-0" x-show="isOpen"
                x-transition:enter="transition ease-in-out duration-150"
                x-transition:enter-start="opacity-0 transform scale-x-0 -translate-x-1/2"
                x-transition:enter-end="opacity-100 transform scale-x-100 translate-x-0"
                x-transition:leave="transition ease-in-out duration-150"
                x-transition:leave-start="opacity-100 transform scale-x-100 translate-x-0"
                x-transition:leave-end="opacity-0 transform scale-x-0 -translate-x-1/2" @click.away="isOpen = false">
                <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
                <nav class="relative flex flex-col py-6 px-6 h-full w-full bg-gray-900 overflow-y-auto">
                    <div class="flex items-center mb-8">
                        <a class="mr-auto text-3xl font-bold leading-none" href="#">
                            <img class="h-16" src="img/logo.png" alt="">
                        </a>
                        <button class="navbar-close" @click="isOpen = !isOpen">
                            <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div>
                        <ul>
                            <li class="mb-1"><a
                                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-purple-600 hover:text-white rounded"
                                    href="{{ route('welcome') }}">Home</a></li>
                            <li class="mb-1"><a
                                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-purple-600 hover:text-white rounded"
                                    href="{{ route('portfolio') }}">Portfolio</a></li>
                            <li class="mb-1"><a
                                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-purple-600 hover:text-white rounded"
                                    href="{{ route('web') }}">Web</a></li>
                            {{-- <li class="mb-1"><a
                                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-purple-600 hover:text-white rounded"
                                    href="{{ route('design') }}">Design</a></li> --}}
                            <li class="mb-1"><a
                                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-purple-600 hover:text-white rounded"
                                    href="{{ route('contact') }}">Contact</a></li>

                        </ul>
                    </div>
                    <div class="mt-auto">
                        <p class="my-4 text-xs text-center text-gray-400">
                            <span>&copy; 2021 All rights reserved.</span>
                        </p>
                        <div class="text-center">
                            <a class="inline-block px-1" href="https://www.facebook.com/Balckburn.design" target="_blank">
                                <img src="atis-assets/social/facebook-purple.svg" alt="facebook">
                            </a>

                            <a class="inline-block px-1" href="https://www.instagram.com/blackburn_designs/" target="_blank">
                                <img src="atis-assets/social/instagram-purple.svg" alt="instagram">
                            </a>
                        </div>
                    </div>
                </nav>
            </div>

        </div>
    </section>

    @yield('content')


    <section class="bg-gray-900">
        <div class="flex w-full">
          <div class="w-1/3 flex">
            <div class="w-full py-1 bg-[#ff3300]"></div>
          </div>
          <div class="w-1/3 flex">
            <div class="w-full py-1 bg-[#ceff07]"></div>
            <div class="w-full py-1 bg-[#cc00ff]"></div>
          </div>
          <div class="w-1/3 flex">
            <div class="w-4/5 py-1 bg-[#141a28]"></div>
            <div class="w-full py-1 bg-[#e9e7ea]"></div>

          </div>
        </div>
        <div class="container mx-auto px-4">
          <div class="pt-10 pb-12">
            <div class="relative lg:pb-8 mb-8 flex flex-wrap lg:border-b lg:border-gray-800">
              <p class="w-full lg:w-auto text-gray-400 text-sm text-center lg:text-left order-last lg:order-first">&copy; 2021. All rights reserved.</p>
              <div class="mb-12 lg:mb-0 lg:ml-auto w-full lg:w-auto order-first lg:order-last text-center lg:text-left">
                <a class="inline-block text-white text-xl font-bold leading-none" href="#">
                  <img class="inline-block h-12 lg:h-6" src="img/B-03.png" alt="" width="auto">
                </a>
              </div>
            </div>
            <div class="flex justify-center">
              <a class="inline-block w-10 mr-2 p-2 bg-gray-800 hover:bg-gray-700 rounded" href="https://www.facebook.com/Balckburn.design" target="_blank">
                <img class="mx-auto" src="atis-assets/social/facebook-purple.svg">
              </a>

              <a class="inline-block w-10 p-2 bg-gray-800 hover:bg-gray-700 rounded" href="https://www.instagram.com/blackburn_designs/" target="_blank">
                <img class="mx-auto" src="atis-assets/social/instagram-purple.svg">
              </a>
            </div>
          </div>
        </div>
      </section>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $("img").bind("contextmenu", function(e) {
            e.preventDefault()
        });
    </script>
        <script type="text/javascript">
            $('#reload').click(function() {
                $.ajax({
                    type: 'GET',
                    url: 'reload-captcha',
                    success: function(data) {
                        $(".captcha span").html(data.captcha);
                    }
                });
            });
        </script>
    @yield('scripts')
</body>

</html>
