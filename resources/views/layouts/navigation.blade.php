<nav class="bg-gray-900 text-white p-4 flex justify-between items-center">
    <div class="flex space-x-4">
        <a href="{{ route('blogs.all') }}" class="hover:text-blue-400">All Blogs</a>
        
        @auth
            <a href="{{ route('blogs.my') }}" class="hover:text-blue-400">My Blogs</a>
        @endauth
    </div>

    <div>
        @auth
            <span class="mr-3 font-semibold text-blue-300">Hello, {{ Auth::user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="bg-red-600 px-3 py-1 rounded text-sm hover:bg-red-700">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="bg-blue-600 px-3 py-1 rounded mr-2 hover:bg-blue-700">Login</a>
            <a href="{{ route('register') }}" class="bg-green-600 px-3 py-1 rounded hover:bg-green-700">Register</a>
        @endauth
    </div>
</nav>
