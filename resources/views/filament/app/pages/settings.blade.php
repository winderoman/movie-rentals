<x-filament-panels::page>
    <h1 class="text-gray-900 dark:text-gray-100">Películas Disponibles</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4">
        @foreach($this->getMovies() as $movie)
            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
            <!-- <x-filament::avatar
                src="{{ asset('storage/' . $movie->movie_image) }}"
                alt="{{ $movie->title }}"
                :circular="false"
            /> -->
                <img class="h-48 w-full rounded-lg object-cover" src="{{ asset('storage/' . $movie->movie_image) }}" alt="{{ $movie->title }}">
            </div>
        @endforeach
    </div>
</x-filament-panels::page>
