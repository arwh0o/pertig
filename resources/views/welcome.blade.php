<!DOCTYPE html>
<html class="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Pertigaan Cafe Modern Landing Page</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    
    <!-- Vite Integration -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-background-light dark:bg-background-dark text-[#1b140d] dark:text-[#fcfaf8] overflow-x-hidden">
<header class="fixed top-0 z-50 w-full transition-all duration-300 bg-black/20 backdrop-blur-sm border-b border-white/10" id="navbar">
    <div class="max-w-[1400px] mx-auto flex items-center justify-between px-6 md:px-8 py-4 md:py-6">
        <div class="flex items-center gap-3">
            <img src="{{ asset('logo/perti.png') }}" alt="Pertigaan Logo" class="h-12 md:h-14 w-auto object-contain drop-shadow-md">
            <h2 class="text-xl md:text-2xl font-black tracking-tight text-white drop-shadow-md">Pertigaan</h2>
        </div>
        
        {{-- Desktop Nav --}}
        <nav class="hidden md:flex items-center gap-10">
            <a class="text-sm font-bold text-white hover:text-primary transition-colors drop-shadow-sm" href="#home">Home</a>
            <a class="text-sm font-bold text-white hover:text-primary transition-colors drop-shadow-sm" href="#menu">Menu</a>
            <a class="text-sm font-bold text-white hover:text-primary transition-colors drop-shadow-sm" href="#gallery">Galeri</a>
            <a class="text-sm font-bold text-white hover:text-primary transition-colors drop-shadow-sm" href="#map">Map</a>
            <a class="text-sm font-bold text-white hover:text-primary transition-colors drop-shadow-sm" href="#feedback">Feedback</a>
            <button class="bg-primary hover:bg-white hover:text-primary text-white px-6 py-2.5 rounded-full text-sm font-extrabold transition-all transform hover:scale-105">
                Visit Us
            </button>
        </nav>
    </div>
</header>
<section class="relative h-screen min-h-[700px] w-full flex items-center overflow-hidden bg-background-dark" id="home">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-black/50 z-10"></div>
        <img alt="Cafe Interior" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUHb21UP6Gnph0sPj0Eamb7VUa8OIQv8k8P92HliaA5F99TSKvQQIhi20EPOYWps5O_yuV5EFnc1T5D43mC0Ma1Egx_dyJJCUgAYwn6vcKAPbmWOSvYkWkt8AkF-vPIaYg_TK9Job_B-v-BGo0vK4sWxTDRbGj9yC_ORwAXXJbboq5UpdpeIlivTEeUA6Z4cJVtowPgvKt2JKg7GogQ7ure4hfqq3rDoZ06R3OEN8JlMZpEmug1yi8iJRfWLZufFawvX9VW2-Jpq92"/>
    </div>
    <div class="relative z-20 w-full h-full flex flex-col lg:flex-row">
        <div class="w-full lg:w-3/5 h-full flex items-center px-8 lg:px-20 pt-20">
            <div class="max-w-2xl">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/20 border border-primary/30 text-primary mb-6">
                    <span class="size-2 bg-primary rounded-full animate-pulse"></span>
                    <span class="text-[10px] font-bold uppercase tracking-[0.2em]">Authentic Coffee Experience</span>
                </div>
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white leading-[1] mb-8">
                    LIFE<br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-primary to-primary">BEGIN AFTER COFFEE</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-200 mb-10 max-w-xl leading-relaxed">
                    Nikmati perpaduan sempurna antara desain industrial yang elegan dan cita rasa kopi artisan terbaik di jantung kota.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a class="group relative inline-flex items-center justify-center px-10 py-5 font-bold text-white transition-all duration-300 bg-primary rounded-full hover:bg-primary/90 shadow-xl shadow-primary/20 active:scale-95" href="#menu">
                        <span class="relative">Lihat Menu</span>
                        <span class="material-symbols-outlined ml-2 transform group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                    <a class="inline-flex items-center justify-center px-10 py-5 font-bold text-white transition-all duration-300 border-2 border-white/30 rounded-full hover:bg-white/10 backdrop-blur-sm active:scale-95" href="#gallery">
                        Momen
                    </a>
                    <a class="inline-flex items-center justify-center px-10 py-5 font-bold text-white transition-all duration-300 border-2 border-white/30 rounded-full hover:bg-white/10 backdrop-blur-sm active:scale-95" href="#map">
                        Lokasi Kami
                    </a>
                </div>
            </div>
        </div>
        <div class="hidden lg:flex w-2/5 h-full relative items-center justify-center pr-20">
            <div class="relative w-full aspect-[4/5] max-h-[600px] group">
                <div class="absolute -inset-4 bg-primary/20 blur-2xl rounded-3xl group-hover:bg-primary/30 transition-all duration-500"></div>
                <div class="relative h-full w-full rounded-3xl overflow-hidden border border-white/10 shadow-2xl">
                    <img alt="Barista Crafting" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCt-FyBAeg9R1OoZyAAqwUa53Y_IrScnvNQ7EjHN8QooerK0LJwVcDiuD2-7iBTkorwsdyaQf-5WMo0wPsA2zFyiDAsgQ4HsgbzX4h4GVXpXSeKUdsmd096am5wPQ57F13PJWBlTdW2c0Lf7YRhJCym5xhXUqQ3vkwBSD-z2-SzEdb4adep4yr3_4K5aQaS_chcm3W0IkAchKKzGVwb0d1Bai5EwTjfOX4UckCFYKHP3Gfqf1F-gqI-FSCsVd2NF_qRzbAh_hQNJK8Q"/>
                    <div class="absolute bottom-0 left-0 right-0 p-8 bg-gradient-to-t from-black/80 to-transparent">
                        <p class="text-white font-bold italic">"Kopi adalah bahasa universal yang menyatukan kita di setiap pertigaan jalan."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-30 hidden lg:block">
        <div class="flex flex-col items-center gap-2">
            <span class="text-[10px] text-white/50 uppercase tracking-widest font-bold">Scroll</span>
            <div class="w-[1px] h-12 bg-gradient-to-b from-white to-transparent"></div>
        </div>
    </div>
</section>
<section class="bg-[#1a1a1a] py-24 px-6 text-white relative overflow-hidden" id="menu">
    <div class="absolute inset-0 opacity-10 pointer-events-none chalkboard-bg"></div>
    <div class="max-w-[1100px] mx-auto relative z-10">
        <div class="text-center mb-20">
            <span class="text-primary font-bold tracking-[0.3em] uppercase text-sm block mb-4">The Selection</span>
            <h2 class="text-4xl md:text-5xl font-black tracking-tight mb-4">Our Signature Menu</h2>
            <div class="w-24 h-1 bg-primary mx-auto"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
            <div class="flex flex-col gap-8">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary text-3xl">coffee</span>
                    <h3 class="text-2xl font-black border-b-2 border-gray-700 w-full pb-2">Coffee</h3>
                </div>
                <div class="flex flex-col gap-6">
                    @forelse($coffees as $menu)
                    <div class="flex justify-between items-end border-b border-dashed border-gray-600 pb-2">
                        <div>
                            <h4 class="font-bold text-lg">{{ $menu->name }}</h4>
                            <p class="text-xs text-gray-400">{{ $menu->description }}</p>
                        </div>
                        <span class="text-primary font-bold text-xl">Rp {{ number_format($menu->price, 0, ',', '.') }}</span>
                    </div>
                    @empty
                    <p class="text-gray-500 italic">Menu belum tersedia.</p>
                    @endforelse
                </div>
            </div>
            <div class="flex flex-col gap-8">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary text-3xl">eco</span>
                    <h3 class="text-2xl font-black border-b-2 border-gray-700 w-full pb-2">Non-Coffee</h3>
                </div>
                <div class="flex flex-col gap-6">
                    @forelse($nonCoffees as $menu)
                    <div class="flex justify-between items-end border-b border-dashed border-gray-600 pb-2">
                        <div>
                            <h4 class="font-bold text-lg">{{ $menu->name }}</h4>
                            <p class="text-xs text-gray-400">{{ $menu->description }}</p>
                        </div>
                        <span class="text-primary font-bold text-xl">Rp {{ number_format($menu->price, 0, ',', '.') }}</span>
                    </div>
                    @empty
                    <p class="text-gray-500 italic">Menu belum tersedia.</p>
                    @endforelse
                </div>
            </div>
            <div class="flex flex-col gap-8">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary text-3xl">restaurant</span>
                    <h3 class="text-2xl font-black border-b-2 border-gray-700 w-full pb-2">Snacks</h3>
                </div>
                <div class="flex flex-col gap-6">
                    @forelse($snacks as $menu)
                    <div class="flex justify-between items-end border-b border-dashed border-gray-600 pb-2">
                        <div>
                            <h4 class="font-bold text-lg">{{ $menu->name }}</h4>
                            <p class="text-xs text-gray-400">{{ $menu->description }}</p>
                        </div>
                        <span class="text-primary font-bold text-xl">Rp {{ number_format($menu->price, 0, ',', '.') }}</span>
                    </div>
                    @empty
                    <p class="text-gray-500 italic">Menu belum tersedia.</p>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="mt-20 text-center">
            <!-- Ganti link href di bawah ini dengan link GrabFood toko Anda -->
            <p class="text-gray-500 dark:text-gray-400 text-sm font-medium mb-3">
                Kami juga tersedia di <span class="text-[#00B14F] font-bold">GrabFood</span>
            </p>
            <a href="https://food.grab.com/id/en/" target="_blank" class="inline-block bg-primary text-white hover:bg-white hover:text-primary px-12 py-4 rounded-full font-black transition-all uppercase tracking-widest text-sm shadow-xl shadow-primary/20">
                Pesan Sekarang
            </a>
        </div>
    </div>
</section>
<section class="py-24 px-6 bg-background-light dark:bg-background-dark" id="map">
    <div class="max-w-[1200px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-10 items-stretch">
        <div class="lg:col-span-8 h-[500px] bg-gray-300 dark:bg-gray-800 rounded-3xl overflow-hidden shadow-2xl relative group">
            <!-- 
                PETUNJUK GANTI LOKASI MAP:
                1. Buka Google Maps di browser.
                2. Cari lokasi kafe Anda.
                3. Klik tombol "Share" (Bagikan) -> Pilih tab "Embed a map" (Sematkan peta).
                4. Salin link yang ada di dalam src="..."
                5. Paste link tersebut ke dalam src="..." di bawah ini.
            -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d249.34052554160576!2d127.37074921863271!3d0.7802134743766823!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x329cb3bc3b0b92c7%3A0x9d96a3d2612a6363!2sPertigaan%20coffe%20ternate!5e0!3m2!1sid!2sid!4v1767980727741!5m2!1sid!2sid" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="w-full h-full grayscale group-hover:grayscale-0 transition-all duration-700">
            </iframe>
        </div>
        <div class="lg:col-span-4 flex flex-col gap-8 justify-center">
            <div>
                <h2 class="text-4xl font-black mb-6">Lokasi Kami</h2>
                <p class="text-[#6b513a] dark:text-[#a18a74] text-lg leading-relaxed">Jl. Pertigaan Industri No. 42, South Jakarta. Akses mudah dari jalan protokol utama.</p>
            </div>
            <div class="bg-white dark:bg-[#221910] p-8 rounded-3xl shadow-sm border border-[#e7dbcf] dark:border-[#3d2e21]">
                <h3 class="font-black text-xl mb-6 flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary">schedule</span>
                    Jam Operasional
                </h3>
                <ul class="flex flex-col gap-4">
                    <li class="flex justify-between text-sm">
                        <span class="text-gray-500 font-bold">Senin - Kamis</span>
                        <span class="font-extrabold text-primary">10:00 - 22:00</span>
                    </li>
                    <li class="flex justify-between text-sm">
                        <span class="text-gray-500 font-bold">Jumat - Sabtu</span>
                        <span class="font-extrabold text-primary">10:00 - 23:30</span>
                    </li>
                    <li class="flex justify-between text-sm">
                        <span class="text-gray-500 font-bold">Minggu</span>
                        <span class="font-extrabold text-primary">09:00 - 22:00</span>
                    </li>
                </ul>
            </div>
            <a href="https://www.google.com/maps/search/Pertigaan+coffe+ternate/" target="_blank" class="bg-[#1b140d] dark:bg-[#fcfaf8] text-white dark:text-[#1b140d] w-full py-5 rounded-2xl font-black flex items-center justify-center gap-3 hover:bg-primary hover:text-white transition-all transform hover:scale-[1.02]">
                <span class="material-symbols-outlined">directions</span>
                Buka di Google Maps
            </a>
        </div>
    </div>
</section>
</section>

{{-- Calendar Section --}}
<section class="py-24 px-6 bg-[#1a1a1a] relative overflow-hidden" id="gallery">
    <div class="max-w-[1000px] mx-auto relative z-10">
        <div class="text-center mb-16">
            <span class="text-primary font-bold tracking-[0.3em] uppercase text-sm block mb-4">Daily Memories</span>
            <h2 class="text-4xl md:text-5xl font-black text-white mb-4">Kalender Kenangan</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Cari foto kenanganmu di sini. Tanggal berwarna <span class="text-primary font-bold">Orange</span> berisi dokumentasi hari itu.</p>
        </div>

        @php
            $currentMonth = \Carbon\Carbon::now();
            $daysInMonth = $currentMonth->daysInMonth;
            $startDay = $currentMonth->copy()->startOfMonth()->dayOfWeek; // 0 (Sun) - 6 (Sat)
        @endphp

        <div class="bg-[#221910] border border-[#3d2e21] rounded-3xl p-8 shadow-2xl">
            <div class="flex justify-between items-center mb-8 border-b border-[#3d2e21] pb-6">
                <h3 class="text-2xl font-bold text-white uppercase tracking-wider">{{ $currentMonth->format('F Y') }}</h3>
                <div class="flex gap-2">
                    <span class="size-3 rounded-full bg-primary"></span>
                    <span class="text-xs text-gray-400 font-bold uppercase tracking-widest">Ada Foto</span>
                </div>
            </div>

            <div class="grid grid-cols-7 gap-2 md:gap-4 mb-2 text-center">
                @foreach(['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'] as $day)
                    <div class="text-gray-500 font-bold text-xs uppercase tracking-widest">{{ $day }}</div>
                @endforeach
            </div>

            <div class="grid grid-cols-7 gap-2 md:gap-4">
                {{-- Empty slots for days before start of month --}}
                @for ($i = 0; $i < $startDay; $i++)
                    <div class="aspect-square"></div>
                @endfor

                {{-- Days of the month --}}
                @for ($day = 1; $day <= $daysInMonth; $day++)
                    @php
                        $dateStr = $currentMonth->copy()->day($day)->format('Y-m-d');
                        $hasLink = isset($galleryLinks[$dateStr]);
                        $linkUrl = $hasLink ? $galleryLinks[$dateStr]->drive_url : '#';
                    @endphp

                    @if($hasLink)
                        <a href="{{ $linkUrl }}" target="_blank" class="aspect-square bg-primary hover:bg-white hover:text-primary text-white rounded-xl flex items-center justify-center font-black text-lg transition-all transform hover:scale-110 shadow-lg shadow-primary/20 group relative cursor-pointer">
                            {{ $day }}
                            <span class="absolute bottom-1 right-1">
                                <span class="material-symbols-outlined text-[10px]">photo_camera</span>
                            </span>
                        </a>
                    @else
                        <div class="aspect-square bg-white/5 text-gray-500 rounded-xl flex items-center justify-center font-bold text-sm border border-white/5 opacity-50">
                            {{ $day }}
                        </div>
                    @endif
                @endfor
            </div>
        </div>
    </div>
</section>

<section class="py-24 px-6 bg-[#f0edea] dark:bg-[#1a140f] relative" id="feedback">
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCRYHnBJcj6HidOeHznuh7JALuwpZ_A-RYTEPRzO2op82t8yUQM2Irtd5E3rHbZEKPRFjQs9mMusGRJI6d0J_Y0_4aSjROUaIN6bmU7nwu4dl6SzBRCr5WM8UIQh5AI26tWYsm1YdWTmFsM4qomfSSbvIE9g670XvMikimZmPCWsAwrINBe7Ykpm9r4ysIqgrzhPOxNqysrgeCamWqCqevXdKj9n3l-zG1uElwe52NUBF8ad8AyUnUAAzDuqWPgSskdnrvJ-jW6BxUU');"></div>
    <div class="max-w-[750px] mx-auto text-center relative z-10">
        <h2 class="text-5xl font-black mb-6">Suara Anda</h2>
        <p class="text-[#6b513a] dark:text-[#a18a74] mb-12 text-lg">Bagikan kesan dan saran Anda. Setiap masukan membantu kami meracik suasana yang lebih baik.</p>
        
        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-2xl shadow-sm text-left">
                <p class="font-bold">Terima Kasih!</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <form action="{{ route('feedback.store') }}" method="POST" class="flex flex-col gap-6 text-left bg-white dark:bg-[#221910] p-10 rounded-3xl shadow-2xl border border-[#e7dbcf] dark:border-[#3d2e21]">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex flex-col gap-3">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400">Nama Lengkap</label>
                    <input name="name" required class="bg-[#f8f7f6] dark:bg-[#2d241c] border-none rounded-xl p-4 text-sm focus:ring-2 focus:ring-primary transition-all" placeholder="arhan" type="text"/>
                </div>
                <div class="flex flex-col gap-3">
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400">Email</label>
                    <input name="email" required class="bg-[#f8f7f6] dark:bg-[#2d241c] border-none rounded-xl p-4 text-sm focus:ring-2 focus:ring-primary transition-all" placeholder="arhan@gmail.com" type="email"/>
                </div>
            </div>
            <div class="flex flex-col gap-3">
                <label class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400">Pesan / Feedback</label>
                <textarea name="message" required class="bg-[#f8f7f6] dark:bg-[#2d241c] border-none rounded-xl p-4 text-sm focus:ring-2 focus:ring-primary transition-all" placeholder="Ceritakan pengalaman Anda di Pertigaan..." rows="5"></textarea>
            </div>
            <button class="bg-primary text-white font-black py-5 rounded-2xl shadow-xl shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all text-lg" type="submit">
                Kirim Pesan
            </button>
        </form>
    </div>
</section>
<footer class="bg-background-light dark:bg-background-dark py-16 px-6 border-t border-[#f3ede7] dark:border-[#3d2e21]">
    <div class="max-w-[1200px] mx-auto flex flex-col md:flex-row justify-between items-center gap-12">
        <div class="flex items-center gap-4">
            <img src="{{ asset('logo/perti.png') }}" alt="Pertigaan Logo" class="h-10 w-auto object-contain drop-shadow-md">
            <h2 class="text-2xl font-black tracking-tight">Pertigaan</h2>
        </div>
        <div class="flex gap-8">
            <a class="text-gray-400 hover:text-primary transition-colors duration-300 transform hover:scale-110" href="#">
                <span class="sr-only">Instagram</span>
                <svg fill="currentColor" viewBox="0 0 24 24" class="size-6"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
            </a>
            <a class="text-gray-400 hover:text-primary transition-colors duration-300 transform hover:scale-110" href="#">
                <span class="sr-only">TikTok</span>
                <svg fill="currentColor" viewBox="0 0 24 24" class="size-6"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93v6.16c0 2.52-1.12 4.84-2.9 6.24-1.72 1.35-3.8 2.06-5.96 1.83-3.04-.32-5.75-2.45-6.66-5.38-.64-2.07-.32-4.32.74-6.13 1.35-2.3 3.8-3.63 6.43-3.63v4.18c-1.34.09-2.64.91-3.23 2.15-.46.96-.28 2.11.45 2.9.72.78 1.83 1.09 2.87.89 1.28-.24 2.18-1.34 2.18-2.62v-14.7z"/></svg>
            </a>
             <a class="text-gray-400 hover:text-primary transition-colors duration-300 transform hover:scale-110" href="#">
                <span class="sr-only">X (Twitter)</span>
                <svg fill="currentColor" viewBox="0 0 24 24" class="size-6"><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg>
            </a>
        </div>
        <div class="flex flex-col md:flex-row items-center gap-6">
            <p class="text-sm text-gray-400 font-medium">Life Begin After Coffee</p>
            <a href="{{ route('login') }}" class="text-xs text-gray-600 hover:text-primary transition-colors font-bold uppercase tracking-widest">Admin Login</a>
        </div>
    </div>
</footer>

</body></html>
