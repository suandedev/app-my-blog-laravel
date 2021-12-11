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
    <header>
        <nav class="flex flex-row justify-start">
            <div class="bg-indigo-700 w-2/12  ">
                <a class=" flex justify-center text-2xl px-6 py-4 items-center  text-indigo-50 hover:text-blue-400" href="/dashboard">
                    My Blog
                </a>
                <img class="w-7 hidden" src="{{ asset('img/menu1.png') }}" alt="">
            </div>
            <div class="bg-indigo-50 w-10/12 ">
                <span></span>
            </div>
        </nav>
    </header>
    <section class="flex flex-row h-screen overflow-auto">
        <nav class="bg-indigo-500 overflow-auto w-2/12">
            <ul class="flex flex-col mt-6 text-sm">
                <li class="">
                    <a class="block py-2 text-center text-indigo-50 hover:text-indigo-800" href="/dashboard">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="/admin/posts" class="block py-2 text-center text-indigo-50 hover:text-indigo-800">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="" class="block  py-2 text-center text-indigo-50 hover:text-indigo-800 ">
                        Category
                    </a>
                </li>
                <li>
                    <a href="" class="block py-2 text-center text-indigo-50 hover:text-indigo-800">
                        Logout
                    </a>
                </li>
            </ul>
        </nav>
        <section class="w-10/12 p-6">
            <h1 class="text-left font-semibold capitalize text-xl text-gray-800">
                Dashboard
            </h1>
        </section>
    </section>
</body>
</html>