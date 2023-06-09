<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("Politique de Cookies") }}
        </h2>
    </x-slot>

    <style>
        /* Ajoutez vos styles personnalisés ici */
    </style>


    <section class="py-12 container my-8 px-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-4">Bienvenue sur bgrfacile</h2>
            <p class="mb-4">Cette politique de cookies explique comment nous utilisons les cookies sur notre site
                web.</p>
            <p class="mb-4">En utilisant notre site, vous acceptez l'utilisation de cookies conformément à cette
                politique.</p>
        </div>
    </section>

    <section class="bg-gray-100 dark:bg-gray-800 py-8 container my-8 px-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-4">Qu'est-ce qu'un cookie ?</h2>
            <p class="mb-4">Un cookie est un petit fichier texte placé sur votre appareil lorsque vous visitez un site
                web.</p>
            <p class="mb-4">Il permet au site web de se souvenir de vos actions et préférences (telles que la connexion,
                la langue, la taille de la police et d'autres paramètres d'affichage) sur une période de temps
                donnée.</p>
        </div>
    </section>

    <section class="py-8 container my-8 px-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-4">Comment nous utilisons les cookies</h2>
            <p class="mb-4">Nous utilisons les cookies pour :</p>
            <ul class="list-disc ml-6">
                <li class="mb-2">Fournir des fonctionnalités essentielles sur notre plateforme.</li>
                <li class="mb-2">Analyser l'utilisation de notre site web et améliorer son contenu et ses
                    fonctionnalités.
                </li>
                <li class="mb-2">Personnaliser votre expérience de navigation en vous proposant du contenu pertinent.
                </li>
            </ul>
        </div>
    </section>

    <section class="bg-gray-100 dark:bg-gray-800 py-8 container my-8 px-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-4">Vos choix concernant les cookies</h2>
            <p class="mb-4">Vous pouvez choisir d'accepter ou de refuser les cookies sur notre site web.</p>
            <p class="mb-4">La plupart des navigateurs web acceptent automatiquement les cookies, mais vous pouvez
                généralement modifier les paramètres de votre navigateur pour refuser les cookies si vous le
                préférez.</p>
            <p class="mb-4">Veuillez noter que le refus des cookies peut affecter certaines fonctionnalités de notre
                site web.</p>
        </div>
    </section>

</x-app-layout>
