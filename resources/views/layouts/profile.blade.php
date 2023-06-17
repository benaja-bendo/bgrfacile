<x-app-layout>
    <x-slot name="headerProfile">
        <nav class="w-full flex max-w-7xl space-x-8 mx-auto px-4 sm:px-6 lg:px-8 overflow-x-auto">
            <x-nav-profile-link class="flex items-center justify-center gap-1" :href="route('profile.edit')"
                                :active="request()->routeIs('profile.edit')">
                <x-svg.manage-accounts-rounded class="h-5 w-5 text-gray-400 dark:text-gray-300"/>
                {{ __('Mon profil') }}
            </x-nav-profile-link>
            <x-nav-profile-link class="flex items-center justify-center gap-1" :href="route('course.index')"
                                :active="request()->routeIs('course.index')">
                <x-svg.bookmarks-rounded class="h-5 w-5 text-gray-400 dark:text-gray-300"/>
                {{ __('Mes Favoris') }}
            </x-nav-profile-link>
            <x-nav-profile-link class="flex items-center justify-center gap-1" :href="route('course.index')"
                                :active="request()->routeIs('course.index')">
                <x-svg.open-page class="h-5 w-5 text-gray-400 dark:text-gray-300"/>
                {{ __('Mes cours') }}
            </x-nav-profile-link>
            <x-nav-profile-link class="flex items-center justify-center gap-1" :href="route('course.index')"
                                :active="request()->routeIs('course.index')">
                <x-svg.certificate class="h-5 w-5 text-gray-400 dark:text-gray-300"/>
                {{ __('Mes certificats') }}
            </x-nav-profile-link>
            <x-nav-profile-link class="flex items-center justify-center gap-1" :href="route('course.index')"
                                :active="request()->routeIs('course.index')">
                <x-svg.settings class="h-5 w-5 text-gray-400 dark:text-gray-300"/>
                {{ __('Paramètres') }}
            </x-nav-profile-link>
        </nav>
    </x-slot>

    {{ $slot }}

</x-app-layout>
