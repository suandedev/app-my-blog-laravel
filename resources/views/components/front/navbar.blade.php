<section x-data="{open: false}" class="bg-indigo-500  px-8 flex lg:flex-row lg:justify-between md:flex-row md:justify-between flex-col">
    <header class="flex flex-row justify-between items-center lg:border-none md:border-none border-b border-indigo-900">
        <a href="/" class="text-gray-900 py-4 text-2xl font-semibold hover:text-gray-100">
            My
            <strong>
                Blog
            </strong>
        </a>
        <img @click="open = ! open" class="w-7 lg:hidden md:hidden block" src="{{ asset('img/menu1.png') }}" alt="menu icon">
    </header>
    <nav :class="open ? 'show' : 'hidden'" class="md:block">
        <ul class="flex lg:flex-row md:flex-row flex-col">
            <li class="text-center">
                <a href="/" class="text-gray-100 block text-xl py-4 px-3 hover:bg-indigo-600 hover:text-gray-100">
                    Dashboard
                </a>
            </li>
            <li class="text-center">
                <a href="/about" class="text-gray-900 block text-xl py-4 px-3 hover:bg-indigo-600 hover:text-gray-100">
                    About
                </a>
            </li>
            <li class="text-center">
                <a href="/posts" class="text-gray-900 block text-xl py-4  px-3 hover:bg-indigo-600 hover:text-gray-100">
                    Blog
                </a>
            </li>
            <li class="text-center">
                <a href="/categories" class="text-gray-900 block text-xl py-4 px-3 hover:bg-indigo-600 hover:text-gray-100">
                    Category
                </a>
            </li>
        </ul>
    </nav>
</section>