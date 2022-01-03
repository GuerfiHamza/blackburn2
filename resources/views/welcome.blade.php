@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <section class="overflow-hidden">

        <div class="relative bg-gray-900 pt-20 pb-24 lg:py-40 min-h-full">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full lg:w-1/2 px-4 flex items-center">
                        <div class="w-full text-center lg:text-left">
                            <img class="hidden lg:block absolute inset-0 w-full" src="atis-assets/background/lines.svg"
                                alt="" lazy="loading">
                            <div class="relative max-w-md mx-auto lg:mx-0">
                                <h1 class="mb-3 text-4xl lg:text-5xl text-white font-bold">
                                    <span class="text-purple-600 uppercase">Blackburn</span>
                                </h1>
                            </div>
                            <div class="relative max-w-sm mx-auto lg:mx-0">
                                <p class="mb-6 text-gray-400 leading-loose">Blackburn specialize in creating all types of websites (E-commerce, Showcase etc...) & graphic content (Logos, Banner, Roll-ups etc...)</p>
                                <div><a class="inline-block mb-3 lg:mb-0 lg:mr-3 w-full lg:w-auto py-2 px-6 leading-loose bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-xl transition duration-200"
                                        href="{{ route('contact') }}">Message Us</a><a
                                        class="inline-block w-full lg:w-auto py-2 px-6 leading-loose text-white font-semibold bg-gray-900 border-2 border-gray-700 hover:border-gray-600 rounded-xl transition duration-200"
                                        href="{{ route('portfolio') }}">Portfolio</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 px-4">
                        <img class="lg:absolute top-0 my-12 lg:my-0 h-full w-full lg:w-1/2 rounded-3xl lg:rounded-none object-cover"
                            src="img/macbook.jpg" alt="" lazy="loading">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section>

        <div class="py-20 bg-gray-900 radius-for-skewed">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap items-center -mx-4">
                    <div class="mb-12 lg:mb-0 w-full lg:w-1/2 px-4">
                        <div class="max-w-md">
                            <h2 class="mb-6 text-4xl lg:text-5xl font-bold font-heading text-white">Build &amp; Launch
                                without problems</h2>
                            <ul>
                                <li class="flex mb-4">
                                    <div>
                                        <svg class="mr-3 w-8 h-8 text-purple-600" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="max-w-xs">
                                        <h3 class="font-bold font-heading text-white">Easy to Customize</h3>

                                    </div>
                                </li>
                                <li class="flex mb-4">
                                    <div>
                                        <svg class="mr-3 w-8 h-8 text-purple-600" fill="#9333ea" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 486.742 486.742">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M33 362.371v78.9c0 4.8 3.9 8.8 8.8 8.8h61c4.8.0 8.8-3.9 8.8-8.8v-138.8l-44.3 44.3C57.9 356.071 45.9 361.471 33 362.371z" />
                                                    <path
                                                        d="M142 301.471v139.8c0 4.8 3.9 8.8 8.8 8.8h61c4.8.0 8.8-3.9 8.8-8.8v-82.3c-13.9-.3-26.9-5.8-36.7-15.6L142 301.471z" />
                                                    <path
                                                        d="M251 350.271v91c0 4.8 3.9 8.8 8.8 8.8h61c4.8.0 8.8-3.9 8.8-8.8v-167.9l-69.9 69.9C257 345.971 254.1 348.271 251 350.271z" />
                                                    <path
                                                        d="M432.7 170.171l-72.7 72.7v198.4c0 4.8 3.9 8.8 8.8 8.8h61c4.8.0 8.8-3.9 8.8-8.8v-265.6c-2-1.7-3.5-3.2-4.6-4.2L432.7 170.171z" />
                                                    <path
                                                        d="M482.6 41.371c-2.9-3.1-7.3-4.7-12.9-4.7-.5.0-1.1.0-1.6.0-28.4 1.3-56.7 2.7-85.1 4-3.8.2-9 .4-13.1 4.5-1.3 1.3-2.3 2.8-3.1 4.6-4.2 9.1 1.7 15 4.5 17.8l7.1 7.2c4.9 5 9.9 10 14.9 14.9l-171.6 171.7-77.1-77.1c-4.6-4.6-10.8-7.2-17.4-7.2-6.6.0-12.7 2.6-17.3 7.2L7.2 286.871c-9.6 9.6-9.6 25.1.0 34.7l4.6 4.6c4.6 4.6 10.8 7.2 17.4 7.2s12.7-2.6 17.3-7.2l80.7-80.7 77.1 77.1c4.6 4.6 10.8 7.2 17.4 7.2 6.6.0 12.7-2.6 17.4-7.2l193.6-193.6 21.9 21.8c2.6 2.6 6.2 6.2 11.7 6.2 2.3.0 4.6-.6 7-1.9 1.6-.9 3-1.9 4.2-3.1 4.3-4.3 5.1-9.8 5.3-14.1.8-18.4 1.7-36.8 2.6-55.3l1.3-27.7C487 49.071 485.7 44.571 482.6 41.371z" />
                                                </g>
                                            </g>
                                            <g />
                                            <g />
                                            <g />
                                            <g />
                                            <g />
                                            <g />
                                            <g />
                                            <g />
                                            <g />
                                            <g />
                                            <g />
                                            <g />
                                            <g />
                                            <g />
                                            <g />
                                        </svg>
                                    </div>
                                    <div class="max-w-xs">
                                        <h3 class="font-bold font-heading text-white">SEO Ready</h3>

                                    </div>
                                </li>
                                <li class="flex">
                                    <div>

