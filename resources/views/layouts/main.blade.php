<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>My Blog</title>

    <script defer src="https://unpkg.com/alpinejs@3.7.0/dist/cdn.min.js"></script>
</head>
<body class="bg-indigo-200 antialiased font-sans">
    <x-front.navbar/>
    <main class="mt-6 mx-8">
        {{ $slot }}
    </main>
</body>
</html>