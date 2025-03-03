<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <ul class="flex space-x-6">
                <li><a href="#" class="text-gray-700 hover:text-blue-600 transition font-medium">Home</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-600 transition font-medium">Features</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-600 transition font-medium">About</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-600 transition font-medium">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto my-12 px-6">
        <div class="bg-white shadow-lg rounded-lg p-8">
            <!-- Dynamic Content -->
            <div class="mt-8">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white py-6 text-center text-gray-500 text-sm border-t">
        &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
    </footer>

</body>
</html>