@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'text-blue-600 dark:text-blue-200 hover:text-gray-600 dark:hover:text-gray-400 font-semibold block pb-2 text-sm'
                : 'text-gray-900 dark:text-gray-100 hover:text-gray-700 dark:hover:text-gray-300 font-semibold block pb-2 text-sm';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
