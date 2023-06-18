<div class="md:overflow-y-auto md:h-[calc(100vh-5rem)]">{{-- md:h-[calc(100vh-10rem)]"> --}}
    <!-- filtres  -->
    <div class="mb-4 text-gray-800 flex justify-between items-center">
        <x-svg.filter class="w-6 h-6 text-gray-400 dark:text-gray-300"/>
    </div>
    <!-- recherche -->
    <div class="mt-4">
        <label for="search" class="sr-only">Recherche</label>
        <form class="relative" action="{{ url()->current() }}" method="GET">
            <input type="text" value="{{ request()->search }}" name="search" id="search" placeholder="Recherche"
                   class="w-full text-gray-800 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <button type="submit"
                    class="shadow bg-white dark:bg-gray-800 rounded-md p-1 absolute right-1 top-1/2 transform -translate-y-1/2">
                <x-svg.search width="32" height="32" class="fill-current text-gray-400 dark:text-gray-300"/>
            </button>
        </form>
    </div>
    <!-- form -->
    <form class="hidden md:block" id="form" action="{{ url()->current() }}" method="GET">
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
        <div class="mt-4">
            <h3>Type de cours</h3>
            <div class="mt-2">
                <input type="radio" name="is_premium" id="price1" value="1" {{ request()->is_premium == '1'||request()->is_premium == null ? 'checked' : ''
                }} />

                <label for="price1">Gratuite</label>
            </div>
            <div class="mt-2">
                <input type="radio" name="is_premium" id="price2" value="0" {{ request()->is_premium == '0' ? 'checked' : ''
                }} />
                <label for="price2">Payante</label>
            </div>
        </div>
        <!-- checkbox format -->
        <div class="mt-4">
            <div class="flex items-center justify-between">
                <h3>Format du cours</h3>
            </div>
            @foreach (App\Models\Course::TYPE_CONTENT as $type)
                <div class="mt-2">
                    <input type="checkbox" name="type_content[]" id="type_content{{ $type }}" value="{{ $type }}" {{
                    request()->type_content && in_array($type, request()->type_content) ? 'checked' : '' }} />
                    <label for="type_content{{ $type }}">{{ $type }}</label>
                </div>
            @endforeach
        </div>
        <!-- select categorie -->
        <div class="mt-4">
            <h3 class="text-gray-800 dark:text-gray-200">Contenue proposé par:</h3>
            <label for="categorie" class="sr-only">Catégorie</label>
            <select name="categorie" id="categorie"
                    class="text-gray-800 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option {{ request()->categorie == 'all' ? 'selected' : '' }} class="text-gray-800" value="all">Peu
                    importe
                </option>
                <option {{ request()->categorie == 'anonyme' ? 'selected' : '' }} class="text-gray-800"
                        value="anonyme">des anonymes
                </option>
                <option {{ request()->categorie == 'etudiant' ? 'selected' : '' }} class="text-gray-800"
                        value="etudiant">des étudiants
                </option>
                <option {{ request()->categorie == 'professeur' ? 'selected' : '' }} class="text-gray-800"
                        value="professeur">des formateurs
                </option>
                <option {{ request()->categorie == 'ecole' ? 'selected' : '' }} class="text-gray-800" value="ecole">
                    une école
                </option>
            </select>
        </div>
        <!-- checkbox cycle -->
        <div class="mt-4">
            <div class="flex items-center justify-between">
                <h3>Cycle</h3>
                {{-- <button
                    class="flex gap-0.5 items-center justify-center flex-nowrap text-xs text-red-400 dark:text-red-600">
                    <x-svg.reload class="h-3 w-3 fill-current" />
                    <span>
                        recharger les niveaux
                    </span>
                </button> --}}
            </div>
            @forelse ($cycles as $cycle)
                <div class="mt-2">
                    <input type="checkbox" name="cycles[]" id="cycle{{ $cycle->id }}" value="{{ $cycle->id }}" {{
                    request()->cycles && in_array($cycle->id, request()->cycles) ? 'checked' : '' }} />
                    <label for="cycle{{ $cycle->id }}">{{ $cycle->name }}</label>
                </div>
            @empty
                <div class="mt-2">
                <span>
                    Aucun cycle disponible
                </span>
                </div>
            @endforelse
        </div>
        <!-- checkbox niveau -->
        <div class="mt-4">
            <div class="flex items-center justify-between">
                <h3>Niveau</h3>
                {{-- <button
                    class="flex gap-0.5 items-center justify-center flex-nowrap text-xs text-red-400 dark:text-red-600">
                    <x-svg.reload class="h-3 w-3 fill-current" />
                    <span>
                        recharger les matières
                    </span>
                </button> --}}
            </div>
            @forelse ($levels as $level)
                <div class="mt-2">
                    <input type="checkbox" name="levels[]" id="level{{ $level->id }}" value="{{ $level->id }}" {{
                    request()->levels && in_array($level->id, request()->levels) ? 'checked' : '' }} />
                    <label for="niveau{{ $level->id }}">{{ $level->name }}</label>
                </div>
            @empty
                <div class="mt-2">
                <span>
                    Aucun niveau disponible
                </span>
                </div>
            @endforelse
        </div>
        <!-- checkbox matiere -->
        <div class="mt-4">
            <div class="flex items-center justify-between">
                <h3>Matière</h3>
            </div>
            @forelse ($matieres as $matiere)
                <div class="mt-2">
                    <input type="checkbox" name="matieres[]" id="matiere{{ $matiere->id }}" value="{{ $matiere->id }}" {{
                    request()->matieres && in_array($matiere->id, request()->matieres) ? 'checked' : '' }} />
                    <label for="matiere{{ $matiere->id }}">{{ $matiere->name }}</label>
                </div>
            @empty
                <div class="mt-2">
                <span>
                    Aucune matiere disponible
                </span>
                </div>
            @endforelse
        </div>
    </form>
</div>
