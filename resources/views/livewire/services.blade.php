<div>
    <div class="relative overflow-hidden" style="height: 500px;"
         x-data="{
             active: 0,
             slides: [
                 { img: '{{ asset('img/dummy/hospital.jpeg') }}', name: 'City General Hospital', desc: 'State-of-the-art Medical Facility' },
                 { img: '{{ asset('img/dummy/museum.jpeg') }}', name: 'Modern Arts Museum', desc: 'Cultural Landmark & Exhibition Space' },
                 { img: '{{ asset('img/dummy/restaurant.jpeg') }}', name: 'Skyline Restaurant', desc: 'Luxury Dining Experience' }
             ],
             timer: null,
             init() {
                 this.timer = setInterval(() => {
                     this.active = (this.active + 1) % this.slides.length;
                 }, 5000);
             }
         }">
        <!-- Slides -->
        <template x-for="(slide, index) in slides" :key="index">
            <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out"
                 x-show="active === index"
                 x-transition:enter="transition ease-out duration-1000"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-1000"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0">
                
                <!-- Image -->
                <img :src="slide.img" :alt="slide.name" class="w-full h-full object-cover">
                
                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-transparent"></div>
                
                <!-- Project Badge -->
                <div class="absolute top-8 right-6 md:right-12">
                   <span class="bg-amber-500/90 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg tracking-wide border border-white/20" x-text="slide.name"></span>
                </div>
            </div>
        </template>

        <div class="absolute bottom-0 left-0 w-full z-20 pb-48 pt-32">
            <div class="container mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 drop-shadow-xl tracking-tight">Our Services</h1>
                <p class="text-slate-200 text-lg md:text-xl max-w-2xl mx-auto drop-shadow-md font-light">
                    Comprehensive construction solutions tailored to your needs.
                </p>
                
                <!-- Slide Indicators -->
                <div class="flex justify-center gap-3 mt-6">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button @click="active = index; clearInterval(timer); timer = setInterval(() => { active = (active + 1) % slides.length; }, 5000);" 
                                class="h-1 rounded-full transition-all duration-300"
                                :class="active === index ? 'w-8 bg-amber-500' : 'w-2 bg-white/50 hover:bg-white'">
                        </button>
                    </template>
                </div>
            </div>
        </div>
    </div>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Service 1 -->
                <article class="group bg-slate-50 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 border border-slate-100">
                    <div class="h-48 bg-slate-200 flex items-center justify-center group-hover:bg-amber-500 transition-colors duration-300" aria-hidden="true">
                         <img src="{{ asset('img/services/general.jpeg') }}" alt="Luxury Residential Home Construction and Renovation" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-slate-800 mb-3">General Contracting</h3>
                        <p class="text-slate-600 mb-6">
                            Full-service general contracting for new builds and major renovations. We handle everything from permits to final walkthroughs.
                        </p>
                        <ul class="space-y-2 mb-6 text-sm text-slate-500">
                            <li class="flex items-center"><i class="fa-solid fa-check text-amber-500 mr-2" aria-hidden="true"></i> Project Management</li>
                            <li class="flex items-center"><i class="fa-solid fa-check text-amber-500 mr-2" aria-hidden="true"></i> Subcontractor Supervision</li>
                            <li class="flex items-center"><i class="fa-solid fa-check text-amber-500 mr-2" aria-hidden="true"></i> Quality Assurance</li>
                        </ul>
                    </div>
                </article>

                <!-- Service 2 -->
                <article class="group bg-slate-50 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 border border-slate-100">
                    <div class="h-48 bg-slate-200 flex items-center justify-center group-hover:bg-amber-500 transition-colors duration-300" aria-hidden="true">
                         <img src="{{ asset('img/services/design.jpeg') }}" alt="Luxury Residential Home Construction and Renovation" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-slate-800 mb-3">Design & Build</h3>
                        <p class="text-slate-600 mb-6">
                            A streamlined approach where we handle both design and construction. One contract, one point of responsibility.
                        </p>
                        <ul class="space-y-2 mb-6 text-sm text-slate-500">
                            <li class="flex items-center"><i class="fa-solid fa-check text-amber-500 mr-2" aria-hidden="true"></i> Architectural Design</li>
                            <li class="flex items-center"><i class="fa-solid fa-check text-amber-500 mr-2" aria-hidden="true"></i> Cost Estimation</li>
                            <li class="flex items-center"><i class="fa-solid fa-check text-amber-500 mr-2" aria-hidden="true"></i> Faster Delivery</li>
                        </ul>
                    </div>
                </article>

                <!-- Service 3 -->
                <article class="group bg-slate-50 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 border border-slate-100">
                    <div class="h-48 bg-slate-200 flex items-center justify-center group-hover:bg-amber-500 transition-colors duration-300" aria-hidden="true">
                         <img src="{{ asset('img/services/renovation.jpeg') }}" alt="Luxury Residential Home Construction and Renovation" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-slate-800 mb-3">Renovation & Remodel</h3>
                        <p class="text-slate-600 mb-6">
                            Transforming existing spaces into modern, functional environments. Office fit-outs, home expansions, and historical restorations.
                        </p>
                        <ul class="space-y-2 mb-6 text-sm text-slate-500">
                            <li class="flex items-center"><i class="fa-solid fa-check text-amber-500 mr-2" aria-hidden="true"></i> Interior Upgrades</li>
                            <li class="flex items-center"><i class="fa-solid fa-check text-amber-500 mr-2" aria-hidden="true"></i> Structural Reinforcement</li>
                            <li class="flex items-center"><i class="fa-solid fa-check text-amber-500 mr-2" aria-hidden="true"></i> Modernization</li>
                        </ul>
                    </div>
                </article>

                 <!-- Service 4 -->
                 <article class="group bg-slate-50 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 border border-slate-100">
                    <div class="h-48 bg-slate-200 flex items-center justify-center group-hover:bg-amber-500 transition-colors duration-300" aria-hidden="true">
                         <img src="{{ asset('img/services/masonry.jpeg') }}" alt="Luxury Residential Home Construction and Renovation" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-slate-800 mb-3">Concrete & Masonry</h3>
                        <p class="text-slate-600 mb-6">
                            High-quality concrete work, foundations, retaining walls, and custom masonry for durability and aesthetics.
                        </p>
                         <ul class="space-y-2 mb-6 text-sm text-slate-500">
                            <li class="flex items-center"><i class="fa-solid fa-check text-amber-500 mr-2" aria-hidden="true"></i> Foundations</li>
                            <li class="flex items-center"><i class="fa-solid fa-check text-amber-500 mr-2" aria-hidden="true"></i> Flatwork</li>
                            <li class="flex items-center"><i class="fa-solid fa-check text-amber-500 mr-2" aria-hidden="true"></i> Brick & Stone</li>
                        </ul>
                    </div>
                </article>

                 <!-- Service 5 -->
                 <article class="group bg-slate-50 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 border border-slate-100">
                    <div class="h-48 bg-slate-200 flex items-center justify-center group-hover:bg-amber-500 transition-colors duration-300" aria-hidden="true">
                         <img src="{{ asset('img/services/green.jpeg') }}" alt="Luxury Residential Home Construction and Renovation" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-slate-800 mb-3">Green Construction</h3>
                        <p class="text-slate-600 mb-6">
                            Sustainable building solutions including LEED certification assistance, energy-efficient retrofits, and renewable energy integration.
                        </p>
                         <ul class="space-y-2 mb-6 text-sm text-slate-500">
                            <li class="flex items-center"><i class="fa-solid fa-check text-amber-500 mr-2" aria-hidden="true"></i> LEED Consulting</li>
                            <li class="flex items-center"><i class="fa-solid fa-check text-amber-500 mr-2" aria-hidden="true"></i> Solar Integration</li>
                            <li class="flex items-center"><i class="fa-solid fa-check text-amber-500 mr-2" aria-hidden="true"></i> Energy Audits</li>
                        </ul>
                    </div>
                </article>

                 <!-- Service 6 -->
                 <article class="group bg-slate-50 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 border border-slate-100">
                    <div class="h-48 bg-slate-200 flex items-center justify-center group-hover:bg-amber-500 transition-colors duration-300" aria-hidden="true">
                         <img src="{{ asset('img/services/site.jpeg') }}" alt="Luxury Residential Home Construction and Renovation" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-slate-800 mb-3">Site Preparation</h3>
                        <p class="text-slate-600 mb-6">
                            Complete site development, excavation, grading, and utility installation to get your project off to the right start.
                        </p>
                         <ul class="space-y-2 mb-6 text-sm text-slate-500">
                            <li class="flex items-center"><i class="fa-solid fa-check text-amber-500 mr-2" aria-hidden="true"></i> Excavation</li>
                            <li class="flex items-center"><i class="fa-solid fa-check text-amber-500 mr-2" aria-hidden="true"></i> Land Clearing</li>
                            <li class="flex items-center"><i class="fa-solid fa-check text-amber-500 mr-2" aria-hidden="true"></i> Utility Trenching</li>
                        </ul>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- Project Inquiry Strip -->
    <section class="bg-amber-600 py-12">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between">
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-4 md:mb-0">Have a custom project in mind?</h2>
            <a href="#contact" class="px-8 py-3 bg-white text-amber-600 rounded-full font-bold hover:bg-slate-100 transition-colors shadow-lg">
                Talk to an Expert
            </a>
        </div>
    </section>
</div>
