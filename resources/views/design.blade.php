@extends('layouts.app')

@section('title', 'Design')

@section('content')
<section>

    <div class="py-20 bg-gray-900 radius-for-skewed">
      <div class="container mx-auto px-4">
        <div class="mb-16 w-full flex flex-wrap items-center">
          <div class="w-full lg:w-1/2">
            <span class="text-purple-600 font-bold">Design plans</span>
            <h2 class="mb-2 text-4xl lg:text-5xl font-bold font-heading text-white">Our options</h2>
          </div>
          {{-- <div class="w-full lg:w-1/2">
                <p class="text-gray-500 leading-loose text-xs mt-5">
                    We can create just a logo for

                </p>
        </div> --}}
        </div>
        <div class="flex flex-wrap">
          <div class="mb-8 w-full p-8 flex flex-wrap items-center text-white bg-gray-800 rounded-xl shadow">
            <div class="w-full lg:w-1/5 px-3 self-start">
              <h3 class="mb-4 text-2xl font-bold font-heading">Showcase*</h3>
            </div>
            <div class="w-full lg:w-2/5 px-3">
              <ul class="mb-4 text-gray-500">
                <li class="mb-4 flex">
                  <svg class="mr-2 w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
                  <span>Custom Design</span>
                </li>
                <li class="mb-4 flex">
                  <svg class="mr-2 w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
                  <span>4 Pages</span>
                </li>
                <li class="flex">

                </li>
              </ul>
            </div>
            <div class="w-full lg:w-1/5 px-3 lg:text-center">
            </div>
            <div class="w-full lg:w-1/5 px-3"><a class="inline-block mt-4 lg:mt-0 py-2 px-6 rounded-xl bg-purple-600 hover:bg-purple-700 text-white font-bold leading-loose transition duration-200" href="{{ route('contact') }}">Message Us</a></div>
          </div>
          <div class="mb-8 w-full p-8 flex flex-wrap items-center text-white bg-gray-800 rounded-xl shadow">
            <div class="w-full lg:w-1/5 px-3 self-start">
              <h3 class="mb-4 text-2xl font-bold font-heading">Showcase Advanced</h3>
            </div>
            <div class="w-full lg:w-2/5 px-3">
              <ul class="mb-4 text-gray-500">
                <li class="mb-4 flex">
                  <svg class="mr-2 w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
                  <span>Custom Design</span>
                </li>
                <li class="mb-4 flex">
                  <svg class="mr-2 w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
                  <span>5 Pages</span>
                </li>
                <li class="flex">
                  <svg class="mr-2 w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
                  <span>Basic CRUD* Admin Panel</span>
                </li>
              </ul>
            </div>
            <div class="w-full lg:w-1/5 px-3 lg:text-center">
            </div>
            <div class="w-full lg:w-1/5 px-3"><a class="inline-block mt-4 lg:mt-0 py-2 px-6 rounded-xl bg-purple-600 hover:bg-purple-700 text-white font-bold leading-loose transition duration-200" href="{{ route('contact') }}">Message Us</a></div>
          </div>
          <div class="w-full p-8 flex flex-wrap items-center text-white bg-gray-800 rounded-xl shadow">
            <div class="w-full lg:w-1/5 px-3 self-start">
              <h3 class="mb-4 text-2xl font-bold font-heading">E-commerce</h3>
            </div>
            <div class="w-full lg:w-2/5 px-3">
              <ul class="mb-4 text-gray-500">
                <li class="mb-4 flex">
                  <svg class="mr-2 w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
                  <span>Custom Design</span>
                </li>
                <li class="mb-4 flex">
                  <svg class="mr-2 w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
                  <span>Up To 10 Pages</span>
                </li>
                <li class="flex">
                  <svg class="mr-2 w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
                  <span>Advanced Admin Panel with Google Analytics & Website Statistics</span>
                </li>
              </ul>
            </div>
            <div class="w-full lg:w-1/5 px-3 lg:text-center">
            </div>
            <div class="w-full lg:w-1/5 px-3"><a class="inline-block mt-4 lg:mt-0 py-2 px-6 rounded-xl bg-purple-600 hover:bg-purple-700 text-white font-bold leading-loose transition duration-200" href="{{ route('contact') }}">Message Us</a></div>
          </div>
        </div>
        <p class="text-gray-500 leading-loose text-xs mt-5">Showcase* : You cannot edit or add new content to the website. <br>CRUD*: Create, Read, Update, Delete is what allows you to manage your content on the website.</p>

      </div>
    </div>

  </section>
@endsection
