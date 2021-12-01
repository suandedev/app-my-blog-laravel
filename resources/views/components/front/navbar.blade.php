<section x-data="{open: false}" class="bg-indigo-500  px-8 flex lg:flex-row lg:justify-between md:flex-row md:justify-between flex-col">
        <header class="flex flex-row justify-between items-center lg:border-none md:border-none border-b border-indigo-900">
            <button class="text-gray-900 py-4 text-2xl font-semibold hover:text-gray-100">
                My
                <strong>
                    Blog
                </strong>
            </button>
            <img @click="open = ! open" class="w-7 lg:hidden md:hidden block" src="{{ asset('img/menu1.png') }}" alt="menu icon">
        </header>
        <nav :class="open ? 'show' : 'hidden'" class="md:block">
            <ul class="flex lg:flex-row md:flex-row flex-col">
                <li class="text-center">
                    <button class="text-gray-100 text-xl py-4 px-3 hover:bg-indigo-600 hover:text-gray-100">
                        Dashboard
                    </button>
                </li>
                <li class="text-center">
                    <button class="text-gray-900 text-xl py-4 px-3 hover:bg-indigo-600 hover:text-gray-100">
                        About
                    </button>
                </li>
                <li class="text-center">
                    <button class="text-gray-900 text-xl py-4  px-3 hover:bg-indigo-600 hover:text-gray-100">
                        Blog
                    </button>
                </li>
                <li class="text-center">
                    <button class="text-gray-900 text-xl py-4 px-3 hover:bg-indigo-600 hover:text-gray-100">
                        Category
                    </button>
                </li>
            </ul>
        </nav>
    </section>