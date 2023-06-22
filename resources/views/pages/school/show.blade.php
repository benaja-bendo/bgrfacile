<x-app-school>
    <div>
        <div class="py-4 text-gray-800 dark:text-gray-200" style="background-color: #133b55">
            <div class="max-w-7xl mx-auto flex justify-start">
                <div class="flex gap-4">
                    <div>
                        <img src="https://cataas.com/cat" class="w-40 h-40 rounded-md object-cover" alt="avatar">
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold">School name</h1>
                        <div class="flex space-x-4 mb-2">
                            <p class="border-r pr-4">Address</p>
                            <p class="border-r pr-4">City</p>
                            <p>Country</p>
                        </div>
                        <div class="flex space-x-4">
                            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                <x-svg.phone class="inline-flex h-8 w-auto fill-current"/>
                                <span>Call</span>
                            </button>
                            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                <x-svg.mail class="inline-flex h-8 w-auto fill-current"/>
                                <span>Mail</span>
                            </button>
                            <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                <x-svg.website class="inline-flex h-8 w-auto fill-current"/>
                                <span>Website</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto" style="width: 80%">
        <div class="w-full">
            show school
        </div>
    </div>
</x-app-school>
