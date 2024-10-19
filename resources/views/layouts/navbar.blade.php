<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="{{ url('/') }}" class="text-3xl font-semibold italic text-gray-800">
            <img src="{{ asset('images/aestheticlogo.png') }}" alt="Aesthetic Logo" class="h-12">
        </a>
        <ul class="flex space-x-8 text-gray-700">
            <li><a href="{{ url('landing') }}" class="hover:text-indigo-600">Home</a></li>
            <li><a href="{{ url('explore') }}" class="hover:text-indigo-600">Explore</a></li>
            <li><a href="{{ url('artists') }}" class="hover:text-indigo-600">Artist</a></li>
            <li><a href="{{ url('art-gallery') }}" class="hover:text-indigo-600">Art Gallery</a></li>
        </ul>
        <div>
            <a href="{{ url('login') }}" class="mr-4 text-gray-700 hover:text-indigo-600">Sign In</a>
            <a href="{{ url('register') }}" class="bg-indigo-600 text-white px-6 py-2 rounded-full hover:bg-indigo-700">Join</a>
        </div>
    </div>
</nav>
