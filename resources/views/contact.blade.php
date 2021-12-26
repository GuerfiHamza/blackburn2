@extends('layouts.app')

@section('title','Contact')

@section('content')
<section>

    <div class="py-20 bg-gray-900 radius-for-skewed">
      <div class="container mx-auto px-4">
        <div class="mb-12 text-center">
          <h2 class="text-4xl lg:text-5xl font-bold font-heading text-white">Contact</h2>
          <p class="text-gray-500 leading-loose">Got any question? Let&rsquo;s talk about it.</p>
        </div>
        <div class="flex flex-wrap">
          <div class="w-full lg:w-1/2 mb-16 lg:mb-0">
            <div class="flex flex-wrap">

              <div class="mb-12 w-full md:w-1/2">
                <h3 class="mb-2 text-3xl lg:text-4xl font-bold text-white">Contacts</h3>
                <p class="text-gray-400"> <a href="mailto:contact@blackburn-co.com">contact@blackburn-co.com</a> </p>
                <p class="text-gray-400"><a href="tel:+213549904201">+213 549 90 42 01</a></p>
              </div>
              <div class="mb-12 w-full md:w-1/2 lg:w-1/2">
                <h3 class="mb-2 text-3xl lg:text-4xl font-bold text-white">Socials</h3>
                <div class="flex">
                  <a class="mr-3" href="https://www.facebook.com/Balckburn.design" target="_blank">
                    <img src="atis-assets/social/facebook-purple.svg" alt="facebook">
                  </a>

                  <a href="https://www.instagram.com/blackburn_designs/" target="_blank">
                    <img src="atis-assets/social/instagram-purple.svg" alt="instagram">
                  </a>
                </div>
              </div>

            </div>
          </div>
          <div class="w-full lg:w-1/2">
            <div class="max-w-md lg:mx-auto">
              <form action="{{ route('mailContactForm') }}" method="post">
                @csrf
                @if ($errors->any())
                <div class="bg-gray-800 text-red-500 p-4 rounded-lg">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
                <div class="mb-4">
                    <input class="w-full p-4 text-xs font-semibold leading-none bg-white rounded outline-none" type="text" placeholder="Name" name="name">
                  </div>
                <div class="mb-4">
                  <input class="w-full p-4 text-xs font-semibold leading-none bg-white rounded outline-none" type="text" placeholder="Subject" name="subject">
                </div>
                <div class="mb-4">
                  <input class="w-full p-4 text-xs font-semibold leading-none bg-white rounded outline-none" type="email" placeholder="name@example.com" name="email">
                </div>
                <div class="mb-4"><textarea class="w-full h-24 p-4 text-xs font-semibold leading-none resize-none bg-white rounded outline-none" type="text" name="message" placeholder="Message..."></textarea></div>
                <div class="mb-4 flex flex-wrap">
                    <div class="captcha ">
                        <span>{!! captcha_img() !!}</span>

                    </div>
                    <div style="margin-left: 10px;margin-top:10px">
                        <button type="button" id="reload" class="text-white">
                            ↻
                        </button>
                    </div>
                    <input class="w-full p-4 text-xs font-semibold leading-none bg-white rounded outline-none" type="text" placeholder="Captacha" name="captcha" style="margin-top:5px">
                  </div>
                <button class="inline-block py-2 px-6 rounded-xl bg-purple-600 hover:bg-purple-700 text-gray-50 font-bold leading-loose float-right" type="submit">Submit</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
@endsection
