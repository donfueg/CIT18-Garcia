<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Include Tailwind CSS via Vite -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="max-w-4xl w-full bg-white p-6 rounded-lg shadow-md">
        @yield('content')
    </div>

</body>
</html>
