{{-- {{-- @extends('errors::minimal') --}}

{{-- @section('title', __('Not Found')) --}}
{{-- @section('code', '404') --}}
{{-- @section('message', __('Not Found')) --}}
@extends('layouts.app')
@section('title', __('Not Found'))
@section('content')
<section>

    <div class="py-20 bg-gray-900 radius-for-skewed">
      <div class="container mx-auto px-4">
        <div class="text-center">
          <span class="mb-6 text-4xl text-purple-600 font-bold">Whoops!</span>
          <h3 class="mb-2 text-white text-4xl font-bold">Something went wrong!</h3>
          <p class="mb-8 text-gray-500">Sorry, but we are unable to open this page</p>
          <div><a class="w-full lg:w-auto mb-2 lg:mb-0 lg:mr-4 inline-block py-2 px-6 rounded-xl font-bold leading-loose text-white bg-purple-600 hover:bg-purple-700" href="{{ route('welcome') }}">Go back to Homepage</a></div>
        </div>
      </div>
    </div>

  </section>

@endsection
