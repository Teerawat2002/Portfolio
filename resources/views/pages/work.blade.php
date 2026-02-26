<div class="max-w-6xl w-full mx-auto px-6 py-12 mt-12">
    <div class="flex flex-col md:flex-row justify-between items-center mb-12">
        <div>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Featured
                <span class="bg-clip-text text-transparent bg-linear-to-r from-purple-400 to-pink-500">
                    Projects
                </span>
            </h2>
            <p class="text-gray-400 text-lg">ผลงานบางส่วนที่ผมได้พัฒนาขึ้น</p>
        </div>
        <a href="https://github.com/Teerawat2002" target="_blank"
            class="text-purple-400 hover:text-purple-300 font-medium mt-4 md:mt-0 flex items-center gap-2">
            View Github <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                </path>
            </svg>
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        <div
            class="group relative bg-white/5 border border-white/10 rounded-3xl overflow-hidden hover:border-purple-500/50 transition duration-500">
            <div class="h-64 bg-linear-to-br from-[#1a0b2e] to-[#0f081c] w-full flex items-center justify-center p-8">
                <div
                    class="w-full h-full border border-purple-500/30 rounded-xl bg-[#07030f] flex items-center justify-center shadow-[0_0_30px_rgba(168,85,247,0.2)]">
                    <span class="text-gray-500 font-mono">Project Preview / Dashboard</span>
                </div>
            </div>

            <div class="p-8">
                <div class="flex gap-2 mb-4">
                    <span class="text-xs font-semibold bg-red-500/20 text-red-300 px-3 py-1 rounded-full">Laravel</span>
                    <span class="text-xs font-semibold bg-blue-500/20 text-blue-300 px-3 py-1 rounded-full">PHP</span>
                    <span
                        class="text-xs font-semibold bg-green-500/20 text-green-300 px-3 py-1 rounded-full">Tailwind</span>
                    <span
                        class="text-xs font-semibold bg-yellow-500/20 text-yellow-300 px-3 py-1 rounded-full">JavaScript</span>
                    <span
                        class="text-xs font-semibold bg-purple-500/20 text-purple-300 px-3 py-1 rounded-full">CSS</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">Research Project Management Information System</h3>
                <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                    ระบบจัดการโครงงานวิจัยของนักศึกษา รองรับการค้นหา จัดการข้อมูลกลุ่มนักศึกษาและอาจารย์ จัดการสอบ
                    ให้คะแนนและอัปโหลดไฟล์โครงงาน โดยใช้ Laravel เป็น Backend และ Tailwind CSS กับ JavaScript ในการสร้าง
                    UI ที่ตอบสนองและใช้งานง่าย
                </p>
                <a href="#"
                    class="inline-block text-white border border-white/20 hover:bg-white/10 px-6 py-2 rounded-full transition text-sm">View
                    Details</a>
            </div>
        </div>

        <div
            class="group relative bg-white/5 border border-white/10 rounded-3xl overflow-hidden hover:border-purple-500/50 transition duration-500">
            <div class="h-64 bg-linear-to-br from-[#1a0b2e] to-[#0f081c] w-full p-6">
                <div
                    class="w-full h-full border border-purple-500/30 rounded-xl overflow-hidden shadow-[0_0_30px_rgba(168,85,247,0.2)]">
                    <img src="{{ asset('storage/assets/images/portfolio.png') }}" alt="Portfolio Website Preview"
                        class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                </div>
            </div>

            <div class="p-8">
                <div class="flex gap-2 mb-4">
                    <span class="text-xs font-semibold bg-red-500/20 text-red-300 px-3 py-1 rounded-full">Laravel</span>
                    <span
                        class="text-xs font-semibold bg-green-500/20 text-green-300 px-3 py-1 rounded-full">Tailwind</span>
                    <span
                        class="text-xs font-semibold bg-yellow-500/20 text-yellow-300 px-3 py-1 rounded-full">JavaScript</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">Portfolio Website</h3>
                <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                    เว็บไซต์ Portfolio ส่วนตัวที่พัฒนาด้วย Laravel และ Blade ในการจัดการข้อมูลและสร้างหน้าเว็บต่างๆ
                    ใช้ Tailwind CSS ในการออกแบบและตกแต่ง UI ให้ดูทันสมัยและตอบสนองได้ดี รวมถึงใช้ JavaScript
                    เพื่อเพิ่มลูกเล่นและความน่าสนใจให้กับเว็บไซต์
                </p>
                <a href="#"
                    class="inline-block text-white border border-white/20 hover:bg-white/10 px-6 py-2 rounded-full transition text-sm">View
                    Details</a>
            </div>
        </div>

    </div>
</div>
