<nav class="flex justify-between px-20 py-10 items-center bg-white">
    <a href="{{ route('home') }}">
        <h1 class="text-xl text-gray-800 font-bold">Werkvervanger</h1>
    </a>
    <div class="flex items-center">

        <ul class="flex items-center space-x-6">
            <a href="{{ route('home') }}">
                <li class="font-semibold text-gray-700">Home</li>
            </a>
            <a href="{{ route('about') }}">
                <li class="font-semibold text-gray-700">About</li>
            </a>
            <a href="{{ route('auth.login') }}"><i class="fa-solid fa-right-to-bracket"></i></a>
        </ul>
    </div>
</nav>
