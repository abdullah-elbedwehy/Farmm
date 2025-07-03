<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Farm System')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Tailwind CDN (for simple use) --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    {{-- Vite CSS (if you're using compiled Tailwind with Laravel Vite) --}}
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
</head>

<body class="bg-green-50 text-gray-800">

    {{-- Page Content --}}
    <div class="min-h-screen flex flex-col">
        <main class="flex-grow">
            @yield('content')
        </main>

        {{-- Footer --}}
        <footer class="bg-white border-t text-center py-4 text-sm text-gray-600">
            © {{ date('Y') }} Farm Management System
        </footer>
    </div>

</body>

</html>