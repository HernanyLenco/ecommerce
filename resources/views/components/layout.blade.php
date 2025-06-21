<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AngoClothes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-geist flex flex-col min-h-screen">
    <header class="bg-white shadow flex items-center justify-between p-4 relative z-50">
        <div class="flex">
            <a href="" class="text-gray-900 text-lg font-bold">AngoClothes</a>
        </div>

        <div>
            @php
                $cart = session('carrinho', []);
                $totalItems = array_sum(array_column($cart, 'quantity'));
            @endphp
            <nav class="hidden md:flex space-x-4 items-center">
                <x-nav-link href="/">Home</x-nav-link>
                <x-nav-link href="/products">Produtos</x-nav-link>
                <x-nav-link href="/carrinho" class="relative flex items-center gap-1">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Carrinho
                    @if ($totalItems > 0)
                        <span
                            class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center animate-ping-slow">
                            {{ $totalItems }}
                        </span>
                    @endif
                </x-nav-link>
                <x-nav-link type="button">Login</x-nav-link>
            </nav>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg absolute top-[100%] left-0 w-full z-40">
            <nav class="flex flex-col space-y-2 p-4">
                <x-nav-link href="/">Home</x-nav-link>
                <x-nav-link href="/products">Produtos</x-nav-link>
                <x-nav-link href="/carrinho">Carrinho</x-nav-link>
                <x-nav-link type="button">Login</x-nav-link>
            </nav>
        </div>

        <button id="menu-toggle" onclick="toggleMobileMenu()"
            class="text-gray-900 hover:text-gray-700 md:hidden text-xl">
            <i class="fa-solid fa-bars"></i>
        </button>
    </header>
    <!-- Menu Mobile  -->

    <main class="container flex-1 mx-auto w-full">
        {{ $slot }}
    </main>
    <footer class="bg-black/90 shadow mt-4 p-4 ">
        <div class="text-center text-gray-200 space-y-1">
            <p>&copy; {{ date('Y') }} AngoClothes. Todos os direitos reservados.</p>
            <p>Desenvolvido por <a href="" class="text-blue-500 hover:underline">Seu Nome</a></p>
        </div>
    </footer>
</body>

</html>
