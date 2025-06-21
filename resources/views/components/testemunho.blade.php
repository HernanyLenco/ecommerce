@props(['message', 'avatar', 'name', 'subtitle', 'path'])

<div class="bg-white shadow rounded-xl p-6 relative">
    <svg class="w-8 h-8 text-gray-300 absolute top-4 right-4" fill="currentColor" viewBox="0 0 24 24">
        <path
            d="{{ $path }}" />
    </svg>

    <p class="text-gray-700 mb-4 italic">
        “{{ $message }}”
    </p>

    <div class="flex items-center gap-4">
        <img src="{{ $avatar }}" class="w-10 h-10 rounded-full" alt="Avatar cliente">
        <div>
            <p class="font-semibold">{{ $name }}</p>
            <p class="text-sm text-gray-500">{{ $subtitle }}</p>
        </div>
    </div>
</div>
