<div class="text-center max-w-5xl mx-auto px-4 mt-12 flex flex-col items-center">

    <div
        class="border border-purple-500/40 bg-purple-500/10 text-purple-200 px-5 py-2 rounded-full text-sm font-medium mb-8 flex items-center gap-2">
        <span class="w-2.5 h-2.5 rounded-full bg-purple-500" style="box-shadow: 0 0 10px #a855f7;"></span>
        Full Stack Developer
    </div>

    <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
        Building Digital <br>
        <span class="text-transparent bg-clip-text bg-linear-to-r from-purple-400 to-pink-500">
            Experiences with Code
        </span>
    </h1>

    <div class="mb-10 max-w-2xl mx-auto space-y-4">
        <p class="text-gray-300 text-lg md:text-xl leading-relaxed">
            สวัสดีครับ 👋 ผมเป็นนักพัฒนาเว็บไซต์ที่หลงใหลในการเขียนโค้ดและการแก้ปัญหา
            มีความเชี่ยวชาญในการสร้าง Web Application ด้วย <span class="text-purple-400 font-semibold">Laravel
                Framework</span>
            และออกแบบ UI ที่ทันสมัยด้วย <span class="text-cyan-400 font-semibold">Tailwind CSS</span>
        </p>
        <p class="text-gray-500 text-base md:text-lg">
            I specialize in backend development, crafting modern UIs, and building scalable digital experiences.
            Always ready to learn new things and tackle challenging problems.
        </p>
    </div>

    <a href="{{ url('/work') }}"
        class="bg-linear-to-r from-purple-600 to-fuchsia-600 text-white font-semibold py-4 px-12 rounded-full text-lg hover:scale-105 transition transform duration-300 glow-button">
        View My Work
    </a>

    <div class="mt-24 relative w-full h-64 justify-center perspective-1000 hidden md:flex">

        <div
            class="absolute transform -rotate-12 -translate-x-32 w-80 h-48 bg-linear-to-br from-purple-900 to-[#1e0a3c] rounded-2xl border border-white/10 p-6 glow-card backdrop-blur-lg">
            <div class="flex justify-between items-center mb-8">
                <span class="text-white/80 font-semibold">Backend</span>
                <span class="text-purple-400">Laravel</span>
            </div>
            <div class="text-white text-xl font-mono tracking-widest">MVC • API • SQL</div>
        </div>

        <div
            class="absolute transform rotate-6 translate-x-16 z-10 w-80 h-48 bg-linear-to-br from-fuchsia-600 to-purple-800 rounded-2xl border border-white/20 p-6 glow-card backdrop-blur-lg">
            <div class="flex justify-between items-center mb-8">
                <span class="text-white font-bold">Frontend</span>
                <span class="text-fuchsia-200">Tailwind CSS</span>
            </div>
            <div class="text-white text-xl font-mono tracking-widest">UI/UX • Blade</div>
        </div>

    </div>
</div>
