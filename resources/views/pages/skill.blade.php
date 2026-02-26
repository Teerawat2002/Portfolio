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
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor"
                            stroke="currentColor">
                            <path
                                d="M96 96L96 544L544 544L544 96L96 96zM339.8 445.4C339.8 489 314.2 508.9 276.9 508.9C243.2 508.9 223.7 491.5 213.7 470.4L248 449.7C254.6 461.4 260.6 471.3 275.1 471.3C288.9 471.3 297.7 465.9 297.7 444.8L297.7 301.7L339.8 301.7L339.8 445.4zM439.4 508.9C400.3 508.9 375 490.3 362.7 465.9L397 446.1C406 460.8 417.8 471.7 438.5 471.7C455.9 471.7 467.1 463 467.1 450.9C467.1 436.5 455.7 431.4 436.4 422.9L425.9 418.4C395.5 405.5 375.4 389.2 375.4 354.9C375.4 323.3 399.5 299.3 437 299.3C463.8 299.3 483 308.6 496.8 333L464 354C456.8 341.1 449 336 436.9 336C424.6 336 416.8 343.8 416.8 354C416.8 366.6 424.6 371.7 442.7 379.6L453.2 384.1C489 399.4 509.1 415.1 509.1 450.3C509.1 488.1 479.3 508.9 439.4 508.9z" />
                        </svg>
                    </div>
                    <h3 class="text-white font-bold text-lg">JavaScript</h3>
                    <p class="text-gray-500 text-sm mt-1">Logic / DOM</p>
                    <div class="mt-4">
                        <span
                            class="text-xs font-medium px-3 py-1 rounded-full bg-blue-500/10 text-blue-400 border border-blue-500/20">Intermediate
                            (กลาง)</span>
                    </div>
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
                    <div class="mt-4">
                        <span
                            class="text-xs font-medium px-3 py-1 rounded-full bg-fuchsia-500/10 text-fuchsia-400 border border-fuchsia-500/20">Advanced
                            (เชี่ยวชาญ)</span>
                    </div>
                </div>

                <div
                    class="bg-[#0f081c] border border-white/10 p-6 rounded-2xl flex flex-col items-center justify-center group hover:border-blue-500/50 hover:bg-blue-900/20 transition-all duration-300 cursor-pointer">
                    <div class="w-16 h-16 mb-4 text-blue-400 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor" stroke="currentColor">
                            <path
                                d="M472.3 96L96 96L96 472.3C96 491.3 103.6 509.5 117 523C130.4 536.5 148.7 544 167.7 544L472.3 544C491.3 544 509.5 536.4 523 523C536.5 509.6 544 491.3 544 472.3L544 167.7C544 148.7 536.4 130.5 523 117C509.6 103.5 491.3 96 472.3 96zM428.4 495.4C420.7 486.9 416.7 474.7 416.4 458.8L447.7 458.8C447.9 472.9 452.8 479.9 462.5 479.9C467.4 479.9 470.9 478.3 473 475.2C475 472.1 476 467.2 476 460.4C476 455 474.7 450.5 472 447C468.5 442.8 463.9 439.5 458.8 437.5L447.2 432C436.9 427.1 429.4 421.2 424.7 414.4C420.2 407.6 418 398.1 418 386C418 372.4 422 361.4 429.8 352.9C437.9 344.4 448.9 340.2 463 340.2C476.6 340.2 487.1 344.4 494.5 352.7C502 361.1 506 373 506.3 388.6L476.2 388.6C476.4 383.5 475.3 378.4 473.2 373.8C471.5 370.4 468.2 368.7 463.2 368.7C454.4 368.7 450 373.9 450 384.4C450 389.7 451.1 393.8 453.2 397C456.3 400.5 460.2 403.2 464.6 404.8L475.7 409.7C487.2 415 495.4 421.4 500.5 429.1C505.6 436.8 508.1 447.1 508.1 460.1C508.1 475.6 504.1 487.5 495.8 495.8C487.6 504.1 476.3 508.3 461.7 508.3C447.1 508.3 436.1 504.1 428.3 495.6zM327.4 495.4C319.7 486.9 315.7 474.7 315.4 458.8L346.7 458.8C346.9 472.9 351.8 479.9 361.5 479.9C366.4 479.9 369.9 478.3 371.9 475.2C373.9 472.1 374.9 467.2 374.9 460.4C374.9 455 373.6 450.5 371 447C367.5 442.8 362.9 439.5 357.8 437.5L346.2 432C335.9 427.1 328.4 421.2 323.7 414.4C319.2 407.6 317 398.1 317 386C317 372.4 321 361.4 328.8 352.9C336.9 344.4 347.9 340.2 362 340.2C375.6 340.2 386.1 344.4 393.4 352.7C401 361.1 404.9 373 405.3 388.6L375.2 388.6C375.4 383.5 374.3 378.4 372.2 373.8C370.5 370.4 367.2 368.7 362.2 368.7C353.4 368.7 349 373.9 349 384.4C349 389.7 350.1 393.8 352.2 397C355.3 400.5 359.2 403.2 363.6 404.8L374.7 409.7C386.2 415 394.4 421.4 399.5 429.1C404.6 436.8 407.1 447.1 407.1 460.1C407.1 475.6 403 487.5 394.8 495.8C386.6 504.1 375.3 508.3 360.7 508.3C346.1 508.3 335.1 504.1 327.3 495.6zM221.8 496.5C213.4 488.8 209.3 477.3 209.3 462L209.3 386.6C209.3 371.4 213.7 359.9 222.5 352C231.4 344.2 243.2 340.2 257.7 340.2C271.8 340.2 282.9 344.2 291.1 352.2C299.4 360.2 303.6 372.2 303.6 388.1L303.6 394.1L270.5 394.1L270.5 388.3C270.5 382.2 269.2 377.6 266.5 374.7C265.4 373.2 263.9 372 262.2 371.2C260.5 370.4 258.7 370 256.8 370.1C251.4 370.1 247.6 371.9 245.4 375.7C243.1 380.9 242.1 386.5 242.4 392.1L242.4 457.6C242.4 471.3 247.2 478.2 256.8 478.4C261.3 478.4 264.7 476.8 267 473.6C269.5 469.5 270.7 464.8 270.5 460L270.5 455.1L303.6 455.1L303.6 460.2C303.6 470.8 301.5 479.7 297.4 486.8C293.4 493.7 287.5 499.3 280.3 502.8C272.6 506.5 264.2 508.3 255.7 508.1C241.5 508.1 230.2 504.2 221.9 496.5z" />
                        </svg>
                    </div>
                    <h3 class="text-white font-bold text-lg">CSS</h3>
                    <p class="text-gray-500 text-sm mt-1">UI / Styling</p>
                    <div class="mt-4">
                        <span
                            class="text-xs font-medium px-3 py-1 rounded-full bg-fuchsia-500/10 text-fuchsia-400 border border-fuchsia-500/20">Advanced
                            (เชี่ยวชาญ)</span>
                    </div>
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
                    <div class="mt-4">
                        <span
                            class="text-xs font-medium px-3 py-1 rounded-full bg-blue-500/10 text-blue-400 border border-blue-500/20">Intermediate
                            (กลาง)</span>
                    </div>
                </div>

                {{-- <div
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
                    <div class="mt-4">
                        <span
                            class="text-xs font-medium px-3 py-1 rounded-full bg-fuchsia-500/10 text-fuchsia-400 border border-fuchsia-500/20">Advanced
                            (เชี่ยวชาญ)</span>
                    </div>
                </div> --}}
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
                    <div class="mt-4">
                        <span
                            class="text-xs font-medium px-3 py-1 rounded-full bg-blue-500/10 text-blue-400 border border-blue-500/20">Intermediate
                            (กลาง)</span>
                    </div>
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
                    <div class="mt-4">
                        <span
                            class="text-xs font-medium px-3 py-1 rounded-full bg-fuchsia-500/10 text-fuchsia-400 border border-fuchsia-500/20">Advanced
                            (เชี่ยวชาญ)</span>
                    </div>
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
                    <div class="mt-4">
                        <span
                            class="text-xs font-medium px-3 py-1 rounded-full bg-blue-500/10 text-blue-400 border border-blue-500/20">Intermediate
                            (กลาง)</span>
                    </div>
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
                    <div class="mt-4">
                        <span
                            class="text-xs font-medium px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">Basic
                            (พื้นฐาน)</span>
                    </div>
                </div>

                <div
                    class="bg-[#0f081c] border border-white/10 p-6 rounded-2xl flex flex-col items-center justify-center group hover:border-emerald-400/50 hover:bg-emerald-900/20 transition-all duration-300 cursor-pointer">
                    <div class="w-16 h-16 mb-4 text-gray-400 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor"
                            stroke="currentColor">
                            <path
                                d="M316.3 516C314.2 516 312.1 515.4 310.2 514.4L291 503C288.1 501.4 289.5 500.8 290.5 500.5C294.3 499.2 295.1 498.9 299.2 496.5C299.6 496.3 300.2 496.4 300.6 496.6L315.4 505.4C315.9 505.7 316.7 505.7 317.2 505.4L375 472C375.5 471.7 375.9 471.1 375.9 470.4L375.9 403.7C375.9 403 375.6 402.4 375 402.1L317.2 368.8C316.7 368.5 316 368.5 315.4 368.8L257.6 402.1C257 402.4 256.7 403.1 256.7 403.7L256.7 470.4C256.7 471 257.1 471.6 257.6 471.9L273.4 481C282 485.3 287.3 480.2 287.3 475.2L287.3 409.3C287.3 408.4 288 407.6 289 407.6L296.3 407.6C297.2 407.6 298 408.3 298 409.3L298 475.2C298 486.7 291.8 493.2 280.9 493.2C277.6 493.2 274.9 493.2 267.6 489.6L252.4 480.9C248.7 478.7 246.3 474.7 246.3 470.4L246.3 403.7C246.3 399.4 248.6 395.3 252.4 393.2L310.2 359.8C313.9 357.7 318.7 357.7 322.3 359.8L380.1 393.2C383.8 395.4 386.2 399.4 386.2 403.7L386.2 470.4C386.2 474.7 383.9 478.8 380.1 480.9L322.3 514.3C320.6 515.4 318.5 516 316.3 516zM363 450.2C363 437.7 354.6 434.4 336.8 432C318.8 429.6 317 428.4 317 424.2C317 420.7 318.5 416.1 331.8 416.1C343.7 416.1 348.1 418.7 349.9 426.7C350.1 427.5 350.7 428 351.5 428L359 428C359.5 428 359.9 427.8 360.2 427.5C360.5 427.1 360.7 426.7 360.6 426.2C359.4 412.4 350.3 406 331.8 406C315.3 406 305.5 413 305.5 424.6C305.5 437.3 315.3 440.7 331.1 442.3C350 444.2 351.5 446.9 351.5 450.6C351.5 457.1 346.3 459.8 334.1 459.8C318.8 459.8 315.4 456 314.3 448.4C314.2 447.6 313.5 447 312.6 447L305.1 447C304.2 447 303.4 447.7 303.4 448.7C303.4 458.4 308.7 470 334 470C352.5 470 363 462.8 363 450.2zM417.5 400.1C417.5 406.2 412.5 411.2 406.4 411.2C400.3 411.2 395.3 406.2 395.3 400.1C395.3 393.8 400.5 389 406.4 389C412.4 388.9 417.5 393.8 417.5 400.1zM415.7 400.1C415.7 394.9 411.5 390.8 406.3 390.8C401.2 390.8 397 394.9 397 400.1C397 405.3 401.2 409.5 406.3 409.5C411.5 409.4 415.7 405.2 415.7 400.1zM411.2 406.3L408.6 406.3C408.5 405.7 408.1 402.5 408.1 402.4C407.9 401.7 407.7 401.3 406.8 401.3L404.6 401.3L404.6 406.3L402.2 406.3L402.2 393.8L406.5 393.8C408 393.8 410.9 393.8 410.9 397.1C410.9 399.4 409.4 399.9 408.5 400.2C410.2 400.3 410.3 401.4 410.6 403C410.7 404 410.9 405.7 411.2 406.3zM408.4 397.5C408.4 395.8 407.2 395.8 406.6 395.8L404.6 395.8L404.6 399.3L406.5 399.3C408.1 399.3 408.4 398.2 408.4 397.5zM137.3 255C137.3 252.3 135.9 249.9 133.6 248.6L72.3 213.3C71.3 212.7 70.1 212.4 68.9 212.3L68.3 212.3C67.1 212.3 66 212.7 64.9 213.3L3.7 248.6C1.4 249.9 0 252.4 0 255L.1 350C.1 351.3 .8 352.5 1.9 353.2C3 353.9 4.4 353.9 5.6 353.2L42 332.3C44.3 330.9 45.7 328.5 45.7 325.9L45.7 281.5C45.7 278.9 47.1 276.4 49.4 275.1L64.9 266.2C66.1 265.5 67.3 265.2 68.6 265.2C69.9 265.2 71.2 265.5 72.3 266.2L87.8 275.1C90.1 276.4 91.5 278.9 91.5 281.5L91.5 325.9C91.5 328.5 92.9 331 95.2 332.3L131.6 353.2C132.7 353.9 134.2 353.9 135.3 353.2C136.4 352.6 137.1 351.3 137.1 350L137.3 255zM472.5 151.3L472.5 327.7C472.5 330.3 471.1 332.8 468.8 334.1L407.5 369.5C405.2 370.8 402.4 370.8 400.1 369.5L338.8 334.1C336.5 332.8 335.1 330.3 335.1 327.7L335.1 256.9C335.1 254.3 336.5 251.8 338.8 250.5L400.1 215.1C402.4 213.8 405.2 213.8 407.5 215.1L422.8 223.9C424.5 224.9 426.7 223.6 426.7 221.7L426.7 127.7C426.7 124.9 429.7 123.1 432.2 124.5L468.7 144.9C471 146.1 472.5 148.6 472.5 151.3zM426.5 280.2C426.5 279.5 426.1 278.9 425.6 278.6L404.6 266.4C404 266.1 403.3 266.1 402.7 266.4L381.7 278.6C381.1 278.9 380.8 279.5 380.8 280.2L380.8 304.5C380.8 305.2 381.2 305.8 381.7 306.1L402.7 318.2C403.3 318.5 404 318.5 404.5 318.2L425.5 306.1C426.1 305.8 426.4 305.2 426.4 304.5L426.4 280.2L426.5 280.2zM636.3 279.5C638.6 278.2 640 275.7 640 273.1L640 256C640 253.4 638.6 250.9 636.3 249.6L575.4 214.2C573.1 212.9 570.3 212.9 568 214.2L506.7 249.6C504.4 250.9 503 253.4 503 256L503 326.8C503 329.5 504.4 331.9 506.7 333.2L567.6 367.9C569.8 369.2 572.6 369.2 574.9 367.9L611.7 347.4C614.2 346 614.2 342.4 611.7 341L550 305.6C548.8 304.9 548.1 303.7 548.1 302.4L548.1 280.2C548.1 278.9 548.8 277.7 550 277L569.2 265.9C570.3 265.2 571.8 265.2 572.9 265.9L592.1 277C593.2 277.7 594 278.9 594 280.2L594 297.6C594 300.4 597.1 302.2 599.6 300.8L636.3 279.5zM559 283C558.6 283.3 558.3 283.7 558.3 284.2L558.3 297.8C558.3 298.3 558.6 298.8 559 299L570.8 305.8C571.2 306.1 571.8 306.1 572.2 305.8L584 299C584.4 298.7 584.7 298.3 584.7 297.8L584.7 284.2C584.7 283.7 584.4 283.2 584 283L572.2 276.2C571.8 275.9 571.2 275.9 570.8 276.2L559 283zM304.8 326.5L304.8 256.1C304.8 253.5 303.2 251 300.9 249.7L239.8 214.5C237.7 213.3 234.8 213.1 232.4 214.5L171.3 249.7C169 251 167.4 253.4 167.4 256.1L167.4 326.5C167.4 329.3 169.3 331.7 171.4 332.9L232.6 368.1C235 369.5 237.8 369.4 240 368.1L301 332.9C302.8 331.9 304.1 330.2 304.6 328.2C304.7 327.7 304.8 327.1 304.8 326.5zM230.5 201.6L229.7 202.1L230.8 202.1L230.5 201.6zM306.7 331.8L306.3 331.1L306.3 332L306.7 331.8z" />
                        </svg>
                    </div>
                    <h3 class="text-white font-bold text-lg">Node.js</h3>
                    <p class="text-gray-500 text-sm mt-1">Backend Framework</p>
                    <div class="mt-4">
                        <span
                            class="text-xs font-medium px-3 py-1 rounded-full bg-blue-500/10 text-blue-400 border border-blue-500/20">Intermediate
                            (กลาง)</span>
                    </div>
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
                    <div class="mt-4">
                        <span
                            class="text-xs font-medium px-3 py-1 rounded-full bg-blue-500/10 text-blue-400 border border-blue-500/20">Intermediate
                            (กลาง)</span>
                    </div>
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
                    <div class="mt-4">
                        <span
                            class="text-xs font-medium px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">Basic
                            (พื้นฐาน)</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
