<div>
    <!-- Hero Section -->
    <div class="relative bg-zinc-900 h-[600px] flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/home/hero.jpeg') }}" alt="BuildCorp Construction Site - Professional General Contracting Services" class="w-full h-full object-cover" fetchpriority="high" loading="eager">
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black/80 to-transparent opacity-90"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10 text-white">
            <div class="max-w-2xl animate-fade-in-up">
                <span class="inline-block py-1 px-3 rounded bg-amber-950/60 border border-amber-500/30 text-amber-500 text-sm font-semibold mb-6 backdrop-blur-sm">
                    PREMIER CONSTRUCTION SERVICES
                </span>
                <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
                    Building Your <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-500 to-yellow-400">Vision Into Reality</span>
                </h1>
                <p class="text-xl text-slate-300 mb-8 leading-relaxed">
                    We deliver top-tier construction solutions with a focus on quality, safety, and sustainability. Your trusted partner for commercial and residential projects.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/services" class="px-8 py-4 bg-amber-500 hover:bg-amber-400 text-white rounded-lg font-semibold text-center transition-all shadow-lg shadow-amber-900/20 hover:shadow-amber-900/40 transform hover:-translate-y-1">
                        Our Services
                    </a>
                    <a href="/about" class="px-8 py-4 bg-transparent border border-white/20 hover:bg-white/10 text-white rounded-lg font-semibold text-center transition-all backdrop-blur-sm">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <section class="bg-zinc-800 text-white py-12 relative -mt-8 z-20 mx-4 md:mx-auto max-w-6xl rounded-xl shadow-2xl">
        <div x-data="{
            animate(target, duration = 2000) {
                let start = 0;
                let current = 0;
                const step = (timestamp) => {
                    if (!start) start = timestamp;
                    const progress = Math.min((timestamp - start) / duration, 1);
                    // Ease out quart
                    const ease = 1 - Math.pow(1 - progress, 4);
                    
                    this.current = Math.floor(ease * target);
                    
                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    } else {
                        this.current = target;
                    }
                };
                window.requestAnimationFrame(step);
                return { current: 0, target: target, start() { step() } };
            }
        }" class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-zinc-700/50">
            
            <div class="p-4" x-data="{ count: 0, target: 25 }" x-init="
                let start = 0;
                const duration = 2000;
                const step = (timestamp) => {
                    if (!start) start = timestamp;
                    const progress = Math.min((timestamp - start) / duration, 1);
                    const ease = 1 - Math.pow(1 - progress, 4);
                    count = Math.floor(ease * target);
                    if (progress < 1) window.requestAnimationFrame(step);
                };
                window.requestAnimationFrame(step);
            ">
                <div class="text-4xl font-bold text-amber-500 mb-2"><span x-text="count">0</span>+</div>
                <div class="text-slate-400 text-sm uppercase tracking-wider">Years Experience</div>
            </div>

            <div class="p-4" x-data="{ count: 0, target: 500 }" x-init="
                let start = 0;
                const duration = 2000;
                const step = (timestamp) => {
                    if (!start) start = timestamp;
                    const progress = Math.min((timestamp - start) / duration, 1);
                    const ease = 1 - Math.pow(1 - progress, 4);
                    count = Math.floor(ease * target);
                    if (progress < 1) window.requestAnimationFrame(step);
                };
                window.requestAnimationFrame(step);
            ">
                <div class="text-4xl font-bold text-amber-500 mb-2"><span x-text="count">0</span>+</div>
                <div class="text-slate-400 text-sm uppercase tracking-wider">Projects Completed</div>
            </div>

            <div class="p-4" x-data="{ count: 0, target: 100 }" x-init="
                let start = 0;
                const duration = 2000;
                const step = (timestamp) => {
                    if (!start) start = timestamp;
                    const progress = Math.min((timestamp - start) / duration, 1);
                    const ease = 1 - Math.pow(1 - progress, 4);
                    count = Math.floor(ease * target);
                    if (progress < 1) window.requestAnimationFrame(step);
                };
                window.requestAnimationFrame(step);
            ">
                <div class="text-4xl font-bold text-amber-500 mb-2"><span x-text="count">0</span>%</div>
                <div class="text-slate-400 text-sm uppercase tracking-wider">Safety Record</div>
            </div>

            <div class="p-4" x-data="{ count: 0, target: 50 }" x-init="
                let start = 0;
                const duration = 2000;
                const step = (timestamp) => {
                    if (!start) start = timestamp;
                    const progress = Math.min((timestamp - start) / duration, 1);
                    const ease = 1 - Math.pow(1 - progress, 4);
                    count = Math.floor(ease * target);
                    if (progress < 1) window.requestAnimationFrame(step);
                };
                window.requestAnimationFrame(step);
            ">
                <div class="text-4xl font-bold text-amber-500 mb-2"><span x-text="count">0</span>+</div>
                <div class="text-slate-400 text-sm uppercase tracking-wider">Awards Won</div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-amber-600 font-semibold tracking-wide uppercase text-sm mb-3">Why Choose BuildCorp</h2>
                <h3 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6">Engineering Excellence</h3>
                <div class="h-1 w-20 bg-amber-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-shadow border border-slate-100 group">
                    <div class="w-14 h-14 bg-amber-50 rounded-xl flex items-center justify-center text-amber-600 mb-6 group-hover:bg-amber-500 group-hover:text-white transition-colors">
                        <i class="fa-solid fa-compass-drafting text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-800 mb-3">Professional Planning</h4>
                    <p class="text-slate-600 leading-relaxed">
                        Comprehensive project planning and management to ensure timely delivery and budget adherence.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-shadow border border-slate-100 group">
                    <div class="w-14 h-14 bg-amber-50 rounded-xl flex items-center justify-center text-amber-600 mb-6 group-hover:bg-amber-500 group-hover:text-white transition-colors">
                        <i class="fa-solid fa-hard-hat text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-800 mb-3">Expert Engineers</h4>
                    <p class="text-slate-600 leading-relaxed">
                        A team of certified and experienced engineers dedicated to structural integrity and innovation.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-shadow border border-slate-100 group">
                    <div class="w-14 h-14 bg-amber-50 rounded-xl flex items-center justify-center text-amber-600 mb-6 group-hover:bg-amber-500 group-hover:text-white transition-colors">
                        <i class="fa-solid fa-leaf text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-800 mb-3">Sustainable Building</h4>
                    <p class="text-slate-600 leading-relaxed">
                        Eco-friendly construction practices and materials to minimize environmental impact.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div class="max-w-2xl">
                    <h2 class="text-amber-600 font-semibold tracking-wide uppercase text-sm mb-3">What We Do</h2>
                    <h3 class="text-3xl md:text-4xl font-bold text-slate-800">Complete Construction Services</h3>
                </div>
                <a href="/services" class="group flex items-center text-amber-600 font-semibold mt-4 md:mt-0">
                    View All Services <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="relative group overflow-hidden rounded-2xl h-80">
                    <div class="absolute inset-0 bg-slate-800">
                         <!-- Placeholder for service image -->
                         <div class="w-full h-full bg-slate-800 flex items-center justify-center text-slate-600">
                            <img src="{{ asset('img/home/Komerisal.jpeg') }}" alt="Modern Commercial Building Construction Project by BuildCorp" class="w-full h-full object-cover">
                         </div>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-zinc-950/90 via-zinc-900/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8 w-full">
                        <h4 class="text-2xl font-bold text-white mb-2 translate-y-4 group-hover:translate-y-0 transition-transform">Commercial</h4>
                        <p class="text-slate-200 opacity-0 group-hover:opacity-100 transition-opacity translate-y-4 group-hover:translate-y-0 delay-75">
                            Office buildings, retail spaces, and industrial complexes.
                        </p>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-2xl h-80">
                    <div class="absolute inset-0 bg-slate-800">
                        <div class="w-full h-full bg-slate-800 flex items-center justify-center text-slate-600">
                            <img src="{{ asset('img/home/Custom.jpeg') }}" alt="Luxury Residential Home Construction and Renovation" class="w-full h-full object-cover">
                         </div>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-zinc-950/90 via-zinc-900/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8 w-full">
                        <h4 class="text-2xl font-bold text-white mb-2 translate-y-4 group-hover:translate-y-0 transition-transform">Residential</h4>
                        <p class="text-slate-200 opacity-0 group-hover:opacity-100 transition-opacity translate-y-4 group-hover:translate-y-0 delay-75">
                            Custom homes, renovations, and multi-unit housing.
                        </p>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-2xl h-80">
                   <div class="absolute inset-0 bg-slate-800">
                        <div class="w-full h-full bg-slate-800 flex items-center justify-center text-slate-600">
                            <img src="{{ asset('img/home/infrastruktur.jpeg') }}" alt="Heavy Infrastructure Project Road and Bridge Construction" class="w-full h-full object-cover">
                         </div>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-zinc-950/90 via-zinc-900/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8 w-full">
                        <h4 class="text-2xl font-bold text-white mb-2 translate-y-4 group-hover:translate-y-0 transition-transform">Infrastructure</h4>
                        <p class="text-slate-200 opacity-0 group-hover:opacity-100 transition-opacity translate-y-4 group-hover:translate-y-0 delay-75">
                            Roads, bridges, and public utility projects.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-zinc-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 pattern-grid-lg"></div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Ready to Start Your Project?</h2>
            <p class="text-slate-300 text-xl max-w-2xl mx-auto mb-10">
                Contact us today for a free consultation and quote. Let's build something great together.
            </p>
            <div class="max-w-md mx-auto">
                @if (session()->has('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @else
                    <form wire:submit="subscribe" class="flex flex-col sm:flex-row gap-4">
                        <input type="email" wire:model="email" placeholder="Enter your email" class="flex-1 px-6 py-4 rounded-full bg-white text-zinc-900 placeholder-zinc-500 border-none focus:ring-2 focus:ring-amber-400 shadow-xl" required>
                        <button type="submit" class="px-8 py-4 bg-amber-500 hover:bg-amber-400 text-white rounded-full font-bold text-lg transition-all shadow-xl hover:shadow-amber-500/20 disabled:opacity-50 disabled:cursor-not-allowed">
                            <span wire:loading.remove>Subscribe</span>
                            <span wire:loading>Processing...</span>
                        </button>
                    </form>
                    @error('email') <span class="text-red-400 text-sm mt-2 block">{{ $message }}</span> @enderror
                @endif
            </div>
        </div>
    </section>
</div>
