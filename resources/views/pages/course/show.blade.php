<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ $course->name }}
            </h3>
            <div class="flex items-center">
                <div class="button-group">
                    <button id="favoriteButton"
                            class="inline-flex items-center px-3 py-2 border text-sm leading-4 font-medium rounded-md text-gray-500 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                        <x-svg.favorite-border class="w-5 h-5"/>
                    </button>
                    <button id="showButton"
                            class="md:hidden button inline-flex items-center px-3 py-2 border text-sm leading-4 font-medium rounded-md text-gray-500 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                        <x-svg.eye-show class="w-5 h-5"/>
                        <span class="ml-2">Détails</span>
                    </button>
                </div>
            </div>
        </div>
    </x-slot>


    <section style="width: 100%" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid gap-4 grid-cols-[1fr] md:grid-cols-[minmax(180px,300px),1fr] grid-rows-[auto,1fr] items-start">
            <div class="hidden md:block">
                @include('pages.course.partials.details-show')
            </div>
            <div class="w-full h-full shadow-sm sm:rounded-lg bg-white dark:bg-gray-800 px-6 py-8">
                @if(count($course->lessons) > 0)
                    <div id="editorjs" class="prose w-full"></div>
                @else
                    <div class="flex flex-col items-center justify-center">
                        <x-svg.empty class="w-16 h-16 text-gray-400 dark:text-gray-600"/>
                        <span class="text-gray-400 dark:text-gray-600">Aucune leçon pour le moment</span>
                    </div>
                @endif

            </div>
        </div>
    </section>

    <div id="bottomSheet"
         class="block md:hidden w-full shadow-md sm:rounded-lg bg-white dark:bg-gray-800 px-6 py-8 z-50">
        <button
            class="w-full text-gray-200 flex gap-1 items-center justify-center rounded-md p-1 shadow border border-gray-100 bg-blue-500 dark:bg-gray-800 hover:bg-gray-800 dark:hover:bg-blue-500 transition ease-in-out duration-150"
            id="closeButton">Fermer
        </button>
        <!-- Contenu de la feuille inférieure -->
        @include('pages.course.partials.details-show')
    </div>

    <x-slot name="scripts">
        @php
            if(count($course->lessons) > 0){
                if(request()->query('lesson') && filter_var(request()->query('lesson'), FILTER_VALIDATE_INT)){
                    $data = Illuminate\Support\Js::from($course->lessons->where('id', request()->query('lesson'))->first()->contentTexts->first()->content);
                }
                else{
                    $data = Illuminate\Support\Js::from($course->lessons->first()->contentTexts->first()->content);

                }
                }
            else{
                $data = Illuminate\Support\Js::from([]);
                }
            //                            foreach ($course->lessons as $lesson) {
            //                                foreach ($lesson->contentTexts as $contentText) {
            //                                    $data = Illuminate\Support\Js::from($contentText->content);
            //                                }
            //                            }
        @endphp
        <script>
            const showButton = document.getElementById('showButton');
            const bottomSheet = document.querySelector('#bottomSheet');
            const closeButton = document.getElementById('closeButton');

            showButton.addEventListener('click', function () {
                bottomSheet.classList.toggle('open');
                // bottomSheet.classList.add('open');
            });

            function closeBottomSheet() {
                bottomSheet.classList.remove('open');
            }

            closeButton.addEventListener('click', closeBottomSheet);

            // document.addEventListener('click', function (event) {
            //     const target = event.target;
            //     if (target !== showButton && !bottomSheet.contains(target)) {
            //         closeBottomSheet();
            //     }
            // });
        </script>
        {{--        <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>--}}
        <script type="module">
            import EditorJS from 'https://cdn.skypack.dev/@editorjs/editorjs';
            import Header from 'https://cdn.skypack.dev/@editorjs/header';

            const data = {{ $data }};

            const editor = new EditorJS({
                holder: 'editorjs',
                tools: {
                    header: {
                        class: Header,
                        shortcut: 'CMD+SHIFT+H',
                    }

                },
                onReady: () => {
                    console.log('Editor.js is ready to work!')
                },
                data: data,
                readOnly: true
            });
        </script>
    </x-slot>
</x-app-layout>
