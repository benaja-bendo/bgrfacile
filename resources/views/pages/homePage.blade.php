<x-app-layout>
    <x-slot name="headerWithoutSticky">
        <div class="flex flex-col justify-center items-center text-center md:text-left md:flex-row-reverse">
            <div class="flex-grow grid h-full w-full md:w-1/2">
                <div class="flex justify-center items-center relative">
                    <div class="absolute image-allow"></div>
                    <img src="{{ asset("assets/images/debout_avec_livre.webp") }}"
                         alt="eleve debout avec un livre bgrfacile ouvert" class="w-1/2 z-10">
                </div>
            </div>
            <div class="w-full md:w-1/2 flex flex-col gap-1">
                <h1 class="banner-title text-gray-800 dark:text-gray-200">Bienvenue sur notre plateforme éducative</h1>
                <p class="banner-text text-gray-800 dark:text-gray-100">
                    Découvrez une plateforme dédiée à votre réussite éducative. Accédez facilement à des ressources
                    pédagogiques de qualité, explorez les établissements scolaires locaux et trouvez des professeurs
                    particuliers compétents pour renforcer vos connaissances. Vous êtes au bon endroit pour façonner
                    votre parcours éducatif.
                </p>
                <div class="flex justify-center md:justify-start gap-2">
                    <a href="{{ route('course.index') }}"
                       class="text-white dark:text-gray-200  bg-blue-500 dark:bg-blue-500 rounded-lg px-4 py-2">
                        trouver un cours
                    </a>
                    <a href="{{ route('trainer.index') }}"
                       class="text-gray-800 dark:text-gray-200  bg-gray-200 dark:bg-gray-700 rounded-lg px-4 py-2">
                        trouver un professeur
                    </a>
                    <a href="{{ route('school.index') }}"
                       class="text-gray-800 dark:text-gray-200  bg-gray-200 dark:bg-gray-700 rounded-lg px-4 py-2">
                        trouver un établissement
                    </a>
                </div>
            </div>
        </div>
    </x-slot>

    <section class="features my-8 px-4 sm:px-6 lg:px-8">
        <div class="container_home">
            <h2 class="section-title">Cours et Exercices</h2>
            <div class="grid_feature">
                <div class="feature shadow text-gray-800 dark:text-gray-200">
                    <img src="{{ asset('/assets/images/cours.jpg') }}" alt="Cours en ligne" class="feature-image">
                    <h3 class="feature-title dark:text-blue-600">Cours en ligne</h3>
                    <p class="feature-description">Accédez à une bibliothèque de cours en ligne dans divers
                        domaines.</p>
                </div>
                <div class="feature shadow text-gray-800 dark:text-gray-200">
                    <img src="{{ asset('/assets/images/exercices.jpg') }}" alt="Exercices pratiques"
                         class="feature-image">
                    <h3 class="feature-title dark:text-blue-600">Exercices pratiques</h3>
                    <p class="feature-description">Entraînez-vous avec des exercices pratiques pour renforcer vos
                        compétences.</p>
                </div>
                <div class="feature shadow text-gray-800 dark:text-gray-200">
                    <img src="{{ asset('/assets/images/suivi.jpg') }}" alt="Suivi de progression" class="feature-image">
                    <h3 class="feature-title dark:text-blue-600">Suivi de progression</h3>
                    <p class="feature-description">Suivez votre progression dans les cours et les exercices que vous
                        avez
                        terminés.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="schools my-8 px-4 sm:px-6 lg:px-8 ">
        <div class="container_home text-gray-800 dark:text-gray-200">
            <h2 class="section-title">Établissements Scolaires</h2>
            <p class="section-description text-gray-800 dark:text-gray-100">En plus des ressources pédagogiques, nous
                vous offrons la possibilité
                d'explorer
                les établissements scolaires disponibles autour de vous. Que vous cherchiez une école, un collège ou un
                lycée, vous pourrez consulter leurs informations, leurs programmes d'études et les avis d'autres
                étudiants
                pour prendre des décisions éclairées quant à votre éducation.</p>
            <a href="{{ route('school.index') }}" class="btn-primary">Voir les établissements</a>
        </div>
    </section>

    <section class="tutors my-8 px-4 sm:px-6 lg:px-8">
        <div class="container_home">
            <h2 class="section-title">Professeurs Particuliers</h2>
            <div class="grid_feature">
                <div class="feature shadow text-gray-800 dark:text-gray-200">
                    <img src="{{ asset('/assets/images/professeurs.jpg') }}" alt="Professeurs qualifiés"
                         class="feature-image">
                    <h3 class="feature-title dark:text-blue-600">Professeurs qualifiés</h3>
                    <p class="feature-description">Trouvez des professeurs particuliers qualifiés dans différents
                        domaines
                        d'études.</p>
                </div>
                <div class="feature shadow text-gray-800 dark:text-gray-200">
                    <img src="{{ asset('/assets/images/planification.jpg') }}" alt="Planification flexible"
                         class="feature-image">
                    <h3 class="feature-title dark:text-blue-600">Planification flexible</h3>
                    <p class="feature-description">Planifiez des cours particuliers selon votre disponibilité et vos
                        besoins.</p>
                </div>
                <div class="feature shadow text-gray-800 dark:text-gray-200">
                    <img src="{{ asset('/assets/images/competences.jpg') }}" alt="Améliorez vos compétences"
                         class="feature-image">
                    <h3 class="feature-title dark:text-blue-600">Améliorez vos compétences</h3>
                    <p class="feature-description">Recevez un enseignement personnalisé pour progresser rapidement.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="features py-12 container my-8 px-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{--    <section class="container mx-auto px-4 py-8">--}}
        <h2 class="text-3xl font-bold mb-8">Foire aux questions</h2>

        <div class="space-y-4">
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-blue-200">Quels types de cours sont
                        disponibles sur notre plateforme ?</h3>
                    <button class="faq-toggle focus:outline-none text-gray-600 hover:text-gray-800">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                </div>
                <p class="text-gray-700 mt-2">Nous proposons une large gamme de cours dans différentes matières telles
                    que les mathématiques, les sciences, les langues, les sciences sociales et bien plus encore. Vous
                    pouvez explorer notre bibliothèque de cours en ligne et choisir ceux qui correspondent à vos
                    intérêts et besoins.</p>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-blue-200">Comment trouver un professeur
                        particulier sur notre plateforme
                        ?</h3>
                    <button class="faq-toggle focus:outline-none text-gray-600 hover:text-gray-800">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                </div>
                <p class="text-gray-700 mt-2">Notre plateforme offre une liste de professeurs particuliers qualifiés
                    dans divers domaines d'études. Vous pouvez parcourir les profils des enseignants, consulter leurs
                    qualifications, expériences et évaluations pour choisir celui qui correspond le mieux à vos besoins.
                    Vous avez également la possibilité de planifier des cours selon votre disponibilité.</p>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-blue-200">Comment puis-je trouver des
                        informations sur les établissements
                        scolaires près de chez moi ?</h3>
                    <button class="faq-toggle focus:outline-none text-gray-600 hover:text-gray-800">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                </div>
                <p class="text-gray-700 mt-2">Notre plateforme vous permet d'explorer les établissements scolaires
                    disponibles autour de vous. Vous pouvez rechercher des écoles, des collèges ou des lycées dans votre
                    région et accéder à des informations détaillées sur leurs programmes d'études, installations,
                    résultats scolaires et avis d'autres étudiants.</p>
            </div>
        </div>
    </section>


    <x-slot name="scripts">
        <script>
            // Sélectionner tous les boutons de bascule
            const toggleButtons = document.querySelectorAll('.faq-toggle');

            // Ajouter un gestionnaire d'événement à chaque bouton de bascule
            toggleButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Trouver le parent du bouton de bascule qui contient le contenu
                    const faqContainer = button.closest('.faq-container');

                    // Ajouter ou supprimer la classe "hidden" sur le contenu pour le masquer ou l'afficher
                    faqContainer.classList.toggle('hidden');
                });
            });
        </script>

    </x-slot>
</x-app-layout>
