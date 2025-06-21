@props(['title', 'image', 'price', 'url'])

<a {{ $attributes->merge(['class' => 'block hover:scale-105 transition-transform duration-300']) }} href="{{ $url ?? '#' }}">
    <div>
        <img class="w-full h-48 object-cover mb-4 rounded" src="{{ $image }}" alt="{{ $title }}">
        <h3 class="text-lg font-semibold mb-2">{{ $title }}</h3>
        <p class="text-gray-600 mb-2">Kz {{ $price }}</p>
    </div>
</a>
