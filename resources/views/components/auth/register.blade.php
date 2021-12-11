<x-auth.main-auth>
    <form class="bg-gray-100 rounded-md shadow-sm max-w-xs mx-auto p-6">
        <img class="block w-24 mx-auto rounded-full border border-indigo-500" src="{{ asset('img/user.png') }}" alt="user">
        <h1 class="text-center text-4xl text-gray-800 font-semibold">
            Register
        </h1>
        <div class="mt-4 flex flex-col justify-start space-y-2">
            <label class="" for="full name">
                full name
            </label>
            <input class="border-transparent focus:ring focus:ring-indigo-400" id="full name" type="text" placeholder="input full name...">
        </div>
        <div class="mt-4 flex flex-col justify-start space-y-2">
            <label class="" for="email">
                email
            </label>
            <input class="border-transparent focus:ring focus:ring-indigo-400" id="email" type="text" placeholder="input email...">
        </div>
        <div class="mt-4 flex flex-col justify-start space-y-2">
            <label class="" for="password">
                password
            </label>
            <input class="border-transparent focus:ring focus:ring-indigo-400" id="password" type="password" placeholder="input password...">
        </div>
        <small class="block text-xs font-thin mt-4 text-center">
            already have account? 
            <a href="/login" class="text-indigo-400">
                login
            </a>
        </small>
       
        <a href="" class="bg-indigo-400 block w-full mt-4 rounded-sm p-2 text-center">
            register
        </a>
    </form>
</x-auth.main-auth>
