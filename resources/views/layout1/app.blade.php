<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
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
    <div class="w-full relative">
        <div class="w-full h-full flex flex-col absolute top-0 left-0 justify-center items-center text-white">
            <div class="hidden md:block  md:w-36"><img src="/img/logo.png"></div>
            <div>
                <h1 class="text-2xl md:text-6xl text-center">ArcheoSupport bv</h1>
                <h2 class="hidden md:block text-3xl text-center font-bold">Alles voor uw archeologisch onderzoek!</h2>
                <div class="flex justify-center md:pt-2">
                    <a href="#services">
                        <button class="bg-blue-700 hover:bg-blue-600 text-white font-bold pt-1 pb-2 px-4 rounded-full">
                            Diensten
                        </button></a>
                </div>
            </div>
        </div>
        <img src="/img/cover.jpg" class="mx-auto">
    </div>
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
    <!-- start of services section -->
    @include('inc.diensten')
    <!-- end of services section -->
    <!-- start of stories section -->
    <section id="stories" class="py-16 bg-blue-700 ">
        <div class="container mx-auto px-4 text-white ">
            <h2 class="text-center text-3xl font-bold mb-10">Publicaties</h2>
            <div class="grid gap-4 md:grid-cols-2">
                <div class=" px-4 py-2 text-center leading-loose shadow-xl border-blue-500 border-2">
                    <h4 class="font-bold text-4xl md:text-5xl">ArcheoSupport</h4>
                    <div class="grid pt-8 md:grid-cols-2">
                        <div class="w-4/5 mx-auto text-center bg-blue-700 rounded hover:bg-blue-500 transition-all">
                            <a href="#" class="">
                                <h4 class="font-semibold border-2">Publicaties</h4>
                            </a>
                        </div>
                        <div class="w-4/5 mx-auto text-center bg-blue-700 rounded hover:bg-blue-500 transition-all">
                            <a href="#" class="">
                                <h4 class="font-semibold border-2">Rapporten</h4>
                            </a>
                        </div>
                    </div>
                    <div class="w-2/5 mx-auto text-center bg-blue-700 rounded hover:bg-blue-500 transition-all">
                        <a href="#" class="">
                            <h4 class="font-semibold mt-4 border-2">Bijdragen</h4>
                        </a>
                    </div>
                </div>
                <div class=" px-4 py-2 text-center leading-loose shadow-xl border-blue-500 border-2">
                    <h4 class="font-bold text-5xl">Arc</h4>
                    <div class="grid pt-8 md:grid-cols-2">
                        <div class="w-4/5 mx-auto text-center bg-blue-700 rounded hover:bg-blue-500 transition-all">
                            <a href="#" class="">
                                <h4 class="font-semibold border-2">Publicaties</h4>
                            </a>
                        </div>
                        <div class="w-4/5 mx-auto text-center bg-blue-700 rounded hover:bg-blue-500 transition-all">
                            <a href="#" class="">
                                <h4 class="font-semibold border-2">Rapporten</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of stories section -->
    <!-- start of pers-stories section -->
    <section id="pers-stories" class="py-16 bg-blue-700 rounded-b-lg">
        <div class="container mx-auto px-4 text-white ">
            <h2 class="text-center text-3xl font-bold mb-10">Persoonlijke Publicaties</h2>
            <div class="grid gap-4 md:grid-cols-2">
                <div class=" px-4 py-2 text-center leading-loose shadow-xl border-blue-500 border-2">
                    <h4 class="font-bold">P-Storyuspendisse finibus1</h4>
                    <div class="w-1/3 mx-auto text-center bg-blue-700 rounded hover:bg-blue-500 transition-all">
                        <a href="#" class="">
                            <h4 class="font-semibold ">habitasse platea1-1</h4>
                        </a>
                    </div>
                </div>
                <div class=" px-4 py-2 text-center leading-loose shadow-xl border-blue-500 border-2">
                    <h4 class="font-bold">P-Storyuspendisse finibus1</h4>
                    <div class="w-1/3 mx-auto text-center bg-blue-700 rounded hover:bg-blue-500 transition-all">
                        <a href="#" class="">
                            <h4 class="font-semibold ">habitasse platea1-1</h4>
                        </a>
                    </div>
                </div>
                <div class=" px-4 py-2 text-center leading-loose shadow-xl border-blue-500 border-2">
                    <h4 class="font-bold">P-Storyuspendisse finibus1</h4>
                    <div class="w-1/3 mx-auto text-center bg-blue-700 rounded hover:bg-blue-500 transition-all">
                        <a href="#" class="">
                            <h4 class="font-semibold ">habitasse platea1-1</h4>
                        </a>
                    </div>
                </div>
                <div class=" px-4 py-2 text-center leading-loose shadow-xl border-blue-500 border-2">
                    <h4 class="font-bold">P-Storyuspendisse finibus1</h4>
                    <div class="w-1/3 mx-auto text-center bg-blue-700 rounded hover:bg-blue-500 transition-all">
                        <a href="#" class="">
                            <h4 class="font-semibold ">habitasse platea1-1</h4>
                        </a>
                    </div>
                </div>
                <div class=" px-4 py-2 text-center leading-loose shadow-xl border-blue-500 border-2">
                    <h4 class="font-bold">P-Storyuspendisse finibus1</h4>
                    <div class="w-1/3 mx-auto text-center bg-blue-700 rounded hover:bg-blue-500 transition-all">
                        <a href="#" class="">
                            <h4 class="font-semibold ">habitasse platea1-1</h4>
                        </a>
                    </div>
                </div>
                <div class=" px-4 py-2 text-center leading-loose shadow-xl border-blue-500 border-2">
                    <h4 class="font-bold">P-Storyuspendisse finibus1</h4>
                    <div class="w-1/3 mx-auto text-center bg-blue-700 rounded hover:bg-blue-500 transition-all">
                        <a href="#" class="">
                            <h4 class="font-semibold ">habitasse platea1-1</h4>
                        </a>
                    </div>
                </div>
                <div class=" px-4 py-2 text-center leading-loose shadow-xl border-blue-500 border-2">
                    <h4 class="font-bold">P-Storyuspendisse finibus1</h4>
                    <div class="w-1/3 mx-auto text-center bg-blue-700 rounded hover:bg-blue-500 transition-all">
                        <a href="#" class="">
                            <h4 class="font-semibold ">habitasse platea1-1</h4>
                        </a>
                    </div>
                </div>
                <div class=" px-4 py-2 text-center leading-loose shadow-xl border-blue-500 border-2">
                    <h4 class="font-bold">P-Storyuspendisse finibus1</h4>
                    <div class="w-1/3 mx-auto text-center bg-blue-700 rounded hover:bg-blue-500 transition-all">
                        <a href="#" class="">
                            <h4 class="font-semibold ">habitasse platea1-1</h4>
                        </a>
                    </div>
                </div>
                <div class=" px-4 py-2 text-center leading-loose shadow-xl border-blue-500 border-2">
                    <h4 class="font-bold">P-Storyuspendisse finibus1</h4>
                    <div class="w-1/3 mx-auto text-center bg-blue-700 rounded hover:bg-blue-500 transition-all">
                        <a href="#" class="">
                            <h4 class="font-semibold ">habitasse platea1-1</h4>
                        </a>
                    </div>
                </div>
                <div class=" px-4 py-2 text-center leading-loose shadow-xl border-blue-500 border-2">
                    <h4 class="font-bold">P-Storyuspendisse finibus1</h4>
                    <div class="w-1/3 mx-auto text-center bg-blue-700 rounded hover:bg-blue-500 transition-all">
                        <a href="#" class="">
                            <h4 class="font-semibold ">habitasse platea1-1</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of pers-stories section -->
    <!-- start of contact section -->
    <section id="contact">
        <div class="flex w-full min-h-screen justify-center items-center mt-8">
            <div
                class="flex flex-col md:space-x-6 md:space-y-0 space-y-6 md:flex-row bg-blue-700 w-full max-w-4xl p-8 sm:p-12 rounded-xl shadow-lg text-white">
                <div class="flex flex-col space-y-8">
                    <div>
                        <h1 class="font-bold text-4xl tracking-wide">Contact</h1>
                        <p class="pt-2 text-blue-300 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                    <div class="flex flex-col space-y-6">
                        <div class="inline-flex space-x-2 items-center">
                            <ion-icon name="call" class="text-blue-200 text-xl"></ion-icon>
                            <span>06-123 456 78</span>
                        </div>
                        <div class="inline-flex space-x-2 items-center">
                            <ion-icon name="mail" class="text-blue-200 text-xl"></ion-icon>
                            <span>At@at.com</span>
                        </div>
                        <div class="inline-flex space-x-2 items-center">
                            <ion-icon name="location" class="text-blue-200 text-xl"></ion-icon>
                            <span>Groningen</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white text-blue-700 rounded-xl shadow-lg p-8">
                    <form action="" class="flex flex-col space-y-4">
                        <div>
                            <label for="" class="text-sm">Uw Naam</label>
                            <div>
                                <input type="text" placeholder="Uw Naam"
                                    class="ring-1 ring-blue-700 w-full mt-2 rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-blue-200">
                            </div>
                        </div>
                        <div>
                            <label for="" class="text-sm">Uw Email</label>

                            <div>
                                <input type="email" placeholder="Uw Email"
                                    class="ring-1 ring-blue-700 w-full mt-2 rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-blue-200">
                            </div>
                        </div>
                        <div>
                            <label for="" class="text-sm">Uw Bericht</label>
                            <div>
                                <textarea placeholder="Uw Bericht" rows="4"
                                    class="ring-1 ring-blue-700 w-full mt-2 rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-blue-200"></textarea>
                            </div>
                        </div>
                        <button
                            class="inline-block self-end bg-blue-700 text-blue-200 font-bold rounded-lg px-6 py-2 uppercase text-sm">Verzend
                            Bericht</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end of contact section -->
    <!-- start of foto section -->
    <div><img src="https://www.archeosupport.nl/img/Loppersum1.jpg"></div>
    <!-- end of foto section -->
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
