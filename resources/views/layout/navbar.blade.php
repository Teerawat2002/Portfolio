<nav
    class="w-full py-4 px-6 md:py-6 md:px-16 flex justify-between items-center z-50 sticky top-0 bg-[#07030f]/80 backdrop-blur-md border-b border-white/5">

    <a href="#about" class="flex items-center gap-2 group z-50">
        <svg class="w-8 h-8 text-purple-500 group-hover:scale-110 transition-transform" fill="none"
            stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
        </svg>
        <span class="text-white font-bold tracking-widest text-lg group-hover:text-purple-100 transition">DEV<span
                class="text-purple-500">PORT.</span></span>
    </a>

    <div class="hidden md:flex space-x-8 bg-white/5 border border-white/10 px-8 py-3 rounded-full">
        <a href="#about"
            class="nav-link active text-purple-400 font-bold drop-shadow-[0_0_8px_rgba(168,85,247,0.8)] transition duration-300">About</a>
        <a href="#experience" class="nav-link text-gray-400 hover:text-white transition duration-300">Experience</a>
        <a href="#skill" class="nav-link text-gray-400 hover:text-white transition duration-300">Skills</a>
        <a href="#work" class="nav-link text-gray-400 hover:text-white transition duration-300">Work</a>
        <a href="#contact" class="nav-link text-gray-400 hover:text-white transition duration-300">Contact</a>
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
        class="hidden absolute top-full left-0 w-full bg-[#07030f]/95 backdrop-blur-xl border-b border-purple-500/20 shadow-[0_10px_30px_rgba(168,85,247,0.1)] transition-all duration-300 md:hidden flex-col pt-4 pb-8 px-6 space-y-4">
        <a href="#about" class="nav-link-mobile text-purple-400 font-bold text-lg">About</a>
        <a href="#experience" class="nav-link-mobile text-gray-300 hover:text-white text-lg">Experience</a>
        <a href="#skill" class="nav-link-mobile text-gray-300 hover:text-white text-lg">Skills</a>
        <a href="#work" class="nav-link-mobile text-gray-300 hover:text-white text-lg">Work</a>
        <a href="#contact" class="nav-link-mobile text-gray-300 hover:text-white text-lg">Contact</a>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // จัดการ Mobile Menu
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const iconMenu = document.getElementById('icon-menu');
        const iconClose = document.getElementById('icon-close');
        const mobileLinks = document.querySelectorAll('.nav-link-mobile');

        btn.addEventListener('click', function() {
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
            iconMenu.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
        });

        // ปิดเมนูมือถือเมื่อกดเลือกลิงก์
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
                menu.classList.remove('flex');
                iconMenu.classList.remove('hidden');
                iconClose.classList.add('hidden');
            });
        });

        // จัดการ Scroll Spy (ไฮไลท์เมนูเมื่อเลื่อนจอ)
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                // ชดเชยความสูงของ navbar เวลากะระยะ
                if (pageYOffset >= sectionTop - 150) {
                    current = section.getAttribute('id');
                }
            });

            // ฟังก์ชันสำหรับเปลี่ยนสีเมนูให้ Active
            const updateActiveLink = (links) => {
                links.forEach(link => {
                    // ล้างคลาส active สีม่วงออกให้หมด
                    link.classList.remove('text-purple-400', 'font-bold',
                        'drop-shadow-[0_0_8px_rgba(168,85,247,0.8)]');
                    link.classList.add('text-gray-400');

                    // เพิ่มสีม่วงให้เมนูที่ตรงกับ Section ที่กำลังดูอยู่
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.remove('text-gray-400');
                        link.classList.add('text-purple-400', 'font-bold',
                            'drop-shadow-[0_0_8px_rgba(168,85,247,0.8)]');
                    }
                });
            };

            // อัปเดตสีทั้งเมนู Desktop และ Mobile
            updateActiveLink(navLinks);
            updateActiveLink(mobileLinks);
        });
    });
</script>
