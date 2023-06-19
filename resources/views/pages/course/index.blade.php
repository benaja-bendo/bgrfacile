<x-app-layout>
    <x-slot name="headerProfile">
        <div class="w-full flex max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto">
            <nav class="w-full flex-1 flex justify-self-start space-x-8  overflow-x-auto">
                <x-nav-profile-link class="flex items-center justify-center gap-1" :href="route('course.index')"
                                    :active="request()->routeIs('course.index')">
                    <x-svg.course class="h-5 w-5 text-gray-400 dark:text-gray-300"/>
                    {{ __('Cours') }}
                </x-nav-profile-link>
                <x-nav-profile-link class="flex items-center justify-center gap-1" :href="route('exercice.index')"
                                    :active="request()->routeIs('exercice.index')">
                    <x-svg.exercise class="h-5 w-5 text-gray-400 dark:text-gray-300"/>
                    {{ __('Exercices') }}
                </x-nav-profile-link>
            </nav>
            <div class="flex items-center justify-self-end">
                <button id="filter" onclick="toggleSlideover()"
                        class="md:hidden inline-flex items-center px-3 py-2 border text-sm leading-4 font-medium rounded-md text-gray-500 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                    <x-svg.filter class="w-6 h-6 text-gray-400 dark:text-gray-300"/>
                </button>
            </div>
        </div>
        {{--<x-flash-message :message="$message ='tu vas bien'"/>--}}
    </x-slot>

    <section class="shadow-sm sm:rounded-lg w-full max-w-7xl mx-auto sm:p-6 lg:p-8 bg-white dark:bg-gray-800">
        <div
            class="grid gap-4 grid-cols-[1fr] md:grid-cols-[minmax(180px,300px),1fr] grid-rows-[auto,1fr] items-start">
            <div class="self-start sticky top-0 mb-2 md:mb-0 p-2 bg-white dark:bg-gray-800 shadow-md rounded-md hidden md:block">
                @include('pages.course.partials.filtre-desktop')
            </div>
            <!--grid cours-->
            <div class="w-full h-full flex flex-col">
                @if(count($courses) == 0)
                    <div class="flex-1">
                        <div class="grid w-full h-full place-items-center">
                            <div class="text-gray-400 dark:text-gray-300 text-2xl font-bold">
                                Aucun cours disponible
                            </div>
                        </div>
                    </div>
                @else
                    <div class="flex-1">
                        <div class="grid w-full h-full grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach($courses as $course)
                                <x-course-card :course="$course"/>
                            @endforeach
                        </div>
                    </div>
                    <div class="mt-4">
                        {{ $courses->links() }}
                    </div>
                @endif
            </div>
        </div>
    </section>

    <div id="slideover-container" class="w-full h-full fixed inset-0 invisible" style="z-index: 200">
        <div onclick="toggleSlideover()" id="slideover-bg"
             class="w-full h-full duration-500 ease-out transition-all inset-0 absolute bg-gray-900 opacity-0"></div>
        <div onclick="toggleSlideover()" id="slideover"
             class="w-96 bg-white h-screen absolute right-0 duration-300 ease-out transition-all translate-x-full">
            <div
                class="absolute cursor-pointer text-gray-600 top-0 w-8 h-8 flex items-center justify-center right-0 mt-5 mr-5">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </div>
            <div class="py-3 px-4 mt-8">
                @include('pages.course.partials.filtre-desktop')
            </div>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            const recharge_form = document.getElementById('recharge_form');
            const form = document.getElementById('form');

            form.addEventListener('change', () => {
                recharge_form.classList.remove('hidden');
            });

            function toggleSlideover() {
                document.getElementById('slideover-container').classList.toggle('invisible');
                document.getElementById('slideover-bg').classList.toggle('opacity-0');
                document.getElementById('slideover-bg').classList.toggle('opacity-50');
                document.getElementById('slideover').classList.toggle('translate-x-full');
            }
        </script>
    </x-slot>
</x-app-layout>
