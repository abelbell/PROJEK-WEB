<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('images/logo/logo-api.jpg') }}" type="image/png">
    <title>Seblak Reservasi</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="scroll-smooth">
    <!-- Header -->
    <header id="header" class="bg-transparent text-white py-4 fixed z-10 top-0 w-full">
        <nav class="container mx-auto flex justify-between items-center gap-8">
            <a href="#" class="w-[200px]">
                <h2 class="text-lg font-bold text-white">Seblak Al-Fazza</h2>
            </a>

            <!-- Navbar Links -->
            <ul id="menu" class="hidden md:flex md:py-0 py-3 gap-5 md:justify-center md:items-center md:static absolute top-full left-0 w-full bg-red-800 md:bg-transparent shadow-md md:shadow-none flex-col md:flex-row text-center font-medium text-white ">
                <li><a href="#home" class="block py-3 md:py-0 px-4 hover:bg-white md:hover:bg-transparent hover:text-yellow-400 transition">Home</a></li>
                <li><a href="#produk" class="block py-3 md:py-0 px-4 hover:bg-white md:hover:bg-transparent hover:text-yellow-400 transition">Produk</a></li>
                <li><a href="{{ route('reservasi.create') }}" class="block py-3 md:py-0 px-4 hover:bg-white md:hover:bg-transparent hover:text-yellow-400 transition">Reservasi</a></li>
                <li><a href="#profile" class="block py-3 md:py-0 px-4 hover:bg-white md:hover:bg-transparent hover:text-yellow-400 transition">Tentang Kami</a></li>
                <li><a href="#contact" class="block py-3 md:py-0 px-4 hover:bg-white md:hover:bg-transparent hover:text-yellow-400 transition">Kontak</a></li>
                <li class="px-4"><a href="/admin" class="bg-gray-800 md:hidden block text-white py-2 px-4 rounded-lg transition duration-200 hover:bg-white hover:text-gray-800">Login</a></li>
            </ul>
            <a href="/admin" class="bg-gray-800 hidden md:block text-white py-2 px-4 rounded-lg transition duration-200 hover:bg-white hover:text-gray-800">Login</a>
            <!-- Hamburger Menu Button -->
            <button
                class="md:hidden flex items-center text-white focus:outline-none"
                id="menu-toggle">
                <svg id="menu-icon" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="close-icon" class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </nav>
    </header>

    <!-- Hero Section (Home) -->
    <section id="home" class="container mx-auto bg-red-800 flex flex-wrap items-center justify-between py-28 min-h-screen space-y-5">
        <div class="md:w-1/2 w-full flex flex-col items-start justify-center text-white">
            <h1 class="md:text-3xl text-2xl font-bold">Seblak Spesial <span class="text-yellow-400">Al-Fazza</span></h1>
            <h2 class="md:text-4xl text-2xl font-bold mb-4 text-yellow-400">Seblak Nampol, <span class="text-white">Setiap Suapan adalah petualangan rasa!</span></h2>
            <p class="text-lg mb-6">Rasakan kelezatan seblak autentik dengan rasa yang menggugah selera. Dibuat dari bahan segar, cocok untuk segala suasana.</p>
            <a class="bg-white text-black hover:text-white py-2 px-4 rounded-lg transition duration-200 hover:bg-orange-500" href="{{ route('reservasi.create') }}" class="btn-primary">Reservasi Sekarang</a>
        </div>
        <div class="md:w-1/2 w-full flex justify-end items-center">
            <img src="{{ asset('images/ilustrasi/seblak.png') }}" alt="seblak" class="md:w-[400px] md:h-[400px] w-[300px] h-[300px]">
        </div>
    </section>

    <!-- Profile Section -->
    <section id="profile" class="container mx-auto bg-gray-100 py-20 text-gray-800">
        <h2 class="text-4xl font-bold text-center">Tentang Seblak Al Fazza</h2>
        <p class="text-center text-xl mt-2">Profile singkat kami</p>
        <div class="flex md:flex-row flex-col items-center justify-center gap-7 p-4">
            <img src="{{ asset('images/logo/logo-seblak.jpg') }}" alt="Tentang Seblakyuk" class="rounded-lg w-[380px] md:h-[350px] h-[320px]">
            <div class="flex flex-col justify-end">
                <p class="text-lg mb-4 md:w-[90%] w-full">
                    <span class="font-bold">Seblak Al-Fazza</span> "Seblak nampol Alfazza, hidangan khas yang memukau lidah dengan paduan rasa pedas yang mengigit, gurihnya bumbu rempah yang meresap, dan tekstur kerupuk yang renyah. setiap suapan adalah pertualangan rasa yang tak terlupakan!."🔥🥗
                </p>
                <a href="#produk" class="">
                    <button class="bg-[#fb7a53] text-white py-2 px-4 rounded-lg transition duration-200 hover:bg-[#fca313]">Lihat Produk</button>
                </a>
            </div>
        </div>
    </section>

    <!-- Produk Section -->
    <section id="produk" class="container mx-auto py-20 bg-red-800">
        <h2 class="text-4xl font-bold text-center text-white">Produk Kami</h2>
        <p class="text-center mt-2 text-white">Kumpulan Produk Di Seblak Al fazza</p>
        <div class="flex justify-center">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8 py-8">
                <img class="flex justify-center items-center w-[300px] h-[300px] object-cover rounded-lg mb-4  shadow-md transition-transform duration-300 hover:translate-y-[-5px] hover:shadow-lg text-center" src="{{ asset('images/produk/seblak-ceker.jpg') }}" alt="produk1">

                <img class="flex justify-center items-center w-[300px] h-[300px] object-cover rounded-lg mb-4  shadow-md transition-transform duration-300 hover:translate-y-[-5px] hover:shadow-lg text-center" src="{{ asset('images/produk/seblak-makaroni.jpg') }}" alt="produk2">

                <img class="flex justify-center items-center w-[300px] h-[300px] object-cover rounded-lg mb-4  shadow-md transition-transform duration-300 hover:translate-y-[-5px] hover:shadow-lg text-center" src="{{ asset('images/produk/seblak-original.jpg') }}" alt="produk3">

                <img class="flex justify-center items-center w-[300px] h-[300px] object-cover rounded-lg mb-4  shadow-md transition-transform duration-300 hover:translate-y-[-5px] hover:shadow-lg text-center" src="{{ asset('images/produk/seblak-mie.jpg') }}" alt="produk4">

                <img class="flex justify-center items-center w-[300px] h-[300px] object-cover rounded-lg mb-4  shadow-md transition-transform duration-300 hover:translate-y-[-5px] hover:shadow-lg text-center" src="{{ asset('images/produk/seblak otak-otak.jpg') }}" alt="produk5">

                <img class="flex justify-center items-center w-[300px] h-[300px] object-cover rounded-lg mb-4  shadow-md transition-transform duration-300 hover:translate-y-[-5px] hover:shadow-lg text-center" src="{{ asset('images/produk/baso aci ceker.jpg') }}" alt="produk6">

                <img class="flex justify-center items-center w-[300px] h-[300px] object-cover rounded-lg mb-4  shadow-md transition-transform duration-300 hover:translate-y-[-5px] hover:shadow-lg text-center" src="{{ asset('images/produk/baso aci spesial.jpg') }}" alt="produk7">

                <img class="flex justify-center items-center w-[300px] h-[300px] object-cover rounded-lg mb-4  shadow-md transition-transform duration-300 hover:translate-y-[-5px] hover:shadow-lg text-center" src="{{ asset('images/produk/baso aci.jpg') }}" alt="produk8">

                <img class="flex justify-center items-center w-[300px] h-[300px] object-cover rounded-lg mb-4  shadow-md transition-transform duration-300 hover:translate-y-[-5px] hover:shadow-lg text-center" src="{{ asset('images/produk/tahu baso.jpg') }}" alt="produk9">

            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container mx-auto flex flex-col items-center justify-center py-20 bg-gray-100">
        <div class="text-center space-y-1 bg-gray-200 p-4 rounded-lg">
            <h2 class="text-4xl font-bold">Hubungi Kami</h2>
            <p class="font-semibold">Ingin mengetahui lebih lanjut? Hubungi kami di:</p>
            <p class=""><span class="font-medium">Alamat:</span> Baturan, RT.05/RW.20, Area Sawah, Trihanggo, Kec. Gamping, Kab.Seleman, Daerah Istimewa Yogyakarta 55291, Indonesia</p>
            <p class=""><span class="font-medium">Email:</span> harikurnia760@gmail.com</p>
            <p class=""><span class="font-medium">Telepon/WA:</span> +62 877-3094-8644</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-5 bg-red-800 text-white">
        <p>&copy; 2024 Seblak Al Fazza. Semua hak dilindungi.</p>
    </footer>
</body>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    const header = document.getElementById('header');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('bg-transparent', 'backdrop-blur-sm', 'shadow-lg');
            header.classList.remove('bg-white');
        } else {
            header.classList.add('bg-transparent');
            header.classList.remove('bg-transparent', 'shadow-lg');
        }
    });
    menuToggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        menu.classList.toggle('flex');
        // Ganti ikon
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });
</script>

</html>