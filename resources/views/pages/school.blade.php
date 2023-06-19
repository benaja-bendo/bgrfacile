<x-app-layout>
    ecole
    <div class="w-screen h-screen flex items-center justify-center">
        <div onclick="toggleSlideover()" class="cursor-pointer px-5 py-2 text-sm border text-gray-500 hover:bg-gray-100 rounded border-gray-300">Toggle Slide-over</div>
        <div id="slideover-container" class="w-full h-full fixed inset-0 invisible">
            <div onclick="toggleSlideover()" id="slideover-bg" class="w-full h-full duration-500 ease-out transition-all inset-0 absolute bg-gray-900 opacity-0"></div>
            <div onclick="toggleSlideover()" id="slideover" class="w-96 bg-white h-full absolute right-0 duration-300 ease-out transition-all translate-x-full">
                <div class="absolute cursor-pointer text-gray-600 top-0 w-8 h-8 flex items-center justify-center right-0 mt-5 mr-5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleSlideover(){
            document.getElementById('slideover-container').classList.toggle('invisible');
            document.getElementById('slideover-bg').classList.toggle('opacity-0');
            document.getElementById('slideover-bg').classList.toggle('opacity-50');
            document.getElementById('slideover').classList.toggle('translate-x-full');
        }
    </script>
</x-app-layout>
