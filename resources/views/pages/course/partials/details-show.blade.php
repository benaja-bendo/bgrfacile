<div class="h-full shadow-sm sm:rounded-lg bg-white dark:bg-gray-800 px-6 py-8">
    <h3 class="text-xl font-semibold">{{ $course->name }}</h3>
    <hr class="my-2">
    <div class="flex flex-col justify-between items-start">
        <div>
            <p class="text-sm text-gray-500">Par: <a href="#"
                                                     class="font-semibold text-blue-600">{{ $course->users->first()->fullName }}</a>
            </p>
            <p class="text-sm text-gray-500">Cycle: <span
                    class="font-semibold">{{ $course->cycles->first()->name }}</span></p>
            <p class="text-sm text-gray-500">Niveau: <span
                    class="font-semibold">{{ $course->levels->first()->name }}</span></p>
            <p class="text-sm text-gray-500">Sujet: <span
                    class="font-semibold">{{ $course->subjects->first()->name }}</span></p>
        </div>
        {{--        <p class="text-sm text-gray-500">Durée estimée: <span class="font-semibold">X heures</span></p>--}}
    </div>
    <hr class="my-2">
    <p class="text-base text-gray-700">{{ $course->description }}</p>
    <hr class="my-2">
    <h2 class="text-lg font-semibold">Leçons</h2>
    <ul class="space-y-2">
        @forelse ($course->lessons as $lesson)
            <li class="bg-gray-100 dark:bg-gray-700 rounded-md px-4 py-2">
                <a href="?lesson={{ $lesson->id }}"
                   class="text-blue-500 hover:underline">{{ $lesson->name }}</a>
            </li>
        @empty
            <li class="bg-gray-100 dark:bg-gray-700 rounded-md px-4 py-2">
                <p>Aucune leçon</p>
            </li>
        @endforelse
    </ul>
    <hr class="my-2">
</div>
