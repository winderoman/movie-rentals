<x-filament-panels::page>
    <h1 class="text-gray-900 dark:text-gray-100">Películas Disponibles</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($this->getMovies() as $movie)
            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
                {{-- <img src="{{ asset('storage/' . $movie->movie_image) }}" alt="{{ $movie->title }}" class="w-full h-48 object-cover rounded-md"> --}}
                <h2 class="text-xl font-semibold mt-2 text-gray-900 dark:text-gray-100">{{ $movie->title }}</h2>
                <p class="text-gray-700 dark:text-gray-300">{{ $movie->description }}</p>
            </div>
        @endforeach
    </div>
</x-filament-panels::page>
