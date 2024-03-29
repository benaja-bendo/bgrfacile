<div class="overflow-x-auto whitespace-nowrap py-1"> {{--class="filter-container">--}}
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

{{--<div class="overflow-x-auto whitespace-nowrap pb-4">
    <!-- filtres -->
    <div class="flex justify-between items-center">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Filtres</h2>
        <button type="button" class="focus:outline-none" id="btn_close_filter">
            <svg class="fill-current text-gray-800 dark:text-gray-200" width="32" height="32" viewBox="0 0 24 24">
                <path fill="currentColor" d="M10 18v-2h4v2Zm-4-5v-2h12v2ZM3 8V6h18v2Z"/>
            </svg>
        </button>
    </div>
    <!-- recherche -->
    <div class="mt-4">
        <label for="search" class="sr-only">Recherche</label>
        <form class="relative" action="{{ route('course.index') }}" method="GET">
            <input type="text" value="{{ request()->search }}" name="search" id="search" placeholder="Recherche"
                   class="w-full text-gray-800 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <button type="submit"
                    class="shadow bg-white dark:bg-gray-800 rounded-md p-1 absolute right-1 top-1/2 transform -translate-y-1/2">
                <svg width="32" height="32" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M15.5 14H14.71L14.43 13.73C15.41 12.59 16 11.11 16 9.5C16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16C11.11 16 12.59 15.41 13.73 14.43L14 14.71V15.5L19 20.49L20.49 19L15.5 14M9.5 14C7 14 5 12 5 9.5S7 5 9.5 5 14 7 14 9.5 12 14 9.5 14Z"/>
                </svg>
            </button>
        </form>
    </div>
    <!-- form -->
    <form class="hidden md:block" id="form" action="{{ route('course.index') }}" method="GET">
        <!-- button recharger -->
        <div class="mt-4 hidden" id="recharge_form">
            <button type="submit"
                    class="w-full flex gap-1 items-center justify-center shadow bg-blue-500 dark:bg-gray-800 rounded-md p-1">
                <x-svg.reload class="h-4 w-4 fill-current text-gray-100 dark:text-gray-200"/>
                <span class="text-gray-100 dark:text-gray-200">
                    Recharger
                </span>
            </button>
        </div>
        <!-- radio Fre -->
        <div class="mt-4 flex flex-wrap">
            <h3>Type de cours</h3>
            <div class="mt-2 mr-2">
                <input type="radio" name="is_free" id="price1"
                       value="1" {{ request()->is_premium == '1' ? 'checked' : '' }}>
                <label for="price1">Payante</label>
            </div>
            <div class="mt-2">
                <input type="radio" name="is_free" id="price2"
                       value="0" {{ request()->is_premium == '0' ? 'checked' : '' }}>
                <label for="price2">Gratuite</label>
            </div>
        </div>
        <!-- checkbox format -->
        <div class="mt-4 flex flex-wrap">
            <div class="flex items-center justify-between w-full">
                <h3>Format du cours</h3>
            </div>
            @foreach (App\Models\Course::TYPE_CONTENT as $type)
                <div class="mt-2 mr-2">
                    <input type="checkbox" name="type_content[]" id="type_content{{ $type }}"
                           value="{{ $type }}" {{ request()->type_content && in_array($type, request()->type_content) ? 'checked' : '' }}>
                    <label for="type_content{{ $type }}">{{ $type }}</label>
                </div>
            @endforeach
        </div>
        <!-- select categorie -->
        <div class="mt-4">
            <h3 class="text-gray-800 dark:text-gray-200">Contenu proposé par:</h3>
            <label for="categorie" class="sr-only">Catégorie</label>
            <select name="categorie" id="categorie"
                    class="text-gray-800 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option {{ request()->categorie == 'all' ? 'selected' : '' }} class="text-gray-800" value="all">Peu
                    importe
                </option>
                <option {{ request()->categorie == 'anonyme' ? 'selected' : '' }} class="text-gray-800" value="anonyme">
                    Des anonymes
                </option>
                <option {{ request()->categorie == 'etudiant' ? 'selected' : '' }} class="text-gray-800"
                        value="etudiant">Des étudiants
                </option>
                <option {{ request()->categorie == 'professeur' ? 'selected' : '' }} class="text-gray-800"
                        value="professeur">Des formateurs
                </option>
                <option {{ request()->categorie == 'ecole' ? 'selected' : '' }} class="text-gray-800" value="ecole">Une
                    école
                </option>
            </select>
        </div>
        <!-- checkbox cycle -->
        <div class="mt-4 flex flex-wrap">
            <div class="flex items-center justify-between w-full">
                <h3>Cycle</h3>
            </div>
            @forelse ($cycles as $cycle)
                <div class="mt-2 mr-2">
                    <input type="checkbox" name="cycles[]" id="cycle{{ $cycle->id }}"
                           value="{{ $cycle->id }}" {{ request()->cycles && in_array($cycle->id, request()->cycles) ? 'checked' : '' }}>
                    <label for="cycle{{ $cycle->id }}">{{ $cycle->name }}</label>
                </div>
            @empty
                <div class="mt-2">
                    <span>Aucun cycle disponible</span>
                </div>
            @endforelse
        </div>
        <!-- checkbox niveau -->
        <div class="mt-4 flex flex-wrap">
            <div class="flex items-center justify-between w-full">
                <h3>Niveau</h3>
            </div>
            @forelse ($levels as $level)
                <div class="mt-2 mr-2">
                    <input type="checkbox" name="levels[]" id="level{{ $level->id }}"
                           value="{{ $level->id }}" {{ request()->levels && in_array($level->id, request()->levels) ? 'checked' : '' }}>
                    <label for="niveau{{ $level->id }}">{{ $level->name }}</label>
                </div>
            @empty
                <div class="mt-2">
                    <span>Aucun niveau disponible</span>
                </div>
            @endforelse
        </div>
        <!-- checkbox matiere -->
        <div class="mt-4 flex flex-wrap">
            <div class="flex items-center justify-between w-full">
                <h3>Matière</h3>
            </div>
            @forelse ($matieres as $matiere)
                <div class="mt-2 mr-2">
                    <input type="checkbox" name="matieres[]" id="matiere{{ $matiere->id }}"
                           value="{{ $matiere->id }}" {{ request()->matieres && in_array($matiere->id, request()->matieres) ? 'checked' : '' }}>
                    <label for="matiere{{ $matiere->id }}">{{ $matiere->name }}</label>
                </div>
            @empty
                <div class="mt-2">
                    <span>Aucune matière disponible</span>
                </div>
            @endforelse
        </div>
    </form>
</div>--}}

