<nav class="w-full py-4 px-6 md:py-6 md:px-16 flex justify-between items-center z-50 relative">

    <a href="{{ url('/') }}" class="flex items-center gap-2 group z-50">
        <svg class="w-8 h-8 text-purple-500 group-hover:scale-110 transition-transform" fill="none"
            stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
        </svg>
        <span class="text-white font-bold tracking-widest text-lg group-hover:text-purple-100 transition">DEV<span
                class="text-purple-500">PORT.</span></span>
    </a>

    <div class="hidden md:flex space-x-8 bg-white/5 border border-white/10 px-8 py-3 rounded-full backdrop-blur-md">
        <a href="{{ url('/about') }}"
            class="transition duration-300 {{ request()->is('about') || request()->is('/') ? 'text-purple-400 font-bold drop-shadow-[0_0_8px_rgba(168,85,247,0.8)]' : 'text-gray-400 hover:text-white' }}">About</a>
        <a href="{{ url('/experience') }}"
            class="transition duration-300 {{ request()->is('experience') ? 'text-purple-400 font-bold drop-shadow-[0_0_8px_rgba(168,85,247,0.8)]' : 'text-gray-400 hover:text-white' }}">Experience</a>
        <a href="{{ url('/skill') }}"
            class="transition duration-300 {{ request()->is('skill') ? 'text-purple-400 font-bold drop-shadow-[0_0_8px_rgba(168,85,247,0.8)]' : 'text-gray-400 hover:text-white' }}">Skills</a>
        <a href="{{ url('/work') }}"
            class="transition duration-300 {{ request()->is('work') ? 'text-purple-400 font-bold drop-shadow-[0_0_8px_rgba(168,85,247,0.8)]' : 'text-gray-400 hover:text-white' }}">Work</a>
        <a href="{{ url('/contract') }}"
            class="transition duration-300 {{ request()->is('contract') ? 'text-purple-400 font-bold drop-shadow-[0_0_8px_rgba(168,85,247,0.8)]' : 'text-gray-400 hover:text-white' }}">Contact</a>
    </div>

    <a href="#"
        class="hidden md:block border border-white/20 text-white px-6 py-2 rounded-full hover:bg-white/10 hover:border-purple-500/50 transition">
        Resume
    </a>

    <button id="mobile-menu-btn" class="md:hidden z-50 text-gray-300 hover:text-white focus:outline-none">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path id="icon-menu" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"></path>
            <path id="icon-close" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>

    <div id="mobile-menu"
        class="hidden absolute top-full left-0 w-full bg-[#07030f]/95 backdrop-blur-xl border-b border-purple-500/20 shadow-[0_10px_30px_rgba(168,85,247,0.1)] transition-all duration-300 md:hidden flex flex-col pt-4 pb-8 px-6 space-y-4">

        <a href="{{ url('/about') }}"
            class="text-lg {{ request()->is('about') || request()->is('/') ? 'text-purple-400 font-bold' : 'text-gray-300 hover:text-white' }}">About</a>
        <a href="{{ url('/experience') }}"
            class="text-lg {{ request()->is('experience') ? 'text-purple-400 font-bold' : 'text-gray-300 hover:text-white' }}">Experience</a>
        <a href="{{ url('/skill') }}"
            class="text-lg {{ request()->is('skill') ? 'text-purple-400 font-bold' : 'text-gray-300 hover:text-white' }}">Skills</a>
        <a href="{{ url('/work') }}"
            class="text-lg {{ request()->is('work') ? 'text-purple-400 font-bold' : 'text-gray-300 hover:text-white' }}">Work</a>
        <a href="{{ url('/contract') }}"
            class="text-lg {{ request()->is('contract') ? 'text-purple-400 font-bold' : 'text-gray-300 hover:text-white' }}">Contact</a>

        <div class="pt-4 border-t border-white/10 mt-2">
            <a href="#"
                class="block text-center border border-purple-500/50 text-white px-6 py-3 rounded-xl hover:bg-purple-500/20 transition glow-button">
                Resume
            </a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const iconMenu = document.getElementById('icon-menu');
        const iconClose = document.getElementById('icon-close');

        btn.addEventListener('click', function() {
            menu.classList.toggle('hidden');
            iconMenu.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
        });
    });
</script>
