@props(['title', 'image', 'price', 'url'])

<a {{ $attributes->merge(['class' => 'block hover:scale-105 transition-transform duration-300']) }} href="{{ $url ?? '#' }}">
    <div class="bg-white rounded-lg shadow p-4">
        <img class="w-full h-48 object-cover mb-4 rounded" src="{{ $image }}" alt="{{ $title }}">
        <h3 class="text-lg font-semibold mb-2">{{ $title }}</h3>
        <p class="text-gray-600 mb-2">Kz {{ $price }}</p>
        <div class="flex justify-start">
            <x-nav-link type="button"
                class="bg-black text-white hover:bg-gray-800 transition-colors px-4 py-2 rounded block">
                <i class="fas fa-cart-plus mr-2"></i>
                Add to Cart
            </x-nav-link>
        </div>
    </div>
</a>
