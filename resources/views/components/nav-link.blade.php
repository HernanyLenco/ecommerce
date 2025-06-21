@props(['type'])
@php
    $type = $type ?? 'link';

    if ($type === 'link') {
        $classes = 'text-gray-900 hover:text-gray-700';
    } elseif($type === 'button') {
        $classes = 'border hover:bg-gray-200 px-4 py-2 rounded';
    }
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} >{{ $slot }}</a>