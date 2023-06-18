<x-app-layout>
    <x-slot name="headerProfile">
        <div x-data="{ filter: false }" class="w-full flex max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto">
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
                <button
                    class="md:hidden inline-flex items-center px-3 py-2 border text-sm leading-4 font-medium rounded-md text-gray-500 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150"
                    x-on:click="filter = ! filter">
                    <x-svg.filter class="w-6 h-6 text-gray-400 dark:text-gray-300"/>
                </button>
            </div>
        </div>
        {{--<x-flash-message :message="$message ='tu vas bien'"/>--}}
    </x-slot>

    <section class="shadow-sm sm:rounded-lg max-w-7xl mx-auto sm:p-6 lg:p-8 bg-white dark:bg-gray-800">
        <div class="grid gap-4 grid-cols-[1fr] md:grid-cols-[minmax(180px,300px),1fr] grid-rows-[auto,1fr] items-start">
            <div class="self-start sticky top-0 mb-2 md:mb-0 p-2 bg-white dark:bg-gray-800 shadow-md rounded-md">
                @include('pages.course.partials.filtre-desktop')
            </div>
            <!--grid cours-->
            <div class="w-full h-full flex flex-col">
                <div class="flex-1">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach($courses as $course)
                            <x-course-card :course="$course"/>
                        @endforeach
                    </div>
                </div>
                <div class="mt-4">
                    {{ $courses->links() }}
                </div>
            </div>
        </div>
    </section>

    <x-slot name="scripts">
        <script>
            function filter() {
                return {
                    open: false,
                    show() {
                        this.open = true
                    },
                    close() {
                        this.open = false
                    },
                    isOpen() {
                        return this.open === true
                    },
                    closeIfClickOutside() {
                        window.addEventListener('click', (event) => {
                            if (this.isOpen() && !this.$refs.dropdown.contains(event.target)) {
                                this.close()
                            }
                        })
                    }
                }
            }
        </script>

        <script>
            const recharge_form = document.getElementById('recharge_form');
            const form = document.getElementById('form');
            const btn_close_filter = document.getElementById('btn_close_filter');

            form.addEventListener('change', () => {
                recharge_form.classList.remove('hidden');
            });
            btn_close_filter.addEventListener('click', () => {
                // check if form has hidden class
                if (form.classList.contains('hidden')) {
                    // remove hidden class
                    form.classList.remove('hidden');
                } else {
                    // add hidden class
                    form.classList.add('hidden');
                }
            });

        </script>
    </x-slot>
</x-app-layout>
