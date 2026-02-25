@extends('layout.app')

@section('content')
    <div class="max-w-6xl w-full mx-auto px-6 py-12 mt-12">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Tech <span
                    class="text-transparent bg-clip-text bg-linear-to-r from-purple-400 to-pink-500">Arsenal</span></h2>
            <p class="text-gray-400 text-lg">เครื่องมือและเทคโนโลยีที่เชี่ยวชาญ</p>
        </div>

        <div class="mb-16">
            <div class="flex items-center gap-4 mb-8">
                <div class="h-px bg-linear-to-r from-purple-500/50 to-transparent grow"></div>
                <h3 class="text-2xl font-bold text-white">Frontend</h3>
                <div class="h-px bg-linear-to-l from-purple-500/50 to-transparent grow"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div
                    class="bg-[#0f081c] border border-white/10 p-6 rounded-2xl flex flex-col items-center justify-center group hover:border-yellow-400/50 hover:bg-yellow-900/20 transition-all duration-300 cursor-pointer">
                    <div class="w-16 h-16 mb-4 text-yellow-400 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor" stroke="currentColor">
                            <path
                                d="M96 96L96 544L544 544L544 96L96 96zM339.8 445.4C339.8 489 314.2 508.9 276.9 508.9C243.2 508.9 223.7 491.5 213.7 470.4L248 449.7C254.6 461.4 260.6 471.3 275.1 471.3C288.9 471.3 297.7 465.9 297.7 444.8L297.7 301.7L339.8 301.7L339.8 445.4zM439.4 508.9C400.3 508.9 375 490.3 362.7 465.9L397 446.1C406 460.8 417.8 471.7 438.5 471.7C455.9 471.7 467.1 463 467.1 450.9C467.1 436.5 455.7 431.4 436.4 422.9L425.9 418.4C395.5 405.5 375.4 389.2 375.4 354.9C375.4 323.3 399.5 299.3 437 299.3C463.8 299.3 483 308.6 496.8 333L464 354C456.8 341.1 449 336 436.9 336C424.6 336 416.8 343.8 416.8 354C416.8 366.6 424.6 371.7 442.7 379.6L453.2 384.1C489 399.4 509.1 415.1 509.1 450.3C509.1 488.1 479.3 508.9 439.4 508.9z" />
                        </svg>
                    </div>
                    <h3 class="text-white font-bold text-lg">JavaScript</h3>
                    <p class="text-gray-500 text-sm mt-1">Logic / DOM</p>
                </div>

                <div
                    class="bg-[#0f081c] border border-white/10 p-6 rounded-2xl flex flex-col items-center justify-center group hover:border-cyan-500/50 hover:bg-cyan-900/20 transition-all duration-300 cursor-pointer">
                    <div class="w-16 h-16 mb-4 text-cyan-400 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z" />
                        </svg>
                    </div>
                    <h3 class="text-white font-bold text-lg">Tailwind CSS</h3>
                    <p class="text-gray-500 text-sm mt-1">UI / Styling</p>
                </div>

                <div
                    class="bg-[#0f081c] border border-white/10 p-6 rounded-2xl flex flex-col items-center justify-center group hover:border-purple-500/50 hover:bg-purple-900/20 transition-all duration-300 cursor-pointer">
                    <div class="w-16 h-16 mb-4 text-purple-500 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" stroke="currentColor"
                            fill="currentColor">
                            <path
                                d="M365.5 265.4C365.5 243.3 349.9 231.1 322.5 231.1L272.1 231.1L272.1 302.3L314.6 302.3C347.4 302.2 365.5 289 365.5 265.4zM549 252.6C539.5 221.7 538.1 183.8 539.2 154.5C540.3 124 516.5 96 484.5 96L155.7 96C123.6 96 99.9 124.1 101 154.5C102 183.8 100.7 221.7 91.2 252.6C81.6 283.6 65.5 303.2 39 305.7L39 334.2C65.4 336.7 81.6 356.3 91.2 387.3C100.7 418.2 102.1 456.1 101 485.4C99.9 515.9 123.7 543.9 155.7 543.9L484.4 543.9C516.5 543.9 540.2 515.8 539.1 485.4C538.1 456.1 539.4 418.2 548.9 387.3C558.5 356.3 574.6 336.7 601 334.2L601 305.7C574.7 303.2 558.5 283.6 549 252.6zM332.2 439.1L234.3 439.1L234.3 200.8L331.7 200.8C375 200.8 403.4 224.2 403.4 260.2C403.4 285.5 384.3 308.1 359.9 312L359.9 313.3C393.1 316.9 415.4 339.9 415.4 371.6C415.4 413.7 384.1 439.1 332.2 439.1zM322.2 330.4L272.1 330.4L272.1 408.8L324.4 408.8C358.6 408.8 376.7 395.1 376.7 369.3C376.7 343.6 358.1 330.4 322.2 330.4z" />
                        </svg>
                    </div>
                    <h3 class="text-white font-bold text-lg">Bootstrap</h3>
                    <p class="text-gray-500 text-sm mt-1">UI / Styling</p>
                </div>

                <div
                    class="bg-[#0f081c] border border-white/10 p-6 rounded-2xl flex flex-col items-center justify-center group hover:border-red-500/50 hover:bg-red-900/20 transition-all duration-300 cursor-pointer">
                    <div class="w-16 h-16 mb-4 text-red-500 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                        </svg>
                    </div>
                    <h3 class="text-white font-bold text-lg">Blade</h3>
                    <p class="text-gray-500 text-sm mt-1">Templating</p>
                </div>
            </div>
        </div>

        <div class="mb-16">
            <div class="flex items-center gap-4 mb-8">
                <div class="h-px bg-linear-to-r from-blue-500/50 to-transparent grow"></div>
                <h3 class="text-2xl font-bold text-white">Backend & Database</h3>
                <div class="h-px bg-linear-to-l from-blue-500/50 to-transparent grow"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div
                    class="bg-[#0f081c] border border-white/10 p-6 rounded-2xl flex flex-col items-center justify-center group hover:border-indigo-400/50 hover:bg-indigo-900/20 transition-all duration-300 cursor-pointer">
                    <div class="w-16 h-16 mb-4 text-indigo-400 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor">
                            <path
                                d="M320 168.5C491.4 168.5 623.2 240.7 623.2 320C623.2 399.3 491.3 471.5 320 471.5C148.6 471.5 16.8 399.3 16.8 320C16.8 240.7 148.7 168.5 320 168.5zM320 151.7C143.3 151.7 0 227 0 320C0 413 143.3 488.3 320 488.3C496.7 488.3 640 413 640 320C640 227 496.7 151.7 320 151.7zM218.2 306.5C210.3 347 182.4 342.8 148.1 342.8L161.8 272.2C199.8 272.2 225.6 268.1 218.2 306.5zM97.4 414.3L134.1 414.3L142.8 369.5C183.9 369.5 209.4 372.5 233 350.4C259.1 326.4 265.9 283.7 247.3 262.3C237.6 251.1 222 245.6 200.8 245.6L130.1 245.6L97.4 414.3zM283.1 200.7L319.6 200.7L310.9 245.5C342.4 245.5 371.6 243.2 385.7 256.2C400.5 269.8 393.4 287.2 377.4 369.3L340.4 369.3C355.8 289.9 358.7 283.3 353.1 277.3C347.7 271.5 335.4 272.7 305.7 272.7L286.9 369.3L250.4 369.3L283.1 200.7zM505 306.5C497 347.6 468.3 342.8 434.9 342.8L448.6 272.2C486.8 272.2 512.4 268.1 505 306.5zM384.2 414.3L421 414.3L429.7 369.5C472.9 369.5 496.8 372 519.9 350.4C546 326.4 552.8 283.7 534.2 262.3C524.5 251.1 508.9 245.6 487.7 245.6L417 245.6L384.2 414.3z" />
                        </svg>
                    </div>
                    <h3 class="text-white font-bold text-lg">PHP</h3>
                    <p class="text-gray-500 text-sm mt-1">Core Logic</p>
                </div>

                <div
                    class="bg-[#0f081c] border border-white/10 p-6 rounded-2xl flex flex-col items-center justify-center group hover:border-red-500/50 hover:bg-red-900/20 transition-all duration-300 cursor-pointer">
                    <div class="w-16 h-16 mb-4 text-red-500 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M22.052 10.966L12 .354 1.948 10.966A12 12 0 0012 23.646a12 12 0 0010.052-12.68zM12 21.05a9.42 9.42 0 01-7.85-10.3l7.85-8.312 7.85 8.311A9.42 9.42 0 0112 21.051z" />
                        </svg>
                    </div>
                    <h3 class="text-white font-bold text-lg">Laravel</h3>
                    <p class="text-gray-500 text-sm mt-1">Framework / MVC</p>
                </div>

                <div
                    class="bg-[#0f081c] border border-white/10 p-6 rounded-2xl flex flex-col items-center justify-center group hover:border-blue-400/50 hover:bg-blue-900/20 transition-all duration-300 cursor-pointer">
                    <div class="w-16 h-16 mb-4 text-blue-400 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                        </svg>
                    </div>
                    <h3 class="text-white font-bold text-lg">MySQL</h3>
                    <p class="text-gray-500 text-sm mt-1">Relational DB</p>
                </div>

                <div
                    class="bg-[#0f081c] border border-white/10 p-6 rounded-2xl flex flex-col items-center justify-center group hover:border-gray-400/50 hover:bg-gray-800/50 transition-all duration-300 cursor-pointer">
                    <div class="w-16 h-16 mb-4 text-gray-400 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />
                        </svg>
                    </div>
                    <h3 class="text-white font-bold text-lg">SQL Server</h3>
                    <p class="text-gray-500 text-sm mt-1">Database</p>
                </div>
            </div>
        </div>

        <div>
            <div class="flex items-center gap-4 mb-8">
                <div class="h-px bg-linear-to-r from-pink-500/50 to-transparent grow"></div>
                <h3 class="text-2xl font-bold text-white">Tools & Design</h3>
                <div class="h-px bg-linear-to-l from-pink-500/50 to-transparent grow"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div
                    class="bg-[#0f081c] border border-white/10 p-6 rounded-2xl flex flex-col items-center justify-center group hover:border-orange-500/50 hover:bg-orange-900/20 transition-all duration-300 cursor-pointer">
                    <div class="w-16 h-16 mb-4 text-orange-500 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor"
                            stroke="currentColor">
                            <path
                                d="M535.6 300.1L340 104.5C334.6 99 327.2 96 319.6 96C312 96 304.6 99 299.2 104.4L258.5 145L310 196.5C337.1 187.4 362.7 213.3 353.4 240.2L403.1 289.9C437.3 278.1 464.3 320.9 438.6 346.6C412.1 373.1 368.4 343.7 382.6 309.3L336.3 263L336.3 384.9C361.6 397.4 358.6 426.7 345.4 439.9C339 446.3 330.2 450 321.1 450C312 450 303.3 446.4 296.8 439.9C279.2 422.3 285.7 393 308 383.9L308 260.9C287.2 252.4 283.4 230.2 289.4 215.9L238.6 165L104.5 299.1C99 304.6 96 311.9 96 319.5C96 327.1 99 334.5 104.5 339.9L300.1 535.6C305.5 541 312.8 544 320.5 544C328.2 544 335.5 541 340.9 535.6L535.6 340.9C541 335.5 544 328.1 544 320.5C544 312.9 541 305.5 535.6 300.1z" />
                        </svg>
                    </div>
                    <h3 class="text-white font-bold text-lg">Git/Git Desktop</h3>
                    <p class="text-gray-500 text-sm mt-1">Version Control</p>
                </div>

                <div
                    class="bg-[#0f081c] border border-white/10 p-6 rounded-2xl flex flex-col items-center justify-center group hover:border-pink-500/50 hover:bg-pink-900/20 transition-all duration-300 cursor-pointer">
                    <div class="w-16 h-16 mb-4 text-pink-500 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor"
                            stroke="currentColor">
                            <path
                                d="M142 159.8C142 106.9 184.9 64 237.8 64L402.2 64C455.1 64 498 106.9 498 159.8C498 193.3 480.8 222.8 454.8 239.9C480.8 257 498 286.5 498 320C498 372.9 455.1 415.8 402.2 415.8L400.1 415.8C375.3 415.8 352.7 406.4 335.7 390.9L335.7 479.2C335.7 532.8 291.7 576 238.3 576C185.5 576 142 533.2 142 480.2C142 446.7 159.2 417.2 185.2 400.1C159.2 383 142 353.5 142 320C142 286.5 159.2 257 185.2 239.9C159.2 222.8 142 193.3 142 159.8zM304.3 255.6L237.8 255.6C202.2 255.6 173.4 284.4 173.4 320C173.4 355.4 202 384.2 237.4 384.4L304.3 384.4L304.3 255.6zM335.7 320C335.7 355.6 364.5 384.4 400.1 384.4L402.2 384.4C437.8 384.4 466.6 355.6 466.6 320C466.6 284.4 437.8 255.6 402.2 255.6L400.1 255.6C364.5 255.6 335.7 284.4 335.7 320zM237.8 415.8L237.4 415.8C202 416 173.4 444.8 173.4 480.2C173.4 515.6 202.6 544.6 238.3 544.6C274.6 544.6 304.3 515.2 304.3 479.1L304.3 415.7L237.8 415.7zM237.8 95.4C202.2 95.4 173.4 124.2 173.4 159.8C173.4 195.4 202.2 224.2 237.8 224.2L304.3 224.2L304.3 95.4L237.8 95.4zM335.7 224.2L402.2 224.2C437.8 224.2 466.6 195.4 466.6 159.8C466.6 124.2 437.8 95.4 402.2 95.4L335.7 95.4L335.7 224.2z" />
                        </svg>
                    </div>
                    <h3 class="text-white font-bold text-lg">Figma</h3>
                    <p class="text-gray-500 text-sm mt-1">UI Design</p>
                </div>
            </div>
        </div>

    </div>
@endsection
