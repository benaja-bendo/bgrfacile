<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Liste des cours') }}
        </h2>
        {{-- if with message flash --}}
        @if(session()->has('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4"
                 role="alert">
                <strong class="font-bold">{{ session()->get('message') }}</strong>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20">
                    <title>Close</title>
                    <path
                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                </svg>
            </span>
            </div>
        @endif
    </x-slot>
    <style>
        /* Styles généraux */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Styles pour le filtre */
        .filter-container {
            position: sticky;
            top: 0;
            background-color: #fff;
            z-index: 1;
            padding: 20px;
            margin-bottom: 20px;
        }

        .filter-container select,
        .filter-container input[type="text"] {
            margin-right: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .filter-container input[type="text"] {
            width: 200px;
        }

        /* Styles pour la liste des ressources */
        .resource-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 20px;
        }

        .resource-card {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 20px;
        }

        .resource-card h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .resource-card p {
            font-size: 14px;
            margin-bottom: 5px;
        }
    </style>

    <section class="container my-8 px-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container">
            <div class="filter-container">
                <select>
                    <option value="">Type de cours</option>
                    <option value="cours">Cours</option>
                    <option value="devoir">Devoir</option>
                </select>
                <select>
                    <option value="">Format de cours</option>
                    <option value="pdf">PDF</option>
                    <option value="video">Vidéo</option>
                    <option value="text">Texte</option>
                </select>
                <select>
                    <option value="">Contenu proposé par</option>
                    <option value="prof1">Professeur 1</option>
                    <option value="prof2">Professeur 2</option>
                    <option value="prof3">Professeur 3</option>
                </select>
                <select>
                    <option value="">Cycle</option>
                    <option value="primaire">Primaire</option>
                    <option value="collège">Collège</option>
                    <option value="lycée">Lycée</option>
                </select>
                <select>
                    <option value="">Niveau</option>
                    <option value="niveau1">Niveau 1</option>
                    <option value="niveau2">Niveau 2</option>
                    <option value="niveau3">Niveau 3</option>
                </select>
                <select>
                    <option value="">Matière</option>
                    <option value="math">Mathématiques</option>
                    <option value="phys">Physique</option>
                    <option value="hist">Histoire</option>
                </select>
                <input type="text" placeholder="Recherche">
            </div>

            <div class="resource-list">
                <div class="resource-card">
                    <h2>Cours de Mathématiques</h2>
                    <p>Type: Cours</p>
                    <p>Format: PDF</p>
                    <p>Contenu proposé par: Professeur 1</p>
                    <p>Cycle: Collège</p>
                    <p>Niveau: Niveau 2</p>
                    <p>Matière: Mathématiques</p>
                </div>
                <div class="resource-card">
                    <h2>Devoir d'Histoire</h2>
                    <p>Type: Devoir</p>
                    <p>Format: Texte</p>
                    <p>Contenu proposé par: Professeur 2</p>
                    <p>Cycle: Lycée</p>
                    <p>Niveau: Niveau 3</p>
                    <p>Matière: Histoire</p>
                </div>
                <!-- Ajoutez d'autres cartes de ressources ici -->
            </div>
        </div>
    </section>

</x-app-layout>
