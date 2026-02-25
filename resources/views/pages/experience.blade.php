@extends('layout.app')

@section('content')
    <div class="max-w-4xl w-full mx-auto px-6 py-12 mt-12">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">My <span
                    class="text-transparent bg-clip-text bg-linear-to-r from-purple-400 to-pink-500">Journey</span></h2>
            <p class="text-gray-400 text-lg">ประสบการณ์การพัฒนาและการทำงานที่ผ่านมา</p>
        </div>

        <div class="relative border-l border-purple-500/30 ml-4 md:ml-0">

            <div class="mb-12 ml-10 relative">
                <span
                    class="absolute flex items-center justify-center w-5 h-5 bg-purple-500 rounded-full -left-12.25 ring-4 ring-[#07030f] glow-button"></span>
                <div
                    class="bg-white/5 border border-white/10 backdrop-blur-sm p-6 rounded-2xl hover:border-purple-500/50 transition duration-300">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-2">
                        <h3 class="text-xl font-bold text-white">Full Stack Developer</h3>
                        <span
                            class="text-purple-400 text-sm mt-2 md:mt-0 font-mono bg-purple-500/10 px-3 py-1 rounded-full">2024
                            - Present</span>
                    </div>
                    <h4 class="text-gray-300 mb-4 font-medium">Academic Management System</h4>
                    <p class="text-gray-400 text-base leading-relaxed">
                        พัฒนาระบบจัดการโครงงานและสอบวิจัย (Research Exam) รองรับระบบจัดการกลุ่มนักศึกษา
                        และแยกระดับสิทธิ์ผู้ใช้งาน (Admin, Advisor, Teacher) ดูแลทั้งฝั่ง Database และ UI
                    </p>
                </div>
            </div>

            <div class="mb-12 ml-10 relative">
                <span
                    class="absolute flex items-center justify-center w-5 h-5 bg-gray-600 rounded-full -left-12.25 ring-4 ring-[#07030f]"></span>
                <div
                    class="bg-white/5 border border-white/10 backdrop-blur-sm p-6 rounded-2xl hover:border-purple-500/50 transition duration-300">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-2">
                        <h3 class="text-xl font-bold text-white">Web Developer</h3>
                        <span class="text-gray-400 text-sm mt-2 md:mt-0 font-mono bg-white/10 px-3 py-1 rounded-full">march
                            - july
                            2024</span>
                    </div>
                    <h4 class="text-gray-300 mb-4 font-medium">Institution of Thai-German (TGI)</h4>
                    <p class="text-gray-400 text-base leading-relaxed">
                        ฝึกงานที่ สถาบันไทย-เยอรมัน (TGI) พัฒนาเว็บไซต์และระบบประเมิณคู่ค้าภายนอก (Vendor Evaluation) ด้วย
                        YII2 Framework เพื่อเพิ่มทักษะและประสบการณ์
                    </p>
                </div>
            </div>

        </div>
    </div>
@endsection
