@if ($isPremium)
    <div class="absolute top-0 right-0 bg-green-500 rounded-md p-1">
        <span class="text-gray-100 dark:text-gray-200">
            {{ __('gratuit') }}
        </span>
    </div>
@else
    <div class="absolute top-0 right-0 bg-red-500 rounded-md p-1">
        <x-svg.money class="h-4 w-4 fill-current text-gray-100 dark:text-gray-200"/>
    </div>
@endif
