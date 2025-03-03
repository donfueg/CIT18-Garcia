<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Include Tailwind CSS via Vite -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center min-h-screen">

    <!-- Main container -->
    <div class="max-w-4xl w-full bg-white p-8 rounded-lg shadow-lg">
        <!-- Header section -->
        <header class="mb-6">
            <h1 class="text-4xl font-extrabold text-center text-gray-800">{{ config('app.name', 'Laravel') }}</h1>
            <p class="text-center text-gray-600 mt-2">Welcome to {{ config('app.name', 'Laravel') }}. Your one-stop solution for all your needs.</p>
        </header>

        <!-- Content section -->
        <div class="content mb-6">
            @yield('content')
        </div>

        <!-- Footer section -->
        <footer class="mt-6 text-center text-gray-600">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
            <p class="text-sm">Follow us on 
                <a href="#" class="text-blue-500 hover:underline">Facebook</a>, 
                <a href="#" class="text-blue-400 hover:underline">Twitter</a>, and 
                <a href="#" class="text-pink-500 hover:underline">Instagram</a>.
            </p>
        </footer>
    </div>

</body>
</html>