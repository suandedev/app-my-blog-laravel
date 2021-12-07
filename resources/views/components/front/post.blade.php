<x-main>
    <h1 class="text-xl font-semibold text-center">
        singgle post by made
    </h1>

    <section class="flex flex-row space-x-2 max-w-lg justify-center bg-gray-100 rounded-md shadow-sm mt-4">
        <div class="relative">
            <img class="block w-full h-full  object-cover rounded-l-md" src="{{ asset('img/pensil.jpg') }}" alt="">
            <p class="bg-gray-800 bg-opacity-50 text-gray-50 absolute top-3 left-3">
                1 minute ago..
            </p>
        </div>
        <article class="w-4/5">
            <h1 class="text-center text-xl text-gray-800 font-semibold capitalize mt-4">
                judul post pertama
            </h1>
            <p class="text-center mt-3">
            <small>
                    by 
                    <a href="" class="text-indigo-500">
                        made
                    </a>
                    kategory 
                    <a href="" class="text-indigo-500">
                        personal
                    </a>
            </small>
            </p>
            <p class="text-gray-800">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quo odio unde eligendi sunt, vel totam tempore repellat enim voluptatum, deserunt quidem? Nam quos officia suscipit dolor, amet ipsum a porro ab libero, quaerat, nemo commodi fuga! Consectetur omnis delectus ex, inventore amet, animi numquam neque consequuntur beatae dolorem perspiciatis!
            </p>
            <a href="/posts" class="inline-block my-6 px-4 py-3 bg-indigo-500 hover:bg-indigo-600 text-gray-100 rounded-md hover:shadow-md">
                kembali
            </a>
        </article>
    </section>
</x-main>