<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 50 50" class="mr-3 w-8 h-8 text-purple-600" fill="#9333ea" xml:space="preserve">
<g id="Layer_1">
	<path d="M48.882,22.585l-4.271-1.412c-0.176-0.909-0.415-1.804-0.714-2.673l2.999-3.363l-0.293-0.603
		c-0.507-1.044-1.095-2.059-1.746-3.017l-0.376-0.553l-4.391,0.914c-0.61-0.701-1.269-1.359-1.968-1.969l0.913-4.391l-0.553-0.376
		c-0.964-0.655-1.979-1.242-3.019-1.746l-0.602-0.291L31.5,6.104c-0.871-0.299-1.766-0.538-2.673-0.714l-1.412-4.271L26.748,1.07
		c-1.158-0.084-2.338-0.084-3.496,0l-0.667,0.048L21.173,5.39c-0.906,0.176-1.802,0.415-2.673,0.714l-3.363-2.999l-0.603,0.293
		c-1.044,0.507-2.059,1.095-3.017,1.746L10.965,5.52l0.914,4.391c-0.701,0.61-1.359,1.269-1.969,1.968L5.52,10.965l-0.376,0.553
		c-0.655,0.964-1.242,1.979-1.746,3.019l-0.291,0.602L6.104,18.5c-0.299,0.871-0.538,1.766-0.714,2.673l-4.271,1.412L1.07,23.252
		C1.028,23.831,1,24.411,1,25s0.028,1.169,0.07,1.748l0.048,0.667l4.271,1.412c0.176,0.909,0.415,1.804,0.714,2.673l-2.999,3.363
		l0.293,0.603c0.507,1.044,1.095,2.059,1.746,3.017l0.376,0.553l4.391-0.914c0.61,0.701,1.269,1.359,1.968,1.969l-0.913,4.391
		l0.553,0.376c0.964,0.655,1.979,1.242,3.019,1.746l0.602,0.291l3.362-2.997c0.871,0.299,1.766,0.538,2.673,0.714l1.412,4.271
		l0.667,0.048C23.831,48.972,24.411,49,25,49s1.169-0.028,1.748-0.07l0.667-0.048l1.412-4.271c0.909-0.176,1.804-0.415,2.673-0.714
		l3.363,2.999l0.603-0.293c1.044-0.507,2.059-1.095,3.017-1.746l0.553-0.376l-0.914-4.391c0.701-0.61,1.359-1.269,1.969-1.968
		l4.391,0.913l0.376-0.553c0.655-0.964,1.242-1.979,1.746-3.019l0.291-0.602L43.896,31.5c0.299-0.871,0.538-1.767,0.714-2.673
		l4.271-1.412l0.048-0.667C48.972,26.169,49,25.589,49,25s-0.028-1.169-0.07-1.748L48.882,22.585z M46.976,25.938l-4.135,1.367
		l-0.098,0.599c-0.191,1.183-0.503,2.348-0.925,3.463l-0.214,0.566l2.898,3.252c-0.287,0.55-0.601,1.091-0.936,1.617l-4.247-0.884
		l-0.384,0.47c-0.76,0.928-1.617,1.785-2.549,2.548l-0.47,0.384l0.885,4.247c-0.525,0.334-1.065,0.647-1.617,0.937l-3.252-2.9
		l-0.567,0.216c-1.11,0.421-2.275,0.731-3.462,0.924l-0.599,0.098l-1.367,4.135c-0.621,0.031-1.256,0.031-1.877,0l-1.367-4.135
		l-0.599-0.098c-1.184-0.191-2.349-0.503-3.462-0.925l-0.567-0.215l-3.252,2.899c-0.55-0.287-1.091-0.601-1.617-0.936l0.884-4.247
		l-0.47-0.384c-0.928-0.76-1.785-1.617-2.548-2.549l-0.384-0.47l-4.247,0.885c-0.334-0.525-0.647-1.065-0.937-1.617l2.9-3.252
		l-0.216-0.567c-0.421-1.11-0.731-2.275-0.924-3.462l-0.098-0.599l-4.135-1.367C3.009,25.628,3,25.315,3,25s0.009-0.628,0.024-0.938
		l4.135-1.367l0.098-0.599c0.191-1.184,0.503-2.349,0.925-3.462l0.215-0.567l-2.899-3.252c0.287-0.55,0.601-1.091,0.936-1.617
		l4.247,0.884l0.384-0.47c0.76-0.928,1.617-1.785,2.549-2.548l0.47-0.384l-0.885-4.247c0.525-0.334,1.065-0.647,1.617-0.937
		l3.252,2.899l0.566-0.214c1.115-0.422,2.28-0.733,3.463-0.925l0.599-0.098l1.367-4.135c0.621-0.031,1.256-0.031,1.877,0
		l1.367,4.135l0.599,0.098c1.184,0.191,2.349,0.503,3.462,0.925l0.567,0.215l3.252-2.899c0.55,0.287,1.091,0.601,1.617,0.936
		l-0.884,4.247l0.47,0.384c0.928,0.76,1.785,1.617,2.548,2.549l0.384,0.47l4.247-0.885c0.334,0.525,0.647,1.065,0.937,1.617
		l-2.9,3.252l0.216,0.567c0.421,1.11,0.731,2.275,0.924,3.462l0.098,0.599l4.135,1.367C46.991,24.372,47,24.685,47,25
		S46.991,25.628,46.976,25.938z"/>
	<path d="M24.709,11.004c-5.189,0.147-9.542,4.488-9.703,9.677c-0.096,3.021,1.162,5.89,3.448,7.869C20.072,29.95,21,31.911,21,34v1
		v4h3v2h2v-2h3v-4.068v-1c0-2,0.947-3.979,2.599-5.428C33.761,26.606,35,23.872,35,21c0-2.726-1.076-5.272-3.031-7.172
		C30.015,11.929,27.429,10.955,24.709,11.004z M27,37h-4v-2h4V37z M30.28,27c-1.82,1.598-2.963,3.726-3.223,6H26v-9.586l2.707-2.707
		l-1.414-1.414L25,21.586l-2.293-2.293l-1.414,1.414L24,23.414V33h-1.05c-0.245-2.261-1.376-4.395-3.188-5.962
		c-1.829-1.584-2.834-3.878-2.758-6.295c0.129-4.15,3.61-7.622,7.761-7.739c2.188-0.075,4.246,0.738,5.81,2.258
		C32.139,16.782,33,18.819,33,21C33,23.296,32.009,25.483,30.28,27z"/>
