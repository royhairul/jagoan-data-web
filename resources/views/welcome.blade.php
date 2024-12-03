@extends('layouts.app')

@section('content')
    <div class="relative selection:bg-fuchsia-300">
        <header id="header"
            class="absolute z-50 top-0 left-0 navbar px-10 lg:px-20 py-10 transition-all duration-500 ease-in-out">
            <div class="navbar-start">
                <div class="flex-none lg:hidden">
                    <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost">
                        <span class="material-symbols-rounded">menu</span>
                    </label>
                </div>
                <div class="navbar">
                    <img id="logo" src="{{ asset('/images/logo/logo-white.svg') }}" alt="Logo Jagoan Data"
                        class="h-8 w-auto">
                </div>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a onclick="scrollToTop()">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#teams">Team</a></li>
                    <li><a href="#blogs">Blog</a></li>
                    <li><a href="#about-us">About Us</a></li>
                </ul>
            </div>
            <div class="navbar-end">
                <a href="#contact-us"
                    class="btn border-none text-white bg-primaryColor-500 hover:bg-primaryColor-700 hover:text-white/80">
                    Contact Us
                </a>
            </div>
        </header>
        <section class="flex flex-col bg-white">
            <div class="drawer-side">
                <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
                <ul class="menu bg-base-200 min-h-full w-80 p-4">
                    <!-- Sidebar content here -->
                    <li><a>Sidebar Item 1</a></li>
                    <li><a>Sidebar Item 2</a></li>
                </ul>
            </div>

            <main id="home" class="hero h-screen relative rounded-b-[55px]"
                style="background-image: url({{ asset('images/hero/hero-background.png') }});">

                <div class="hero-content text-white text-center ">
                    <div class="max-w-max">
                        <h1 class="mb-5 text-3xl font-bold lg:text-5xl">
                            Solusi Satu Data
                            <br>
                            Membangun Kota
                        </h1>
                        <p class="mb-5 text-xs lg:text-sm">
                            Building a better city with data, AI, and smart city solutions.
                        </p>
                    </div>
                </div>
                <img class="absolute bottom-0 right-0 transform scale-x-[-1]" width="150"
                    src="{{ asset('images/vector/decor-for-hero.svg') }}"alt="">
                <img class="absolute bottom-0 left-0 " width="150"
                    src="{{ asset('images/vector/decor-for-hero.svg') }}"alt="">
            </main>
            <section id="services" class="px-10 py-20 lg:px-20 lg:py-10">
                <h1 class="mb-5 text-2xl text-center font-bold lg:text-3xl text-darkColor">
                    Our Services
                </h1>
                <div class="card-wrap grid grid-cols-1 lg:grid-cols-3 gap-4">
                    <div class="card-item rounded-xl bg-primaryColor-100/50 p-8 flex flex-col gap-y-4">
                        <div class="card-item-title text-primaryColor-500 flex gap-x-2">
                            <span class="material-symbols-rounded">
                                hub
                            </span>
                            <h2 class="font-bold">Satu Data</h2>
                        </div>
                        <p class="card-item-body text-xs text-darkColor opacity-95">
                            Kami menyediakan layanan integrasi dan analisis data yang mendukung keputusan akurat dan efisien
                            bagi kota
                        </p>
                    </div>
                    <div class="card-item rounded-xl bg-primaryColor-100/50 p-8 flex flex-col gap-y-4">
                        <div class="card-item-title text-primaryColor-500 flex gap-x-2">
                            <span class="material-symbols-rounded">
                                query_stats
                            </span>
                            <h2 class="font-bold">Workshop Data Analytics</h2>
                        </div>
                        <p class="card-item-body text-xs text-darkColor opacity-95">
                            Kami mengadakan pelatihan Data Analytics dengan Tableau untuk membantu visualisasi dan analisis
                            data secara lebih efektif
                        </p>
                    </div>
                    <div class="card-item rounded-xl bg-primaryColor-100/50 p-8 flex flex-col gap-y-4">
                        <div class="card-item-title text-primaryColor-500 flex gap-x-2">
                            <span class="material-symbols-rounded">
                                book_4_spark
                            </span>
                            <h2 class="font-bold">Satu Data</h2>
                        </div>
                        <p class="card-item-body text-xs text-darkColor opacity-95">
                            Kami menyediakan solusi berbasis AI yang membantu otomatisasi dan analisis data untuk mendukung
                            keputusan yang lebih cerdas dan cepat
                        </p>
                    </div>

                </div>
            </section>

            {{-- Section Experience --}}
            <section
                class="relative h-96 px-10 lg:px-20 overflow-hidden bg-grayColor flex flex-col lg:flex-row justify-between">
                <div class="flex">
                    <div class="direction-up animate-infinite-scroll-up">
                        @for ($i = 1; $i < 5; $i++)
                            <img src="{{ asset('/images/clients/Malang Kabupaten.png') }}" width="150">
                            <img src="{{ asset('/images/clients/Jawa Timur.png') }}" width="150">
                        @endfor
                    </div>
                    <div class="direction-2 animate-infinite-scroll-down opacity-80">
                        @for ($i = 1; $i < 5; $i++)
                            <img src="{{ asset('/images/clients/Lamongan.png') }}" width="150">
                            <img src="{{ asset('/images/clients/Tuban.png') }}" width="150">
                        @endfor
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <p class="text-center text-primaryColor-500 font-semibold align-baseline -pb-2">Our Experiences</p>
                    <h2 class="text-center text-2xl font-bold text-darkColor align-baseline">Telah Dipercaya Oleh</h2>
                </div>
                <div class="flex">
                    <div class="direction-up animate-infinite-scroll-up opacity-80">
                        @for ($i = 1; $i < 5; $i++)
                            <img src="{{ asset('/images/clients/Blitar Kota.png') }}" width="150">
                            <img src="{{ asset('/images/clients/Madiun.png') }}" width="150">
                            <img src="{{ asset('/images/clients/Jawa Timur.png') }}" width="150">
                        @endfor
                    </div>
                    <div class="direction-2 animate-infinite-scroll-down opacity-80">
                        @for ($i = 1; $i < 5; $i++)
                            <img src="{{ asset('/images/clients/Malang Kota.png') }}" width="150">
                            <img src="{{ asset('/images/clients/Tuban.png') }}" width="150">
                        @endfor
                    </div>
                </div>
            </section>

            {{-- Section "Mengapa Harus kami?" --}}
            <section class="px-10 py-20 lg:px-20 lg:py-10">
                <div class="box-wrapper flex gap-x-10 flex-col lg:flex-row">
                    <div
                        class="box-item max-w-xs rounded-xl bg-primaryColor-100/50 p-8 flex flex-col justify-center align-middle gap-y-4 mt-48 mx-auto">
                        <img src="{{ asset('/images/vector/people-1.png') }}" alt="people-1"
                            class="h-60 w-auto relative -mt-32 mx-auto">
                        <div class="box-item-title text-primaryColor-500 flex gap-x-2">
                            <h2 class="font-bold text-center">Unlock Your City’s Potential with Jagoan Data</h2>
                        </div>
                        <p class="box-item-body text-center text-xs text-darkColor opacity-95">
                            "Did you know 75% of businesses lack the technical expertise to maximize data potential? With
                            Jagoan Data, you’ll gain access to industry experts with extensive experience in leading tech
                            companies, helping you make smarter, data-driven decisions."
                        </p>
                    </div>
                    <div
                        class="box-item max-w-xs rounded-xl bg-primaryColor-100/50 p-8 flex flex-col justify-center align-middle gap-y-4 mt-48 mx-auto">
                        <img src="{{ asset('/images/vector/people-2.png') }}" alt="people-2"
                            class="h-60 w-auto relative -mt-32 mx-auto">
                        <div class="box-item-title text-primaryColor-500 flex gap-x-2">
                            <h2 class="font-bold text-center">Expert Guidance from Industry Professionals</h2>
                        </div>
                        <p class="box-item-body text-center text-xs text-darkColor opacity-95">
                            "Did you know 75% of businesses lack the technical expertise to maximize data potential? With
                            Jagoan Data, you’ll gain access to industry experts with extensive experience in leading tech
                            companies, helping you make smarter, data-driven decisions."
                        </p>
                    </div>
                    <div
                        class="box-item max-w-xs rounded-xl bg-primaryColor-100/50 p-8 flex flex-col justify-center align-middle gap-y-4 mt-48  mx-auto">
                        <img src="{{ asset('/images/vector/people-3.png') }}" alt="people-3"
                            class="h-60 w-auto relative -mt-32 mx-auto">
                        <div class="box-item-title text-primaryColor-500 flex gap-x-2">
                            <h2 class="font-bold text-center">Simple and Efficient Business Processes</h2>
                        </div>
                        <p class="box-item-body text-center text-xs text-darkColor opacity-95">
                            "Did you know 75% of businesses lack the technical expertise to maximize data potential? With
                            Jagoan Data, you’ll gain access to industry experts with extensive experience in leading tech
                            companies, helping you make smarter, data-driven decisions."
                        </p>
                    </div>
                    <div
                        class="box-item max-w-xs rounded-xl bg-primaryColor-100/50 p-8 flex flex-col justify-center align-middle gap-y-4 mt-48 mx-auto">
                        <img src="{{ asset('/images/vector/people-4.png') }}" alt="people-4"
                            class="h-60 w-auto relative -mt-32 mx-auto">
                        <div class="box-item-title text-primaryColor-500 flex gap-x-2">
                            <h2 class="font-bold text-center"> Affordable Solutions for Every City</h2>
                        </div>
                        <p class="box-item-body text-center text-xs text-darkColor opacity-95">
                            "Did you know 75% of businesses lack the technical expertise to maximize data potential? With
                            Jagoan Data, you’ll gain access to industry experts with extensive experience in leading tech
                            companies, helping you make smarter, data-driven decisions."
                        </p>
                    </div>
                </div>
            </section>

            <section id="teams" class="bg-darkColor relative px-10 lg:px-20 py-24 overflow-hidden">
                <div class="tile-wrapper relative grid grid-cols-1 lg:grid-cols-4 gap-10 z-10">
                    <div class="tile-item-info max-w-60 flex flex-col justify-center">
                        <h1 class="text-white text-2xl font-bold mb-2">Our Team</h1>
                        <p class="text-xs opacity-50">
                            Tim Jagoan Data terdiri dari para ahli data berpengalaman yang siap membantu kota dan bisnis
                            memaksimalkan potensi data untuk pengambilan keputusan yang lebih cerdas dan efisien.
                        </p>
                    </div>
                    @foreach ($teams as $member)
                        <div class="tile-item relative">
                            {{-- Part of Image Profile --}}
                            <img src="{{ asset('/storage/' . $member->image) }}" alt=""
                                class="tile-item-image w-screen">
                            <div class="absolute z-10 bottom-5 right-0 flex flex-col justify-end">
                                {{-- Part of Name --}}
                                <div class="tile-item-name bg-white px-10 py-2">
                                    <h1 class="text-darkColor font-bold text-lg">{{ $member->name }}</h1>
                                    <p class="text-primaryColor-500 font-semibold text-xs">{{ $member->position }}</p>
                                </div>

                                {{-- Part of Social Media --}}
                                <div class="tile-item-social flex justify-end gap-x-2 my-2 mr-4">
                                    <a href="{{ $member->link_instagram }}" target="_blank" rel="noopener noreferrer">
                                        <img src="{{ asset('/images/icons/instagram.svg') }}" alt="Instagram Icon"
                                            width="24">
                                    </a>
                                    <a href="{{ $member->link_facebook }}" target="_blank" rel="noopener noreferrer">
                                        <img src="{{ asset('/images/icons/facebook.svg') }}" alt="Facebook Icon"
                                            width="24">
                                    </a>
                                    <a href="{{ $member->link_linkedin }}" target="_blank" rel="noopener noreferrer">
                                        <img src="{{ asset('/images/icons/linkedin.svg') }}" alt="LinkedIn Icon"
                                            width="24">
                                    </a>
                                </div>
                            </div>
                            <div
                                class="absolute -z-1 h-64 w-64 bottom-0 right-0 bg-gradient-to-tl from-10% from-primaryColor-400 via-30% via-transparent to-90% to-transparent">
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- decoration --}}
                <img src="{{ asset('/images/vector/decor-for-teams.svg') }}"
                    class="w-lvw h-auto absolute -right-20 -top-10 lg:top-auto lg:-right-5 lg:-bottom-14 -z-0 ">
            </section>

            {{-- Blog Article --}}
            <section id="blogs" class="px-10 lg:px-20 py-24">
                <div class="flex flex-col lg:flex-row justify-between">
                    <div>
                        <p class="text-sm text-primaryColor-500 font-semibold align-baseline leading-4">
                            Our Blog
                        </p>
                        <h2 class="text-xl font-bold text-darkColor">What's News?!</h2>
                    </div>
                    <div>
                        <p class="text-primaryColor-500 font-semibold">Load More</p>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="w-full swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($blogs as $blog)
                                @if ($loop->first)
                                    {{-- First Item Blog --}}
                                    {{-- For Large Devices --}}
                                    <div
                                        class="swiper-slide !flex-none !w-1/2 relative !overflow-hidden !hidden lg:!block">
                                        <img src="{{ asset('/storage/' . $blog->image) }}" class="w-full"
                                            alt="">
                                        <div class="article-info absolute z-10 left-0 bottom-5">
                                            <p
                                                class="text-white w-max bg-primaryColor-500 font-medium pl-8 py-2 pr-4 text-sm">
                                                {{ \Carbon\Carbon::parse($blog->created_at)->format('j F Y') }}
                                            </p>
                                            <h2 class="mt-2 text-white pl-8 font-semibold text-2xl">{{ $blog->title }}
                                            </h2>
                                        </div>
                                        <div
                                            class="absolute -z-1 h-64 w-full bottom-0 right-0 bg-gradient-to-t from-10% from-darkColor/90 via-50% via-transparent to-90% to-transparent">
                                        </div>
                                    </div>
                                    {{-- For Small Devices --}}
                                    <div class="block lg:!hidden swiper-slide">
                                        <div class="relative">
                                            <img src="{{ asset('/storage/' . $blog->image) }}" alt=""
                                                class="w-full">
                                            <div class="article-info absolute z-10 left-0 bottom-0">
                                                <p
                                                    class="text-white w-max bg-primaryColor-500 font-medium px-4 py-2 text-sm">
                                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('j F Y') }}
                                                </p>
                                            </div>
                                        </div>
                                        <h2 class="mt-2 text-darkColor font-semibold text-xl">
                                            {{ $blog->title }}
                                        </h2>
                                    </div>
                                @else
                                    {{-- Another Item Blog --}}
                                    <div class="swiper-slide !h-full bg-red-50">
                                        <div class="relative">
                                            <img src="{{ asset('/storage/' . $blog->image) }}" alt=""
                                                class="!w-full !h-full !object-cover" height="250">
                                            <div class="article-info absolute z-10 left-0 bottom-0">
                                                <p
                                                    class="text-white w-max bg-primaryColor-500 font-medium px-4 py-2 text-sm">
                                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('j F Y') }}
                                                </p>
                                            </div>
                                        </div>
                                        <h2 class="mt-2 text-darkColor font-semibold text-xl">
                                            {{ $blog->title }}
                                        </h2>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <!-- Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>

            <section id="about-us" class="px-10 lg:px-20 py-24">
                <div class="flex flex-col">
                    <p class="text-sm text-primaryColor-500 font-semibold align-baseline leading-4">Frequently Asked
                        Questions</p>
                    <h2 class="text-xl font-bold text-darkColor">Seputar Jagoan Data</h2>
                </div>
                <div class="mt-5 flex flex-col lg:flex-row gap-4">
                    <div class="lg:w-1/2">
                        <div tabindex="0" class="collapse collapse-plus mb-4 border-gray-300 bg-gray-200 border">
                            <input type="radio" name="my-accordion-3" />
                            <div class="collapse-title text-base font-semibold text-primaryColor-500">
                                Apa itu Jagoan Satu Data
                            </div>
                            <div class="collapse-content text-darkColor text-sm">
                                <p>Jagoan Satu Data adalah platform yang menyediakan solusi pengelolaan dan analisis data
                                    terpadu untuk memudahkan organisasi dalam pengambilan keputusan.</p>
                            </div>
                        </div>
                        <div tabindex="0" class="collapse collapse-plus mb-4 border-gray-300 bg-gray-200 border">
                            <input type="radio" name="my-accordion-3" />
                            <div class="collapse-title text-base font-semibold text-primaryColor-500">
                                Apa saja layanan yang ditawarkan Jagoan Satu Data?
                            </div>
                            <div class="collapse-content text-darkColor text-sm">
                                <p>hello</p>
                            </div>
                        </div>
                        <div tabindex="0" class="collapse collapse-plus mb-4 border-gray-300 bg-gray-200 border">
                            <input type="radio" name="my-accordion-3" />
                            <div class="collapse-title text-base font-semibold text-primaryColor-500">
                                Apa itu Jagoan Satu Data
                            </div>
                            <div class="collapse-content text-darkColor text-sm">
                                <p>hello</p>
                            </div>
                        </div>
                    </div>

                    <div class="lg:w-1/2">
                        <div tabindex="0" class="collapse collapse-plus mb-4 border-gray-300 bg-gray-200 border">
                            <input type="radio" name="my-accordion-3" />
                            <div class="collapse-title text-base font-semibold text-primaryColor-500">
                                Bagaimana cara menggunakan layanan Jagoan Satu Data?
                            </div>
                            <div class="collapse-content text-darkColor text-sm">
                                <p>hello</p>
                            </div>
                        </div>
                        <div tabindex="0" class="collapse collapse-plus mb-4 border-gray-300 bg-gray-200 border">
                            <input type="radio" name="my-accordion-3" />
                            <div class="collapse-title text-base font-semibold text-primaryColor-500">
                                Apakah layanan ini aman untuk data perusahaan?
                            </div>
                            <div class="collapse-content text-darkColor text-sm">
                                <p>hello</p>
                            </div>
                        </div>
                        <div tabindex="0" class="collapse collapse-plus mb-4 border-gray-300 bg-gray-200 border">
                            <input type="radio" name="my-accordion-3" />
                            <div class="collapse-title text-base font-semibold text-primaryColor-500">
                                Bagaimana cara menghubungi tim Jagoan Satu Data?
                            </div>
                            <div class="collapse-content text-darkColor text-sm">
                                <p>hello</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Contact Section --}}
            <section id="contact-us" class="relative bg-darkColor px-10 lg:px-20 py-24 overflow-hidden">
                <form action="" method="post" class="flex flex-col items-center">
                    <h2 class="text-xl lg:text-2xl text-center font-semibold text-primaryColor-500">
                        Mari Berdiskusi dan Berkolaborasi
                    </h2>
                    <p class="text-xs lg:text-sm text-center text-white/80 mb-10">Have question in mind? Come tell us what
                        you need!
                    </p>

                    <div class="w-max flex flex-col justify-center items-center gap-y-8">
                        <input type="text" placeholder="Name"
                            class="input w-full text-sm bg-transparent focus:outline-none rounded-none outline-none border-b-2 border-b-white/50" />
                        <div class="w-max form-contact flex gap-4 ">
                            <input type="text" placeholder="Email"
                                class="input text-sm bg-transparent focus:outline-none rounded-none outline-none w-full max-w-xs border-b-2 border-b-white/50" />
                            <input type="text" placeholder="Phone"
                                class="input text-sm bg-transparent focus:outline-none rounded-none outline-none w-full max-w-xs border-b-2 border-b-white/50" />
                        </div>
                        <textarea
                            class="textarea text-sm bg-transparent focus:outline-none rounded-none outline-none w-full border-b-2 border-b-white/50"
                            placeholder="Message"></textarea>
                        <button type="submit"
                            class="btn bg-primaryColor-500 text-white w-full hover:bg-primaryColor-700 hover:text-white/80">
                            Submit
                        </button>
                    </div>
                </form>
                <img class="absolute -bottom-[40%] -left-[25%]" src="{{ asset('images/vector/decor-for-contacts.svg') }}"
                    alt="">
                <img class="absolute -top-[40%] -right-[25%]" src="{{ asset('images/vector/decor-for-contacts.svg') }}"
                    alt="">
            </section>
            <footer class="footer bg-darkColor text-base-content px-10 lg:px-20 py-20 grid grid-cols-1 lg:grid-cols-3">
                <div class="flex flex-col gap-4">
                    <img src="{{ asset('images/logo-jagoan-data.svg') }}" alt="">
                    <p class="text-xs">
                        Jagoan Data adalah perusahaan yang bergerak di bidang analisis data, berdedikasi untuk membantu
                        bisnis memahami dan memanfaatkan kekuatan data.
                    </p>

                    <div class="mt-2">
                        <h6 class="footer-title text-white">Connect with Us</h6>
                        <div class="logo-wrapper flex gap-4">
                            <img src="{{ asset('images/icons/instagram.svg') }}" width="24" alt="">
                            <img src="{{ asset('images/icons/facebook.svg') }}" width="24" alt="">
                            <img src="{{ asset('images/icons/linkedin.svg') }}" width="24" alt="">
                            <img src="{{ asset('images/icons/twitter.svg') }}" width="24" alt="">
                            <img src="{{ asset('images/icons/youtube.svg') }}" width="24" alt="">
                        </div>
                    </div>
                </div>
                <div class="flex flex-col lg:ml-10">
                    <a class="link link-hover">Home</a>
                    <a class="link link-hover">Services</a>
                    <a class="link link-hover">Blog</a>
                    <a class="link link-hover">Careers</a>
                    <a class="link link-hover">About Us</a>
                </div>
                <div>
                    <h6 class="footer-title text-white">Contact Information</h6>
                    <div class="flex gap-4 justify-center items-center">
                        {{-- logo --}}
                        <img src="{{ asset('images/icons/whatsapp.svg') }}" width="24" alt="">
                        <a class="link link-hover">+62 856-5588-1970</a>
                    </div>
                    <div class="flex gap-4 justify-center items-center">
                        {{-- logo --}}
                        <span class="material-symbols-outlined text-white">mail</span>
                        <a class="link link-hover">info@jagoansatudata.com</a>
                    </div>
                    <div class="flex gap-4 justify-center items-center">
                        {{-- logo --}}
                        <span class="material-symbols-outlined text-white">distance</span>
                        <a class="link link-hover">
                            House of Daviz (Jagoan Data)
                            <br>
                            Jl Letjend S Parman Gang IIIA/19
                            Kota Malang
                        </a>
                    </div>
                </div>
            </footer>
            <footer class="w-full bg-darkColor text-white/60 py-2 text-center text-sm">
                © 2024 Jagoan Satu Data. All Rights Reserved
            </footer>


            <!-- Tombol Scroll to Top -->
            <button type="button" id="scrollToTopBtn" onclick="scrollToTop()"
                class="btn fixed z-50 border-none bottom-10 right-10 p-3 bg-primaryColor-500/20 text-white rounded-full shadow-lg hover:bg-primaryColor-700/20 transition-all duration-300 ease-in-out ">
                <span class="material-symbols-rounded text-primaryColor-500">arrow_upward</span>
            </button>
        </section>


        <script>
            // Mengambil elemen header dan tombol scroll to top
            const header = document.getElementById('header');
            const logo = document.getElementById('logo');
            const scrollToTopBtn = document.getElementById('scrollToTopBtn');

            // URL logo ketika navbar dalam keadaan scroll
            const logoScrolled = "{{ asset('/images/logo/logo.png') }}"; // Logo baru saat discroll
            const logoDefault = "{{ asset('/images/logo/logo-white.svg') }}"; // Logo default sebelum discroll

            // Menambahkan event scroll untuk memeriksa scroll dan mengubah tampilan elemen
            window.onscroll = function() {
                // Mengubah navbar saat di-scroll
                if (window.pageYOffset > 100) {
                    header.classList.add('bg-white', 'shadow-md', 'sticky'); // Menambahkan bg putih dan bayangan
                    header.classList.remove('bg-transparent', 'absolute', 'py-10'); // Menghapus background transparan
                    logo.src = logoScrolled; // Mengubah logo saat di-scroll
                } else {
                    header.classList.add('bg-transparent', 'absolute', 'py-10'); // Menambahkan background transparan
                    header.classList.remove('bg-white', 'shadow-md', 'sticky'); // Menghapus bg putih dan bayangan
                    logo.src = logoDefault; // Mengembalikan logo ke default saat berada di atas
                }

                // Menampilkan atau menyembunyikan tombol scroll to top berdasarkan scroll position
                if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                    // Menampilkan tombol saat di-scroll ke bawah
                    scrollToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
                    scrollToTopBtn.classList.add('opacity-100', 'pointer-events-auto');
                } else {
                    // Menyembunyikan tombol saat kembali ke atas
                    scrollToTopBtn.classList.remove('opacity-100', 'pointer-events-auto');
                    scrollToTopBtn.classList.add('opacity-0', 'pointer-events-none');
                }
            };

            // Menambahkan aksi klik untuk scroll ke atas
            const scrollToTop = () => window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        </script>
    </div>
@endsection
