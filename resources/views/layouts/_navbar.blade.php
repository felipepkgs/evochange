<nav class="sticky top-0 w-screen shadow-sm bg-red-100 max-h-14">
    <div class="flex justify-between items-center">
        <div class="bg-red-800 text-white flex justify-center items-center p-2">LOGO</div>
        <div class="flex-1 grow text-center flex justify-center">EvoChange</div>
        <div id="UserDisplay" class="flex px-6">
            <div>
                <img class="size-12" src="{{ \Illuminate\Support\Facades\Auth::user()->avatar }}" />
            </div>
            <div class="flex flex-col">
                <div class="tracking-wider">{{ \Illuminate\Support\Facades\Auth::user()->name }}</div>
                <div>
                    <a href="{{ route('logout') }}" class="text-xs">Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>
