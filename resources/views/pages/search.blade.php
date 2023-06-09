<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("Recherche") }}
        </h2>
    </x-slot>
    <section class="container my-8 px-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Barre de recherche -->
        <div class="flex items-center mb-6">
            <input type="text"
                   class="w-full border border-gray-300 rounded px-4 py-2 mr-4 focus:outline-none focus:border-indigo-500"
                   placeholder="Rechercher...">
            <button class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600">Rechercher</button>
        </div>

        <!-- Résultats de la recherche -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Carte de résultat -->
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4">Titre du résultat</h2>
                <p class="text-gray-600 mb-4">Description du résultat...</p>
                <a href="#" class="text-indigo-500 font-semibold hover:underline">En savoir plus</a>
            </div>

            <!-- Carte de résultat -->
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4">Titre du résultat</h2>
                <p class="text-gray-600 mb-4">Description du résultat...</p>
                <a href="#" class="text-indigo-500 font-semibold hover:underline">En savoir plus</a>
            </div>

            <!-- Carte de résultat -->
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4">Titre du résultat</h2>
                <p class="text-gray-600 mb-4">Description du résultat...</p>
                <a href="#" class="text-indigo-500 font-semibold hover:underline">En savoir plus</a>
            </div>
        </div>
    </section>
</x-app-layout>
