<x-app-layout>
    <x-slot name="header">
        <div x-data="{ filter: false }">
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Liste des cours') }}
                </h2>
                <button
                    class="flex gap-1 items-center text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none"
                    x-on:click="filter = ! filter">
                    <x-svg.filter-list-on
                        class="w-6 h-6"/>
                    <span>Filtrer le contenu</span>
                </button>
            </div>
            <template x-if="filter">
                @include('pages.course.partials.filtre-mobile')
            </template>
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
