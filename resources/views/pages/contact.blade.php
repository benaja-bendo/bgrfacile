<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contactez-nous') }}
        </h2>
        <p class="text-gray-600 dark:text-gray-400">
            {{ __('Vous avez une question ? n\'hésitez pas à nous contacter.') }}
        </p>
    </x-slot>
    <style>
        /* Ajoutez vos styles personnalisés ici */
    </style>


    <section class="bg-gray-100 dark:bg-gray-800 py-12 container my-8 px-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-2xl font-bold mb-4">Nous sommes là pour vous aider</h2>
                    <p class="mb-4">Si vous avez des questions, des suggestions ou des préoccupations, n'hésitez pas à
                        nous contacter. Nous serons ravis de vous aider dans la mesure du possible.</p>
                    <p class="mb-4">Vous pouvez nous contacter par le biais du formulaire ci-dessous ou par les
                        coordonnées fournies.</p>
                </div>
                <div class="bg-white p-6 rounded shadow-md">
                    @if(session('success'))
                        <div class="bg-green-500 text-white py-4 px-6 rounded">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                            <input type="text" id="name" name="name"
                                   value="{{ old('name') }}"
                                   class="text-gray-800 mt-1 block w-full p-2 border {{ $errors->has('name') ? 'border-red-500' : 'border-gray-300' }} rounded">
                            @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Adresse e-mail</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                   class="text-gray-800 mt-1 block w-full p-2 border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} rounded">
                            @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                            <textarea id="message" name="message" rows="4"
                                      class="text-gray-800 mt-1 block w-full p-2 border {{ $errors->has('message') ? 'border-red-500' : 'border-gray-300' }} rounded"></textarea>
                            @error('message')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="text-right">
                            <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                                Envoyer
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 container my-8 px-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-4">Coordonnées</h2>
            <hr class="mb-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-2">Adresse</h3>
                    <p class="italic">Aucune adresse n'est disponible pour le moment.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-2">Téléphone</h3>
                    <p>+33 123 456 789</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-2">Réseaux sociaux</h3>
                    <p>
                        <a href="{{ env('FACEBOOK_LINK') }}" class="text-blue-500 hover:text-blue-600 underline mr-4">Facebook</a>
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-2">E-mail</h3>
                    <p>
                        <a href="mailto:{{ env('MAIL_FROM_ADDRESS') }}"
                           class="text-blue-500 hover:text-blue-600 underline">{{ env('MAIL_FROM_ADDRESS') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