</g>
<g>
</g>
</svg>

                                    </div>
                                    <div class="max-w-xs">
                                        <h3 class="font-bold font-heading text-white">We use latest technologies
                                        </h3>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center w-full lg:w-1/2 px-4">
                        <div class="mb-6 w-full lg:w-1/2 px-3">
                            <img class="mb-6 w-full h-64 object-contain rounded-3xl " src="img/somatelec.png" alt="" lazy="loading">
                            <img class="w-full h-64 object-contain rounded-3xl " src="img/mhl.png" alt="" lazy="loading">
                        </div>
                        <div class="w-full lg:w-1/2 px-3">
                            <img class="w-full h-64 object-contain rounded-3xl " src="img/mhlweb.png" alt="" lazy="loading">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="skewed-top-left skewed-bottom-right">

        <div class="py-20 bg-gray-900 radius-for-skewed">
            <div class="container mx-auto px-4">
                <div class="max-w-xl mx-auto text-center">
                    <a class="mb-6 inline-block text-white text-3xl font-bold leading-none" href="#">
                        <img class="h-12" src="img/B-03.png" alt="" width="auto" lazy="loading">
                    </a>
                    <h2 class="mb-4 text-4xl lg:text-5xl text-white font-bold font-heading">Check our website plans</h2>

                    <a class="inline-block py-2 px-6 bg-purple-600 hover:bg-purple-700 text-white font-bold leading-loose rounded-xl transition duration-200"
                        href="{{ route('web') }}">Plans</a>
                </div>
            </div>
        </div>

    </section>
    <section>

        <div class="py-20 bg-gray-900 radius-for-skewed">
            <div class="container mx-auto px-4">
                <div class="mb-16 max-w-xl mx-auto text-center">
                    <h2 class="mb-6 text-white text-5xl font-bold font-heading">Frequently Asked Questions</h2>

                </div>

                <div class="max-w-3xl mx-auto">
                    <ul class="space-y-4 lg:space-y-6" x-data="{ active: 1 }">
                        <li class="p-6 bg-gray-800 rounded shadow" x-data="{
                                    id: 1,
                                    get expanded() {
                                        return this.active === this.id
                                    },
                                    set expanded(value) {
                                        this.active = value ? this.id : null
                                    },
                                }">
                            <button
                                class="w-full flex text-white justify-between items-center text-left font-bold font-heading hover:text-purple-600"
                                @click="expanded = !expanded" :aria-expanded="expanded">
                                <span class="text-xl">What is SEO ? </span>
                                <svg class="w-4 h-4 text-purple-600" x-show="expanded" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                                <svg class="w-4 h-4 text-purple-600" x-show="!expanded" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                </svg>
                            </button>
                            <p class=" mt-4 text-white font-normal leading-loose" x-show="expanded" x-collapse
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform scale-y-50"
                                x-transition:enter-end="opacity-100 transform scale-y-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-end="opacity-0 transform scale-y-50">Search engine optimization is the process of improving the quality and quantity of website traffic to a website or a web page from search engines. It helps your website to appear in first pages of google search.</p>
                        </li>
                        <li class="p-6 bg-gray-800 rounded shadow" x-data="{
                                    id: 2,
                                    get expanded() {
                                        return this.active === this.id
                                    },
                                    set expanded(value) {
                                        this.active = value ? this.id : null
                                    },
                                }">
                            <button
                                class="w-full flex text-white justify-between items-center text-left font-bold font-heading hover:text-purple-600"
                                @click="expanded = !expanded" :aria-expanded="expanded">
                                <span class="text-xl">Why is SEO important?</span>
                                <svg class="w-4 h-4 text-purple-600" x-show="expanded" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                                <svg class="w-4 h-4 text-purple-600" x-show="!expanded" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                </svg>
                            </button>
                            <p class=" mt-4 text-white font-normal leading-loose" x-show="expanded" x-collapse
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform scale-y-50"
                                x-transition:enter-end="opacity-100 transform scale-y-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-end="opacity-0 transform scale-y-50">If you own a business or manage a website of any kind, you likely want target audiences to visit it. SEO is important because it’s specifically aimed at helping do just this; improve the online presence and traffic for a website.

                                SEO helps you show up at the most important stage of your customer’s journey, when they are actively looking for products and services you offer, or resources and information for which you have expert insights.</p>
                        </li>
                        <li class="p-6 bg-gray-800 rounded shadow" x-data="{
                                    id: 3,
                                    get expanded() {
                                        return this.active === this.id
                                    },
                                    set expanded(value) {
                                        this.active = value ? this.id : null
                                    },
                                }">
                            <button
                                class="w-full flex text-white justify-between items-center text-left font-bold font-heading hover:text-purple-600"
                                @click="expanded = !expanded" :aria-expanded="expanded">
                                <span class="text-xl">How do I maintain the website? Can I update it myself?</span>
                                <svg class="w-4 h-4 text-purple-600" x-show="expanded" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                                <svg class="w-4 h-4 text-purple-600" x-show="!expanded" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                </svg>
                            </button>
                            <p class=" mt-4 text-white font-normal leading-loose" x-show="expanded" x-collapse
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform scale-y-50"
                                x-transition:enter-end="opacity-100 transform scale-y-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-end="opacity-0 transform scale-y-50">We offer maintenance on your website after it goes live. We can also train you to make some changes on your site if you prefer to maintain and update it yourself.</p>
                        </li>
                        <li class="p-6 bg-gray-800 rounded shadow" x-data="{
                                    id: 4,
                                    get expanded() {
                                        return this.active === this.id
                                    },
                                    set expanded(value) {
                                        this.active = value ? this.id : null
                                    },
                                }">
                            <button
                                class="w-full flex text-white justify-between items-center text-left font-bold font-heading hover:text-purple-600"
                                @click="expanded = !expanded" :aria-expanded="expanded">
                                <span class="text-xl">What design services does Blackburn provide?

                                </span>
                                <svg class="w-4 h-4 text-purple-600" x-show="expanded" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                                <svg class="w-4 h-4 text-purple-600" x-show="!expanded" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                </svg>
                            </button>
                            <p class=" mt-4 text-white font-normal leading-loose" x-show="expanded" x-collapse
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform scale-y-50"
                                x-transition:enter-end="opacity-100 transform scale-y-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-end="opacity-0 transform scale-y-50">We offer creative services that will fit any of your needs. This includes digital, print and also original logos and complete web design.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <section>

        <div class="py-20 bg-gray-900 radius-for-skewed">
          <div class="container px-4 mx-auto">
            <div class="mb-16 flex flex-wrap justify-center md:justify-between items-center">
              <div class="text-center lg:text-left">
                <h2 class="text-4xl lg:text-5xl font-bold font-heading text-white">Instagram Posts</h2>
              </div>
              <a class="hidden md:inline-block py-2 px-6 rounded-l-xl rounded-t-xl bg-purple-600 hover:bg-purple-700 text-gray-50 font-bold leading-loose transition duration-200" href="https://www.instagram.com/blackburn_designs" target="_blank">View More</a>
            </div>
            <div class="flex flex-wrap -mx-4 mb-4">
                @foreach (array_slice($total,0,8) as $w)
                    
                <div class="w-full md:w-1/2 lg:w-1/4 mb-8 px-4">
                    <a href="{{$w->permalink}}" target="_blank"> 

                    <div class="relative mx-auto h-64 w-full rounded-xl">
                        <img class="relative h-full w-full rounded-xl object-contain"
                            src="{{ $w->media_url }}" alt="">

                        <div class="opacity-0  hover:opacity-100">
                            <div class="absolute inset-0  bg-gray-900 opacity-80 rounded-xl"></div>

                            <div class=" absolute inset-0 flex items-center justify-center">
                                <p class="text-white text-sm px-8">{{ Str::limit($w->caption,40) }}</p>

                            </div>
                        </div>
                    </div>
</a>

                </div>
            @endforeach

            </div>
          </div>
        </div>

      </section>

@stop
