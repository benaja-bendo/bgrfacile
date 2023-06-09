<footer class="pt-8 pb-6 shadow bg-gray-100 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap text-left lg:text-left">
            <div class="w-full lg:w-6/12 px-4 flex flex-row justify-between md:flex-col md:justify-start">
                <div>
                    <h4 class="text-3xl font-semibold text-blueGray-700">
                        <a href="{{ route('home') }}" class="flex gap-2 items-center">
                            <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200"/>
                            <span class="text-2xl font-bold text-gray-800 dark:text-gray-200">Bgrfacile</span>
                        </a>
                    </h4>
                    <h5 class="text-lg dark:text-gray-200 mt-0 mb-2 text-gray-800">
                        Accédez à une éducation de qualité et trouvez les meilleures ressources avec notre plateforme
                        éducative.
                    </h5>
                </div>
                <div>
                    <button type="button" x-bind:class="darkMode ? 'bg-indigo-500' : 'bg-gray-200'"
                            x-on:click="darkMode = !darkMode"
                            class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            role="switch" aria-checked="false">
                        <span class="sr-only">Dark mode toggle</span>
                        <span x-bind:class="darkMode ? 'translate-x-5 bg-gray-700' : 'translate-x-0 bg-white'"
                              class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full shadow ring-0 transition duration-200 ease-in-out">
                            <span
                                x-bind:class="darkMode ? 'opacity-0 ease-out duration-100' : 'opacity-100 ease-in duration-200'"
                                class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                                aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-400"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"/>
                                </svg>
                            </span>
                            <span
                                x-bind:class="darkMode ? 'opacity-100 ease-in duration-200' : 'opacity-0 ease-out duration-100'"
                                class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                                aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="w-full lg:w-6/12">
                <div class="flex flex-wrap items-top mb-6">
                    <div
                        class="w-full lg:w-4/12 px-4 ml-auto border-b md:border-0 border-gray-200 dark:border-gray-700">
                        <ul class="mt-2 md:mt-0">
                            <li>
                                <x-footer-link href="{{ route('about') }}" :active="request()->routeIs('about')">
                                    {{ __('À propos') }}
                                </x-footer-link>
                            </li>
                            <li>
                                <x-footer-link href="{{ route('school.index') }}"
                                               :active="request()->routeIs('school.index')">
                                    {{ __('Établissements scolaires') }}
                                </x-footer-link>
                            </li>
                            <li>
                                <x-footer-link href="{{ route('trainer.index') }}"
                                               :active="request()->routeIs('trainer.index')">
                                    {{ __('Professeurs') }}
                                </x-footer-link>
                            </li>
                            <li>
                                <x-footer-link href="{{ route('course.index') }}"
                                               :active="request()->routeIs('course.index')">
                                    {{ __('Cours') }}
                                </x-footer-link>
                            </li>
                            <li>
                                <x-footer-link href="{{ route('contact') }}"
                                               :active="request()->routeIs('contact')">
                                    {{ __('Contact') }}
                                </x-footer-link>
                            </li>
                        </ul>
                    </div>
                    <div
                        class="w-full lg:w-4/12 px-4 ml-auto border-b md:border-0 border-gray-200 dark:border-gray-700">
                        <ul class="mt-2 md:mt-0">
                            <li>
                                <x-footer-link href="{{ route('legal.notice') }}"
                                               :active="request()->routeIs('legal.notice')">
                                    {{ __('Mentions légales') }}
                                </x-footer-link>
                            </li>
                            <li>
                                <x-footer-link href="{{ route('privacy.policy') }}"
                                               :active="request()->routeIs('privacy.policy')">
                                    {{ __('Politique de confidentialité') }}
                                </x-footer-link>
                            </li>
                            <li>
                                <x-footer-link href="{{ route('cgu') }}"
                                               :active="request()->routeIs('cgu')">
                                    {{ __('Conditions générales d\'utilisation') }}
                                </x-footer-link>
                            </li>
                            <li>
                                <x-footer-link href="{{ route('cookie.policy') }}"
                                               :active="request()->routeIs('cookie.policy')">
                                    {{ __('Politique de cookies') }}
                                </x-footer-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-6 border-blueGray-300">
        <div class="text-center text-gray-400 dark:text-gray-500">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Tous les droits sont réservés.
        </div>
    </div>
</footer>
