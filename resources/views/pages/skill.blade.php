@extends('layout.app')

@section('content')
    <div class="max-w-6xl w-full mx-auto px-6 py-12 mt-12">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Tech <span
                    class="text-transparent bg-clip-text bg-linear-to-r from-purple-400 to-pink-500">Arsenal</span></h2>
            <p class="text-gray-400 text-lg">เครื่องมือและเทคโนโลยีที่เชี่ยวชาญ</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

            <div
                class="bg-[#0f081c] border border-white/10 p-6 rounded-2xl flex flex-col items-center justify-center group hover:border-purple-500/50 hover:bg-purple-900/20 transition-all duration-300 cursor-pointer">
                <div class="w-16 h-16 mb-4 text-red-500 group-hover:scale-110 transition-transform">
                    <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.052 10.966c.013... " />
                    </svg>
                </div>
                <h3 class="text-white font-bold text-lg">Laravel</h3>
                <p class="text-gray-500 text-sm mt-1">Backend / MVC</p>
            </div>

            <div
                class="bg-[#0f081c] border border-white/10 p-6 rounded-2xl flex flex-col items-center justify-center group hover:border-cyan-500/50 hover:bg-cyan-900/20 transition-all duration-300 cursor-pointer">
                <div class="w-16 h-16 mb-4 text-cyan-400 group-hover:scale-110 transition-transform">
                    <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.001 4.8c... " />
                    </svg>
                </div>
                <h3 class="text-white font-bold text-lg">Tailwind CSS</h3>
                <p class="text-gray-500 text-sm mt-1">UI / Styling</p>
            </div>

            <div
                class="bg-[#0f081c] border border-white/10 p-6 rounded-2xl flex flex-col items-center justify-center group hover:border-red-400/50 hover:bg-red-900/20 transition-all duration-300 cursor-pointer">
                <h3 class="text-white font-bold text-xl mt-4">Blade</h3>
                <p class="text-gray-500 text-sm mt-1">Templating</p>
            </div>

            <div
                class="bg-[#0f081c] border border-white/10 p-6 rounded-2xl flex flex-col items-center justify-center group hover:border-blue-500/50 hover:bg-blue-900/20 transition-all duration-300 cursor-pointer">
                <h3 class="text-white font-bold text-xl mt-4">jQuery / Select2</h3>
                <p class="text-gray-500 text-sm mt-1">DOM / UI Components</p>
            </div>

        </div>
    </div>
@endsection
