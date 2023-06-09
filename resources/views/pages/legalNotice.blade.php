<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("Mentions Légales") }}
        </h2>
    </x-slot>

    <section class="py-12 container my-8 px-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-4">Informations Légales</h2>
            <p class="mb-4">Cette Plateforme d'Apprentissage est un service proposé par bgrfacile.</p>
            <p class="mb-4">Siège social :</p>
            <p class="mb-4">N/A</p>
            <p class="mb-4">Numéro de téléphone : {{ env("NUMBER_PHONE") }}</p>
            <p class="mb-4">Adresse e-mail : {{ env("MAIL") }}</p>
            <p class="mb-4">Numéro d'identification : N/A</p>
        </div>
    </section>

    <section class="bg-gray-100 dark:bg-gray-800 container my-8 px-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-4">Responsabilité</h2>
            <p class="mb-4">Nous nous efforçons de fournir des informations précises et à jour sur notre plateforme.
                Cependant, nous ne pouvons garantir l'exactitude, l'exhaustivité ou la pertinence des informations
                fournies.</p>
            <p class="mb-4">En tant qu'utilisateur, vous êtes responsable de l'utilisation que vous faites des
                informations présentes sur notre site.</p>
        </div>
    </section>

    <section class=" container my-8 px-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-4">Propriété Intellectuelle</h2>
            <p class="mb-4">Tous les contenus présents sur notre plateforme, tels que les textes, les images, les
                vidéos, les logos, etc., sont protégés par les lois sur la propriété intellectuelle.</p>
            <p class="mb-4">Toute reproduction, distribution ou utilisation non autorisée de ces contenus est
                strictement interdite.</p>
        </div>
    </section>

    <section class="bg-gray-100 dark:bg-gray-800 container my-8 px-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-4">Liens Externes</h2>
            <p class="mb-4">Notre plateforme peut contenir des liens vers des sites externes. Nous n'avons aucun
                contrôle sur le contenu et les pratiques de ces sites et déclinons toute responsabilité à leur
                égard.</p>
        </div>
    </section>
</x-app-layout>
