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
    <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
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
            </div>-->
    <div class="w-full relative bg-black">
        <div class="w-full h-full flex flex-col absolute top-0 left-0 justify-center items-center text-white">
            <div class="w-28 md:w-36"><img src="https://www.archeosupport.nl/img/logo.png"></div>
            <div>
                <h1 class="text-2xl md:text-6xl text-center">texttextentex xt</h1>
                <h2 class="hidden md:block text-3xl text-center font-bold">text text text</h2>
                <div class="flex justify-center md:pt-2">
                    <a href="#services">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold pt-1 pb-2 px-4 rounded-full">
                            Service
                        </button></a>
                </div>
            </div>
        </div>
         <img src="https://archeosupport.nl/img/cover.jpg" class="mx-auto">
    </div>
    <!-- start nav -->
    <nav class="flex sticky inset-x-0 top-0 left-0 items-center bg-gray-800 p-3 flex-wrap">
        <a href="#" class="p-2 mr-4 inline-flex items-center">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="fill-current text-white h-8 w-8 mr-2">
                <path
                    d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z" />
            </svg>
            <span class="text-xl text-white font-bold uppercase tracking-wide">Talwind CSS</span>
        </a>
        <button
            class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto hover:text-white outline-none nav-toggler"
            data-target="#navigation">
            <i class="material-icons">menu</i>
        </button>
        <div class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto" id="navigation">
            <div
                class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start flex flex-col lg:h-auto">
                <a href="#"
                    class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>Home</span>
                </a>
                <a href="#"
                    class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>About</span>
                </a>
                <a href="#services"
                    class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>Services</span>
                </a>
                <a href="#stories"
                    class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>Gallery</span>
                </a>
                <a href="#"
                    class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>Products</span>
                </a>
                <a href="#contact"
                    class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>Contact Us</span>
                </a>
            </div>
        </div>
    </nav>
    <!-- end nav -->
    <!-- start of text section -->
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3">
            <div class="h-full px-4 py-2 col-span-2">
                <h1 class="text-blue-700 text-6xl pt-8 px-4">Title of piece1</h1>
                <p class="py-4 px-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam lectus nisi,
                    pulvinar a eleifend vel, interdum at massa. Aenean tincidunt, lectus a convallis convallis, tortor
                    justo convallis risus, iaculis pharetra tortor quam eget libero. Nulla ultricies, tellus eu
                    scelerisque fringilla, lectus leo blandit leo, nec volutpat nibh nulla tempor risus. Pellentesque
                    ornare tincidunt facilisis. Donec dui lorem, aliquam vel sapien sed, scelerisque consectetur leo.
                    Cras lobortis erat vel arcu rutrum iaculis. Interdum et malesuada fames ac ante ipsum primis in
                    faucibus. Nulla at velit posuere, bibendum ex id, interdum arcu.

                    Suspendisse potenti. Nam sollicitudin sodales odio vitae malesuada. Proin malesuada massa vitae
                    vestibulum sagittis. Donec porttitor, ligula varius hendrerit malesuada, turpis dui cursus magna, at
                    luctus ligula erat vitae velit. Sed nec sem tempor, porttitor libero a, mollis ante. Nam consectetur
                    lacus nec nisl sodales sollicitudin. Donec porta tincidunt vulputate. Ut placerat mauris mi, eu
                    blandit justo facilisis et. Sed consectetur quis eros eget feugiat. In quis turpis ante. Suspendisse
                    finibus leo sit amet commodo aliquam. Maecenas vestibulum tellus neque, vitae tincidunt massa dictum
                    eget. Nullam ut faucibus est. In hac habitasse platea dictumst. </p>
            </div>
              <div class="h-full px-4 py-2 ">
                <div class="w-1/2 mx-auto"><img src="https://media.s-bol.com/q6L2M54wAOLG/r8woJpB/168x196.jpg"></div>
            </div>
        </div>
    </div>
    <!-- end of text section -->
    <!-- start of text section2 -->
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3">
            <div class="px-4 py-2 ">
                <div class="w-1/2 mx-auto"><img src="https://media.s-bol.com/q6L2M54wAOLG/r8woJpB/168x196.jpg"></div>
            </div>
            <div class="h-full px-4 py-2 col-span-2">
                <h1 class="text-blue-700 text-6xl pt-8 px-4">Title of piece2</h1>
                <p class="py-4 px-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam lectus nisi,
                    pulvinar a eleifend vel, interdum at massa. Aenean tincidunt, lectus a convallis convallis, tortor
                    justo convallis risus, iaculis pharetra tortor quam eget libero. Nulla ultricies, tellus eu
                    scelerisque fringilla, lectus leo blandit leo, nec volutpat nibh nulla tempor risus. Pellentesque
                    ornare tincidunt facilisis. Donec dui lorem, aliquam vel sapien sed, scelerisque consectetur leo.
                    Cras lobortis erat vel arcu rutrum iaculis. Interdum et malesuada fames ac ante ipsum primis in
                    faucibus. Nulla at velit posuere, bibendum ex id, interdum arcu.

                    Suspendisse potenti. Nam sollicitudin sodales odio vitae malesuada. Proin malesuada massa vitae
                    vestibulum sagittis. Donec porttitor, ligula varius hendrerit malesuada, turpis dui cursus magna, at
                    luctus ligula erat vitae velit. Sed nec sem tempor, porttitor libero a, mollis ante. Nam consectetur
                    lacus nec nisl sodales sollicitudin. Donec porta tincidunt vulputate. Ut placerat mauris mi, eu
                    blandit justo facilisis et. Sed consectetur quis eros eget feugiat. In quis turpis ante. Suspendisse
                    finibus leo sit amet commodo aliquam. Maecenas vestibulum tellus neque, vitae tincidunt massa dictum
                    eget. Nullam ut faucibus est. In hac habitasse platea dictumst. </p>
            </div>
        </div>
    </div>
    <!-- end of text section2 -->
    <!-- start of parallax section -->
    <div class="h-screen image1 bg-fixed bg-center bg-no-repeat bg-cover">
        <div class="min-h-screen flex items-center justify-center">
            <!-- Card or contents that should be centered vertically -->
            <div class="max-w-7xl px-10 py-12 ">
                <h2 class="text-red-700 text-center text-6xl font-bold leading-snug">Texterino. tx</h2>
                <div class="mt-2 flex items-center justify-center max-w-md"><img
                        src="https://www.archeosupport.nl/img/logo.png">
                </div>
            </div>
        </div>
    </div>
    <!-- end of paralax section -->
    <!-- start of services section -->
    <section id="services" class="py-16 bg-blue-700 ">
        <div class="container mx-auto px-4 text-white ">
            <h2 class="text-center text-3xl font-bold mb-10">Services</h2>
            <div class="grid gap-4 md:grid-cols-3">
                <div class=" px-4 py-2 text-center leading-loose shadow-xl border-blue-500 border-2">
                    <h4 class="font-bold">Suspendisse finibus1</h4>
                    <a href="#" class="hover:underline">
                        <h4 class="font-semibold ">habitasse platea</h4>
                    </a>
                    <a href="#" class="hover:underline">
                        <h4 class="font-semibold">Nam consectetur lacus nec</h4>
                    </a>
                    <a href="#" class="hover:underline">
                        <h4 class="font-semibold">habitasse platea</h4>
                    </a>
                </div>
                <div class=" px-4 py-2 text-center leading-loose shadow-xl border-blue-500 border-2">
                    <h4 class="font-bold">Suspendisse finibus2</h4>
                    <a href="#" class="hover:underline">
                        <h4 class="font-semibold">habitasse platea</h4>
                    </a>
                    <a href="#" class="hover:underline">
                        <h4 class="font-semibold">Nam consectetur lacus nec</h4>
                    </a>
                    <a href="#" class="hover:underline">
                        <h4 class="font-semibold">habitasse platea</h4>
                    </a>
                </div>
                <div class=" px-4 py-2 text-center leading-loose shadow-xl border-blue-500 border-2">
                    <h4 class="font-bold">Suspendisse finibus3</h4>
                    <a href="#" class="hover:underline">
                        <h4 class="font-semibold">habitasse platea</h4>
                    </a>
                    <a href="#" class="hover:underline">
                        <h4 class="font-semibold">Nam consectetur lacus nec</h4>
                    </a>
                    <a href="#" class="hover:underline">
                        <h4 class="font-semibold">habitasse platea</h4>
                    </a>
                </div>
                <div class=" px-4 py-2 text-center leading-loose shadow-xl border-blue-500 border-2">
                    <h4 class="font-bold">Suspendisse finibus4</h4>
                    <a href="#" class="hover:underline">
                        <h4 class="font-semibold">habitasse platea</h4>
                    </a>
                    <a href="#" class="hover:underline">
                        <h4 class="font-semibold">Nam consectetur lacus nec</h4>
                    </a>
                    <a href="#" class="hover:underline">
                        <h4 class="font-semibold">habitasse platea</h4>
                    </a>
                    <a href="#" class="hover:underline">
                        <h4>services 4</h4>
                    </a>
                    <a href="#" class="hover:underline">
                        <h4>services 4</h4>
                    </a>
                </div>
                <div class=" px-4 py-2 text-center leading-loose shadow-xl border-blue-500 border-2">
                    <h4 class="font-bold">Suspendisse finibus5</h4>
                    <a href="#" class="hover:underline">
                        <h4 class="font-semibold">habitasse platea</h4>
                    </a>
                    <a href="#" class="hover:underline">
                        <h4 class="font-semibold">Nam consectetur lacus necam consectetur lacus nec</h4>
                    </a>
                    <a href="#" class="hover:underline">
                        <h4 class="font-semibold">habitasse platea</h4>
                    </a>
                    <a href="#" class="hover:underline">
                        <h4>services 4</h4>
                    </a>
                    <a href="#" class="hover:underline">
                        <h4>services 4</h4>
                    </a>
                </div>
                <div class=" px-4 py-2 text-center leading-loose shadow-xl border-blue-500 border-2">
                    <h4 class="font-bold">Suspendisse finibus6</h4>
                    <a href="#" class="hover:underline">
                        <h4 class="font-semibold">habitasse platea</h4>
                    </a>
                    <a href="#" class="hover:underline">
                        <h4 class="font-semibold">Nam consectetur lacus nec</h4>
                    </a>
                    <a href="#" class="hover:underline">
                        <h4 class="font-semibold">habitasse platea</h4>
                    </a>
                    <a href="#" class="hover:underline">
                        <h4>services 4</h4>
                    </a>
                    <a href="#" class="hover:underline">
                        <h4>services 4</h4>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end of services section -->
    <!-- start of stories section -->
    <section id="stories" class="py-16 bg-blue-700 ">
        <div class="container mx-auto px-4 text-white ">
            <h2 class="text-center text-3xl font-bold mb-10">Stories</h2>
            <div class="grid gap-4 md:grid-cols-2">
                <div class=" px-4 py-2 text-center leading-loose shadow-xl border-blue-500 border-2">
                    <h4 class="font-bold">Storyuspendisse finibus1</h4>
                    <div class="grid pt-8 md:grid-cols-2">
                        <div class="w-4/5 mx-auto text-center bg-blue-700 rounded hover:bg-blue-500 transition-all">
                            <a href="#" class="">
                                <h4 class="font-semibold ">habitasse platea1-1</h4>
                            </a>
                        </div>
                        <div class="w-4/5 mx-auto text-center bg-blue-700 rounded hover:bg-blue-500 transition-all">
                            <a href="#" class="">
                                <h4 class="font-semibold ">habitasse platea1-2</h4>
                            </a>
                        </div>
                    </div>
                    <div class="w-4/5 mx-auto text-center bg-blue-700 rounded hover:bg-blue-500 transition-all">
                        <a href="#" class="">
                            <h4 class="font-semibold ">habitasse platea1-3</h4>
                        </a>
                    </div>
                </div>
                <div class=" px-4 py-2 text-center leading-loose shadow-xl border-blue-500 border-2">
                    <h4 class="font-bold">Storyuspendisse finibus2</h4>
                    <div class="grid pt-8 md:grid-cols-2">
                        <div class="w-4/5 mx-auto text-center bg-blue-700 rounded hover:bg-blue-500 transition-all">
                            <a href="#" class="">
                                <h4 class="font-semibold ">habitasse platea2-1</h4>
                            </a>
                        </div>
                        <div class="w-4/5 mx-auto text-center bg-blue-700 rounded hover:bg-blue-500 transition-all">
                            <a href="#" class="">
                                <h4 class="font-semibold ">habitasse platea2-2</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- end of stories section -->
    <!-- start of pers-stories section -->
    <section id="pers-stories" class="py-16 bg-blue-700 ">
        <div class="container mx-auto px-4 text-white ">
            <h2 class="text-center text-3xl font-bold mb-10">PersonalStories</h2>
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
        <div class="flex w-full min-h-screen justify-center items-center">
            <div class="flex flex-col space-y-6 bg-blue-700 w-full max-w-4xl p-8 rounded-xl shadow-lg text-white">
                <div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div></div>
            </div>
        </div>
    </section>
    <!-- end of contact section -->
    <!-- start of text section -->
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3">
            <div class="h-full px-4 py-2 col-span-2">
                <h1 class="text-blue-700 text-6xl pt-8 px-4">Title of piece3</h1>
                <p class="py-4 px-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam lectus nisi,
                    pulvinar a eleifend vel, interdum at massa. Aenean tincidunt, lectus a convallis convallis, tortor
                    justo convallis risus, iaculis pharetra tortor quam eget libero. Nulla ultricies, tellus eu
                    scelerisque fringilla, lectus leo blandit leo, nec volutpat nibh nulla tempor risus. Pellentesque
                    ornare tincidunt facilisis. Donec dui lorem, aliquam vel sapien sed, scelerisque consectetur leo.
                    Cras lobortis erat vel arcu rutrum iaculis. Interdum et malesuada fames ac ante ipsum primis in
                    faucibus. Nulla at velit posuere, bibendum ex id, interdum arcu.

                    Suspendisse potenti. Nam sollicitudin sodales odio vitae malesuada. Proin malesuada massa vitae
                    vestibulum sagittis. Donec porttitor, ligula varius hendrerit malesuada, turpis dui cursus magna, at
                    luctus ligula erat vitae velit. Sed nec sem tempor, porttitor libero a, mollis ante. Nam consectetur
                    lacus nec nisl sodales sollicitudin. Donec porta tincidunt vulputate. Ut placerat mauris mi, eu
                    blandit justo facilisis et. Sed consectetur quis eros eget feugiat. In quis turpis ante. Suspendisse
                    finibus leo sit amet commodo aliquam. Maecenas vestibulum tellus neque, vitae tincidunt massa dictum
                    eget. Nullam ut faucibus est. In hac habitasse platea dictumst. </p>
            </div>
            <div class="h-full px-4 py-2">
                <div class=""><img src="https://media.s-bol.com/q6L2M54wAOLG/r8woJpB/168x196.jpg"
                        class="w-1/2 mx-auto"></div>
                <div class=""><img src="https://media.s-bol.com/q6L2M54wAOLG/r8woJpB/168x196.jpg"
                        class="w-1/2 mx-auto"></div>
            </div>

        </div>
    </div>

    <!-- end of text section -->
    <!-- start of text section -->
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3">
            <div class="px-4 py-2 ">
                <div class="w-1/2 mx-auto"><img src="https://media.s-bol.com/q6L2M54wAOLG/r8woJpB/168x196.jpg"></div>
            </div>
            <div class="h-full px-4 py-2 col-span-2">

                <h1 class="text-blue-700 text-6xl pt-8 px-4">Title of piece4</h1>
                <p class="py-4 px-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam lectus nisi,
                    pulvinar a eleifend vel, interdum at massa. Aenean tincidunt, lectus a convallis convallis, tortor
                    justo convallis risus, iaculis pharetra tortor quam eget libero. Nulla ultricies, tellus eu
                    scelerisque fringilla, lectus leo blandit leo, nec volutpat nibh nulla tempor risus. Pellentesque
                    ornare tincidunt facilisis. Donec dui lorem, aliquam vel sapien sed, scelerisque consectetur leo.
                    Cras lobortis erat vel arcu rutrum iaculis. Interdum et malesuada fames ac ante ipsum primis in
                    faucibus. Nulla at velit posuere, bibendum ex id, interdum arcu.

                    Suspendisse potenti. Nam sollicitudin sodales odio vitae malesuada. Proin malesuada massa vitae
                    vestibulum sagittis. Donec porttitor, ligula varius hendrerit malesuada, turpis dui cursus magna, at
                    luctus ligula erat vitae velit. Sed nec sem tempor, porttitor libero a, mollis ante. Nam consectetur
                    lacus nec nisl sodales sollicitudin. Donec porta tincidunt vulputate. Ut placerat mauris mi, eu
                    blandit justo facilisis et. Sed consectetur quis eros eget feugiat. In quis turpis ante. Suspendisse
                    finibus leo sit amet commodo aliquam. Maecenas vestibulum tellus neque, vitae tincidunt massa dictum
                    eget. Nullam ut faucibus est. In hac habitasse platea dictumst. </p>
            </div>


        </div>
    </div>


    <!-- end of text section -->



    </div>
    </div>
</body>

</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ url('js/app.js') }}"></script>
