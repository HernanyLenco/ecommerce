<x-layout>
    <section class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-6">{{ $product->name }}</h1>
        <x-singleProduct-card 
        name="{{ $product->name }}" 
        price="{{ $product->price }}" 
        image="{{ $product->image }}"
        description="{{ $product->description }}" />
    </section>
</x-layout>
