<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'BuildCorp - Premier Construction Services' }}</title>
    <meta name="description" content="{{ $description ?? 'BuildCorp delivers top-tier construction solutions with a focus on quality, safety, and sustainability for commercial and residential projects.' }}">
    <meta name="keywords" content="{{ $keywords ?? 'construction, contractor, builder, commercial, residential, renovation, engineering, sustainable building' }}">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? 'BuildCorp - Premier Construction Services' }}">
    <meta property="og:description" content="{{ $description ?? 'BuildCorp delivers top-tier construction solutions with a focus on quality, safety, and sustainability.' }}">
    <meta property="og:image" content="{{ $og_image ?? asset('img/home/hero.jpeg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $title ?? 'BuildCorp - Premier Construction Services' }}">
    <meta property="twitter:description" content="{{ $description ?? 'BuildCorp delivers top-tier construction solutions with a focus on quality, safety, and sustainability.' }}">
    <meta property="twitter:image" content="{{ $og_image ?? asset('img/home/hero.jpeg') }}">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "ConstructionBusiness",
      "name": "BuildCorp",
      "image": "{{ asset('img/logo.png') }}",
      "url": "{{ url('/') }}",
      "telephone": "+15551234567",
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "123 Construction Blvd",
        "addressLocality": "Building City",
        "addressRegion": "BC",
        "postalCode": "10921",
        "addressCountry": "US"
      },
      "geo": {
        "@@type": "GeoCoordinates",
        "latitude": 40.712776,
        "longitude": -74.005974
      },
      "openingHoursSpecification": {
        "@@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday"
        ],
        "opens": "08:00",
        "closes": "18:00"
      },
      "sameAs": [
        "https://www.facebook.com/buildcorp",
        "https://www.twitter.com/buildcorp",
        "https://www.instagram.com/buildcorp"
      ]
    }
    </script>
    
    @stack('head')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /></noscript>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>

    <!-- Preload Hero Image for Home -->
    @if(request()->is('/'))
        <link rel="preload" as="image" href="{{ asset('img/home/hero.jpeg') }}" fetchpriority="high">
    @endif

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased flex flex-col min-h-screen">
    
    <!-- Navbar -->
    <nav id="navbar" class="fixed top-0 w-full z-50 transition-all duration-300 bg-transparent py-4">
        <div class="container mx-auto px-6 flex justify-between items-center transition-all duration-300">
            <div class="flex items-center space-x-4 align-center">
                <a href="/" class="flex items-center gap-3 text-2xl font-bold tracking-tight text-amber-500 group">
                    <img id="nav-logo" src="{{ asset('img/logo.png') }}" alt="BuildCorp Logo" class="w-16 h-16 transition-all duration-300">
                    <span class="group-hover:text-amber-400 transition-colors">BUILD<span class="text-white">CORP</span></span>
                </a>
            </div>
            
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="transition-colors hover:text-amber-500 {{ request()->is('/') ? 'text-amber-500 font-bold' : 'text-white' }}">Home</a>
                <a href="/about" class="transition-colors hover:text-amber-500 {{ request()->is('about') ? 'text-amber-500 font-bold' : 'text-white' }}">About</a>
                <a href="/services" class="transition-colors hover:text-amber-500 {{ request()->is('services') ? 'text-amber-500 font-bold' : 'text-white' }}">Services</a>
                <a href="#contact" class="bg-amber-600 hover:bg-amber-500 text-white px-5 py-2 rounded-full font-medium transition-all transform hover:scale-105 shadow-md">
                    Contact Us
                </a>
            </div>

            <!-- Mobile Menu Button (Simple implementation) -->
            <button id="mobile-menu-btn" class="md:hidden text-white text-2xl" aria-label="Toggle navigation menu">
                <i class="fa-solid fa-bars" aria-hidden="true"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-zinc-900 border-t border-zinc-800 absolute top-full left-0 w-full shadow-xl">
            <div class="flex flex-col space-y-4 px-6 py-6">
                <a href="/" class="text-white hover:text-amber-500 transition-colors {{ request()->is('/') ? 'text-amber-500 font-bold' : '' }}">Home</a>
                <a href="/about" class="text-white hover:text-amber-500 transition-colors {{ request()->is('about') ? 'text-amber-500 font-bold' : '' }}">About</a>
                <a href="/services" class="text-white hover:text-amber-500 transition-colors {{ request()->is('services') ? 'text-amber-500 font-bold' : '' }}">Services</a>
                <a href="#contact" class="bg-amber-600 hover:bg-amber-500 text-white px-5 py-2 rounded-full font-medium transition-all text-center shadow-md">
                    Contact Us
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer id="contact" class="bg-zinc-950 text-slate-300 py-12 border-t border-zinc-900">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div class="col-span-1 md:col-span-2">
                    <a href="/" class="text-2xl font-bold tracking-tight text-white mb-4 block">
                        <i class="fa-solid fa-helmet-safety mr-2 text-amber-500" aria-hidden="true"></i> BUILD<span class="text-amber-500">CORP</span>
                    </a>
                    <p class="text-slate-400 max-w-sm mb-6">
                        Building the future with precision, quality, and sustainable practices. Trusted by industry leaders for over 20 years.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" aria-label="Facebook" class="w-10 h-10 rounded-full bg-zinc-900 flex items-center justify-center hover:bg-amber-600 hover:text-white transition-all"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="#" aria-label="Twitter" class="w-10 h-10 rounded-full bg-zinc-900 flex items-center justify-center hover:bg-amber-600 hover:text-white transition-all"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" aria-label="LinkedIn" class="w-10 h-10 rounded-full bg-zinc-900 flex items-center justify-center hover:bg-amber-600 hover:text-white transition-all"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i></a>
                        <a href="#" aria-label="Instagram" class="w-10 h-10 rounded-full bg-zinc-900 flex items-center justify-center hover:bg-amber-600 hover:text-white transition-all"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-white font-semibold mb-4 text-lg">Contact Info</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fa-solid fa-location-dot mt-1 mr-3 text-amber-500" aria-hidden="true"></i>
                            <span>123 Construction Blvd,<br>Building City, BC 10921</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-phone mr-3 text-amber-500" aria-hidden="true"></i>
                            <span>+1 (555) 123-4567</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-envelope mr-3 text-amber-500" aria-hidden="true"></i>
                            <span>info@buildcorp.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-zinc-900 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-slate-400">
                <p>&copy; {{ date('Y') }} BuildCorp Inc. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-amber-400">Privacy Policy</a>
                    <a href="#" class="hover:text-amber-400">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const navbar = document.getElementById('navbar');
        const navLogo = document.getElementById('nav-logo');
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        // Toggle Mobile Menu
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close menu when clicking content
        document.addEventListener('click', (e) => {
            if (!mobileMenu.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });

        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                // Scrolled down state
                navbar.classList.add('bg-zinc-800', 'backdrop-blur-md', 'shadow-lg', 'py-2');
                navbar.classList.remove('bg-transparent', 'py-4');
                
                // Shrink logo
                navLogo.classList.remove('w-16', 'h-16');
                navLogo.classList.add('w-12', 'h-12');
            } else {
                // Top state
                // Only if menu is not open, otherwise keep background
                if (mobileMenu.classList.contains('hidden')) {
                     // Check specific logic? actually if menu is open we might want to keep bg.
                     // But let's stick to simple logic for now, standard behavior.
                }
                
                navbar.classList.add('bg-transparent', 'py-4');
                navbar.classList.remove('bg-zinc-800', 'backdrop-blur-md', 'shadow-lg', 'py-2');
                
                // Grow logo
                navLogo.classList.remove('w-12', 'h-12');
                navLogo.classList.add('w-16', 'h-16');
            }
        });
    </script>
</body>
</html>
