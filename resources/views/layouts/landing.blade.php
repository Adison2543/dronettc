<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta property="og:title" content="@yield('title', 'DroneTTC')" />
        <meta property="og:type"               content="article" />
        <meta property="og:image"              content="@yield('cover', asset('img/logodronettc.png'))" />
        <meta property="og:description"        content="@yield('desc', 'Iddrives')" />
        <meta property="og:url" content="{{ url()->current() }}" />

        <title>{{ config('app.name', 'DroneTTC') }}</title>

        <!-- icon  -->
        <link rel="icon" href="img/dronecamera.png" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />

        {{-- jQuery  --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        {{-- owl carousel --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

        {{-- aos animations --}}
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        {{-- Sweet alert --}}
        <script src="https://fastly.jsdelivr.net/npm/sweetalert2@11"></script>

        <link
            rel="stylesheet"
            href="https://fastly.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />

        <script src="https://cdn.websitepolicies.io/lib/cconsent/cconsent.min.js" defer></script>
        <script>window.addEventListener("load",function(){window.wpcb.init({"colors":{"popup":{"background":"#ffe8ff","text":"#000000","border":"#9f5ec2"},"button":{"background":"#9f5ec2","text":"#ffffff"}},"position":"bottom","border":"thin","corners":"normal"})});</script>

        @livewireScripts

        <!-- Scripts -->
        @vite([
            // CSS
            'resources/css/app.css',
            'resources/css/pavo/fontawesome-all.css',
            'resources/css/pavo/magnific-popup.css',
            'resources/css/pavo/styles.css',
            'resources/css/pavo/swiper.css',
            // JS
            'resources/js/app.js',
            'resources/js/pavo/scripts.js',
        ])
    </head>
    <body data-spy="scroll" data-target=".fixed-top">

        <livewire:layout.land_nav />

        {{ $slot }}

        <footer class="py-6 bg-gray-800 text-gray-50">
            <div class="container px-6 mx-auto space-y-6 divide-y divide-gray-400 md:space-y-12 divide-opacity-50">
                <div class="grid grid-cols-12">
                    <div class="pb-6 col-span-full md:pb-0 md:col-span-6">
                        <a rel="noopener noreferrer" target="_BLANK" href="https://iddrives.co.th/web/" class="flex flex-col items-center gap-2 justify-center space-x-3 md:justify-start">
                            <img src="/img/logoiddrives.png" width="70" alt="">
                            <span class="self-center text-2xl font-semibold">{{ __('messages.iddrives') }}</span>
                            <p class=" md:px-8 lg:px-24">{{ __('messages.addr_id') }}</p>
                            {{-- <p>โทรศัพท์ : 043-228 899</p>
                            <p>Email : idofficer@iddrives.co.th</p> --}}
                        </a>
                    </div>

                    <div class="col-span-12 sm:col-span-6 text-center md:text-left md:col-span-3">
                        <p class="pb-1 text-xl font-medium text-pink-500 mb-4" >{{ __('messages.cts') }}</p>
                        <ul>
                            <li>
                                <div class="flex gap-4 mb-2">
                                    <i class="fa fa-phone-square text-3xl text-pink-500" aria-hidden="true"></i>
                                    <p class="text-white">{{ __('messages.phone_id') }}</p>
                                </div>
                            </li>
                            <li>
                                <a rel="noopener noreferrer" target="_BLANK" href="https://www.facebook.com/dronettc" title="Facebook" >
                                    <div class="flex gap-4 mb-2">
                                        <i class="fa-brands fa-square-facebook text-3xl text-pink-500"></i>
                                        <p class="text-white">Dronettc</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="noopener noreferrer" target="_BLANK" href="https://lin.ee/UDqzxmt" title="Line">
                                    <div class="flex gap-4 mb-2">
                                        <i class="fa-brands fa-line text-3xl text-pink-500"></i>
                                        <p class="text-white">@droneTTC</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="noopener noreferrer" target="_BLANK" href="mailto:Dronettc@iddrives.co.th" title="Email">
                                    <div class="flex gap-4 mb-2">
                                        <i class="fa-solid fa-envelope text-3xl text-pink-500"></i>
                                        <p class="text-white " style="overflow-wrap: anywhere">Dronettc@iddrives.co.th</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-span-12 sm:col-span-6 text-center md:text-left md:col-span-3">
                        <p class="pb-1 text-xl font-medium text-pink-500 mb-4" >{{ __('messages.map') }}</p>
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.0135083544146!2d102.85578767601251!3d16.424140329837293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228bea5279c7d5%3A0xd098a61935e43d5f!2zRHJvbmVUVEMgLSDguYDguKPguLXguKLguJnguJrguLTguJnguYLguJTguKPguJnguJ7guKPguYnguK3guKHguILguLbguYnguJnguJfguLDguYDguJrguLXguKLguJnguYLguJTguKPguJk!5e0!3m2!1sth!2sth!4v1702715454859!5m2!1sth!2sth"
                                {{-- width="350"
                                height="200" --}}
                                class="w-full h-full"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="grid justify-center pt-6 lg:justify-between">
                    <div class="flex flex-col self-center text-sm text-center md:block lg:col-start-1 md:space-x-6">
                        <span>©2024 {{ __('messages.iddrives') }}</span>
                        {{-- <a rel="noopener noreferrer" href="#">
                            <span>Privacy policy</span>
                        </a>
                        <a rel="noopener noreferrer" href="#">
                            <span>Terms of service</span>
                        </a> --}}
                    </div>

                    {{-- <div>
                        <a title="Visitor counter"><img src="https://counter7.optistats.ovh/private/freecounterstat.php?c=q1brx8flcc666yxpe6ypatgjulw1znnu" border="0" title="Visitor counter" alt="Visitor counter"></a>
                    </div> --}}

                    <div class="flex justify-center pt-4 space-x-4 lg:pt-0 lg:col-end-13">
                        <a rel="noopener noreferrer" target="_BLANK" href="https://www.facebook.com/dronettc" title="Facebook" class="flex items-center justify-center w-10 h-10 rounded-full bg-violet-400 text-gray-900">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a rel="noopener noreferrer" target="_BLANK" href="https://lin.ee/UDqzxmt" title="Line" class="flex items-center justify-center w-10 h-10 rounded-full bg-violet-400 text-gray-900">
                            <i class="fa-brands fa-line"></i>
                        </a>
                        <a rel="noopener noreferrer" target="_BLANK" href="mailto:Dronettc@iddrives.co.th" title="Email" class="flex items-center justify-center w-10 h-10 rounded-full bg-violet-400 text-gray-900">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>



        <script src="https://kit.fontawesome.com/872d5aa762.js" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        {{-- Load Other Dependencies After jQuery --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
        {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script> --}}

        {{-- aos animations --}}
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
        <script src="https://fastly.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
        <script>
          AOS.init();
        </script>
    </body>
</html>
