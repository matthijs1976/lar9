<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ArcheoSupport @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="antialiased">
    {{-- <div class="relative flex items-top justify-center h-12 bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
@else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                            @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
    @endif
                    @endauth
                </div>
            @endif
            </div> --}}
     <!-- start hero -->
     @include('inc.heroindex')
     <!-- end hero -->    
    <!-- start nav -->
    @include('inc.nav')
    <!-- end nav -->
    <!-- start of text section -->
    @yield('content')
    <!-- end of text section2 -->
    <!-- start of parallax section -->
    <div class="h-screen image1 bg-fixed bg-center bg-no-repeat bg-cover">
        <div class="min-h-screen flex items-center justify-center">
            <!-- Card or contents that should be centered vertically -->
            <div class="max-w-7xl px-10 py-12 ">
                <h2 class="text-blue-700 text-center text-2xl md:text-6xl font-bold leading-snug">ArcheoSupport</h2>
                <div class="mt-2 flex items-center justify-center max-w-6xl"><img
                        src="/img/vondsten.png">
                </div>
            </div>
        </div>
    </div>
    <!-- end of paralax section -->
    <!-- start of dienstenblok section -->
    @include('inc.dienstenblok')
    <!-- end of dienstenblok section -->
    <!-- start of publicaties section -->
    @include('inc.publicatiesblok')
    <!-- end of publicaties section -->
    <!-- start of pers-publicaties section -->
    @include('inc.pers-publicatiesblok')
    <!-- end of pers-stories section -->    
    <!-- start of foto section -->
    <div class=""><img src="https://www.archeosupport.nl/img/Loppersum1.jpg"></div>
    <!-- end of foto section -->
    <!-- start of contact section -->
    @include('inc.contactblok')
    <!-- end of contact section -->
    <!-- start of footer section -->
    <footer>
        <div class="p-10 mt-8 bg-blue-700 rounded-t-xl text-white">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">
                    <div class="mb-5">
                        <h4 class="text-2xl pb-4">ArcheoSupport bv</h4>
                        <p class="text-blue-200">
                        Straat<br>
                        postcode<br>
                        Groningen<br>
                        Nederland<br>
                        <ion-icon name="call" class="text-xl"></ion-icon>
                        <span>06-123 456 78</span><br>
                        <ion-icon name="mail" class="text-blue-200 text-xl"></ion-icon>
                        <span>At@at.com</span><br>
                        </p>
                    </div>
                    <div class="mb-5">
                        <h4 class="text-2xl pb-4">Diensten</h4>
                        <ul class="text-blue-200">
                            <li class="pb-4"><ion-icon name="chevron-forward-outline"></ion-icon><a href="#" class="hover:text-white">habitasse platea</a></li>
                            <li class="pb-4"><ion-icon name="chevron-forward-outline"></ion-icon><a href="#" class="hover:text-white">habitasse platea</a></li>
                            <li class="pb-4"><ion-icon name="chevron-forward-outline"></ion-icon><a href="#" class="hover:text-white">habitasse platea</a></li>
                            <li class="pb-4"><ion-icon name="chevron-forward-outline"></ion-icon><a href="#" class="hover:text-white">habitasse platea</a></li>
                            <li class="pb-4"><ion-icon name="chevron-forward-outline"></ion-icon><a href="#" class="hover:text-white">habitasse platea</a></li>
                            <li class="pb-4"><ion-icon name="chevron-forward-outline"></ion-icon><a href="#" class="hover:text-white">habitasse platea</a></li>
                        </ul>
                    </div>
                    <div class="mb-5">
                        <h4 class="text-2xl pb-4">Publicaties</h4>
                        <ul class="text-blue-200">
                            <li class="pb-4"><ion-icon name="chevron-forward-outline"></ion-icon><a href="#" class="hover:text-white">habitasse platea</a></li>
                            <li class="pb-4"><ion-icon name="chevron-forward-outline"></ion-icon><a href="#" class="hover:text-white">habitasse platea</a></li>
                            <li class="pb-4"><ion-icon name="chevron-forward-outline"></ion-icon><a href="#" class="hover:text-white">habitasse platea</a></li>
                            <li class="pb-4"><ion-icon name="chevron-forward-outline"></ion-icon><a href="#" class="hover:text-white">habitasse platea</a></li>
                            <li class="pb-4"><ion-icon name="chevron-forward-outline"></ion-icon><a href="#" class="hover:text-white">habitasse platea</a></li>
                            <li class="pb-4"><ion-icon name="chevron-forward-outline"></ion-icon><a href="#" class="hover:text-white">habitasse platea</a></li>
                        </ul>
                    </div>
                    <div class="mb-5">
                        <h4 class="text-2xl pb-4">Links</h4>
                        <ul class="text-blue-200">
                            <li class="pb-4"><ion-icon name="chevron-forward-outline"></ion-icon><a href="#" class="hover:text-white">habitasse platea</a></li>
                            <li class="pb-4"><ion-icon name="chevron-forward-outline"></ion-icon><a href="#" class="hover:text-white">habitasse platea</a></li>
                            <li class="pb-4"><ion-icon name="chevron-forward-outline"></ion-icon><a href="#" class="hover:text-white">habitasse platea</a></li>
                            <li class="pb-4"><ion-icon name="chevron-forward-outline"></ion-icon><a href="#" class="hover:text-white">habitasse platea</a></li>
                            <li class="pb-4"><ion-icon name="chevron-forward-outline"></ion-icon><a href="#" class="hover:text-white">habitasse platea</a></li>
                            <li class="pb-4"><ion-icon name="chevron-forward-outline"></ion-icon><a href="#" class="hover:text-white">habitasse platea</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer section -->
    </div>
    </div>
</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="{{ url('js/app.js') }}"></script>
