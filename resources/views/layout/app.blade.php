<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* ตั้งค่าสีพื้นหลังและแสงเรืองรอง (Glow Effect) */
        body {
            background-color: #07030f;
            color: white;
        }

        .glow-button {
            box-shadow: 0 0 25px rgba(168, 85, 247, 0.6);
        }

        .glow-card {
            box-shadow: 0 10px 40px rgba(168, 85, 247, 0.3);
        }
    </style>
</head>

<body class="antialiased min-h-screen flex flex-col font-sans relative overflow-x-hidden">

    <div class="absolute inset-0 z-0 flex justify-evenly opacity-10 pointer-events-none">
        <div class="w-px h-full bg-purple-400"></div>
        <div class="w-px h-full bg-purple-400"></div>
        <div class="w-px h-full bg-purple-400"></div>
        <div class="w-px h-full bg-purple-400"></div>
        <div class="w-px h-full bg-purple-400"></div>
    </div>

    <div class="relative z-10 flex flex-col min-h-screen">
        @include('layout.navbar')

        <main class="flex grow items-center justify-center">
            @yield('content')
        </main>
    </div>

</body>

</html>
