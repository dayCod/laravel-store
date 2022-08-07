<div class="flex flex-col justify-center w-screen items-center gap-5">
    <div class="drop-shadow-xl bg-white py-10 px-20 flex flex-col gap-3 rounded-xl">
        <div class="flex justify-center items-center gap-3 mb-4">
            <x-application-logo class="block h-20 w-auto fill-red-600" />
            <p class="text-red-600 font-bold text-xl">Laravel Store</p>
        </div>
        <a href="{{ route('login') }}" class="bg-red-500 w-60 text-center text-white py-2 rounded-md transition-all hover:bg-red-600">Login</a>
        <a href="{{ route('register') }}" class="bg-red-500 w-60 text-center text-white py-2 rounded-md transition-all hover:bg-red-600">Register</a>
    </div>
</div>