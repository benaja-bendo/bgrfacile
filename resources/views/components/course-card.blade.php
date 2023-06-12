<div
    class="resource-card  relative bg-white dark:bg-gray-800 rounded-md p-4 flex flex-col gap-2 aspect-square border-2 border-transparent hover:border-blue-500 dark:hover:border-blue-500 shadow-md hover:shadow-lg transition duration-300 ease-in-out">
    <x-badge-premium-course :isPremium="$course->is_premium"/>

    <div class="flex-1 flex flex-col gap-2">
        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
            {{ $course->name }}
        </h2>
        <p class="text-gray-800 dark:text-gray-200">
            {{ Illuminate\Support\Str::limit($course->description,100) }}
        </p>
        <div>
            <p>Type: Cours</p>
            <p>Format: <span
                    class="text-xs text-gray-500 dark:text-gray-400 bg-gray-200 dark:bg-gray-700 rounded-md p-1">
                PDF
            </span>
            </p>
            <p>Cycle: Collège</p>
            <p>Niveau: Niveau 2</p>
            <p>Matière: Mathématiques</p>
            <p>Contenu proposé par: Professeur 1</p>
            <p>
                publié le: {{ $course->created_at->format('d/m/Y') }}
            </p>
        </div>

        {{--<div class="flex flex-wrap gap-2">
            @foreach ($cour::TYPE_CONTENT as $type)
                @if($cour->type_content == $type)
                    <span class="text-xs text-gray-500 dark:text-gray-400 bg-gray-200 dark:bg-gray-700 rounded-md p-1">
                {{ $type }}
            </span>
                @endif
            @endforeach
        </div>--}}

    </div>
    <a href="{{ route('course.showSlug',['slug'=>$course->slug,'id'=>$course->id])}}"
       class="flex gap-1 items-center justify-center rounded-md p-1 shadow border border-gray-100 bg-blue-500 dark:bg-gray-800 hover:bg-gray-800 dark:hover:bg-blue-500 transition ease-in-out duration-150">
        <x-svg.read-svg class="h-4 w-4 fill-current text-gray-100 dark:text-gray-200"/>
        <span class="text-gray-100 dark:text-gray-200">
                {{ __('Lecture') }}
            </span>
    </a>

    {{--@can('update', $cour)
        <div class="flex gap-2">
            <a href="{{ route('cours.edit', $cour->id) }}"
               class="flex gap-1 items-center justify-center shadow bg-blue-500 dark:bg-gray-800 rounded-md p-1">
                <x-svg.edit class="h-4 w-4 fill-current text-gray-100 dark:text-gray-200" />
                <span class="text-gray-100 dark:text-gray-200">
                    {{ __('Modifier') }}
                </span>
            </a>
            <form action="{{ route('cours.destroy', $cour->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="flex gap-1 items-center justify-center shadow bg-red-500 dark:bg-gray-800 rounded-md p-1">
                    <x-svg.delete class="h-4 w-4 fill-current text-gray-100 dark:text-gray-200" />
                    <span class="text-gray-100 dark:text-gray-200">
                        {{ __('Supprimer') }}
                    </span>
                </button>
            </form>
        </div>
    @endcan--}}
</div>
