@extends('layout.app')

@section('content')
    <div class="max-w-5xl w-full mx-auto px-6 py-12 mt-12 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

        <div>
            <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">Let's work <br><span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-500">Together.</span></h2>
            <p class="text-gray-400 text-lg mb-8">
                สนใจร่วมงาน หรือมีโปรเจกต์ที่อยากให้ผมช่วยพัฒนา สามารถส่งข้อความมาพูดคุยกันได้เลยครับ
            </p>

            <div class="space-y-6">
                <div class="flex items-center gap-4 text-gray-300 group hover:text-white transition">
                    <div
                        class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center border border-white/10 group-hover:border-purple-500/50 group-hover:shadow-[0_0_15px_rgba(168,85,247,0.4)] transition-all">
                        <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                    </div>
                    <span class="text-lg">0902538870</span>
                </div>

                <div class="flex items-center gap-4 text-gray-300 group hover:text-white transition">
                    <div
                        class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center border border-white/10 group-hover:border-pink-500/50 group-hover:shadow-[0_0_15px_rgba(236,72,153,0.4)] transition-all">
                        <svg class="w-5 h-5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <span class="text-lg">teerawat.srsy@gmail.com</span>
                </div>

                <a href="https://github.com/Teerawat2002" target="_blank"
                    class="flex items-center gap-4 text-gray-300 group hover:text-white transition">
                    <div
                        class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center border border-white/10 group-hover:border-gray-400/50 group-hover:shadow-[0_0_15px_rgba(156,163,175,0.4)] transition-all">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <span class="text-lg">github.com/Teerawat2002</span>
                </a>

                <div class="flex items-center gap-4 text-gray-300 group hover:text-white transition">
                    <div
                        class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center border border-white/10 group-hover:border-cyan-500/50 group-hover:shadow-[0_0_15px_rgba(6,182,212,0.4)] transition-all">
                        <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <span class="text-lg">Phetchabun, Thailand</span>
                </div>
            </div>
        </div>

        <div class="bg-white/5 border border-white/10 backdrop-blur-md p-8 rounded-3xl glow-card">
            <form action="#" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-gray-400 text-sm font-medium mb-2">Name</label>
                    <input type="text"
                        class="w-full bg-[#07030f] border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition"
                        placeholder="Your name">
                </div>
                <div>
                    <label class="block text-gray-400 text-sm font-medium mb-2">Email</label>
                    <input type="email"
                        class="w-full bg-[#07030f] border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition"
                        placeholder="john@example.com">
                </div>
                <div>
                    <label class="block text-gray-400 text-sm font-medium mb-2">Message</label>
                    <textarea rows="4"
                        class="w-full bg-[#07030f] border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition"
                        placeholder="Tell me about your project..."></textarea>
                </div>
                <button type="submit"
                    class="w-full bg-gradient-to-r from-purple-600 to-fuchsia-600 text-white font-semibold py-4 rounded-xl hover:opacity-90 transition glow-button hover:scale-[1.02] transform duration-300">
                    Send Message
                </button>
            </form>
        </div>

    </div>
@endsection
