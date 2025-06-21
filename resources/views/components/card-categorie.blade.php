@props(['title', 'image'])
@php

@endphp


<div class="swiper-slide group overflow-hidden rounded-lg relative cursor-pointer">
    <img src="{{ $image }}" alt="{{ $title }}"
        class="w-full h-48 object-cover transition duration-300 ease-in-out group-hover:blur-0 group-hover:scale-105" />

    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition duration-300"></div>

    <div class="absolute inset-0 flex items-center justify-center">
        <h3 class="text-white text-xl font-semibold drop-shadow">{{ $title }}</h3>
    </div>
</div>
