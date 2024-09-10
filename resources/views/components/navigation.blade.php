<div>
    <header class="relative max-w-full  bg-slate-50 mx-auto  px-4 lg:max-w-7xl">
        <div class="bg--50 justify-between items-center">
            <section class="mx-auto">
                <nav x-data="{ mobileMenu: false }" @click.away="mobileMenu = false" class="flex justify-between items-center px-6 py-4" aria-label="main">
                    <!-- Brand logo -->
                    <a href="#logo">
                        <img src="{{ asset('asset/img/services/logo.png') }}" alt="new orizon" class="px-2 py-2 w-20 h-30">
                    </a>
                    <!-- Desktop Menu -->
                    <div class="hidden lg:flex items-center gap-6 mx-auto">
                        <ul class="flex gap-4">
                            <li><a href="" class="font-bold text-black text-xl">A propos</a></li>
                            <li><a href="" class="font-bold text-black text-xl">Réaliser un projet agricole ?</a></li>
                            <li><a href="" class="font-bold text-black text-xl">A propos</a></li>
                            <li><a href="" class="font-bold text-black text-xl">A propos</a></li>
                        </ul>
                      
                    </div>
                    <div>
                        <a href="#contact" class="bg-secondary-800 text-white border-2 px-4 py-2 rounded-lg lg:flex items-center hidden">
                        Contact
                         </a> 
                    </div>
                   
    
                    <!-- Mobile Menu Button -->
                    <button @click="mobileMenu = !mobileMenu" class="lg:hidden">
                        <!-- Hamburger icon -->
                        <svg x-show="!mobileMenu" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Close icon -->
                        <svg x-show="mobileMenu" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
    
                    <!-- Mobile Menu -->
                    <div x-show="mobileMenu" x-transition:enter="transition ease-in-out duration-200"
                        x-transition:enter-start="opacity-0 transform translate-y-full"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform translate-y-full" class="absolute top-16 left-0 w-full bg-slate-300 text-black p-4 rounded-lg z-50  lg:hidden">
                        <ul class="text-center space-y-4">
                            <li><a href="" class="font-bold text-2xl">A propos</a></li>
                            <li><a href="" class="font-bold text-2xl">Réaliser un projet agricole ?</a></li>
                            <li><a href="" class="font-bold text-2xl">A propos</a></li>
                            <li><a href="" class="font-bold text-2xl">A propos</a></li>
                            <li>
                                <a href="#contact" class="bg-secondary-800 text-white border-2 px-4 py-2 rounded-lg items-center lg:hidden">
                                    Contact
                                </a> 
                            </li>
                        </ul>
                    </div>
                </nav>
            </section>
        </div>
    </header>
</div>