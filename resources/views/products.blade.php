<x-layout>
    @if (session('success'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show" x-transition
            class="fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow z-50">
            {{ session('success') }}
        </div>
    @endif
    <section class="container h-full md:max-w-[80vw] md:mx-auto p-4">
        <h2 class="text-2xl font-semibold mb-4">Produtos</h2>
        <div class="flex flex-col gap-2">
            <form method="GET" action="{{ route('products') }}"
                class="flex flex-col md:flex-row md:items-center gap-2 mb-4">
                <input type="text" name="search" placeholder="Pesquisar produtos..."
                    class="p-2 border border-gray-300 rounded" value="{{ request('search') }}">
                <select name="sort" class="p-2 border border-gray-300 rounded w-full md:w-56"
                    onchange="this.form.submit()">
                    <option value="">Ordenar Por</option>
                    <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Preço: Menor para
                        Maior</option>
                    <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Preço: Maior para
                        Menor</option>
                    <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Mais Recentes</option>
                    <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Mais Antigos</option>
                </select>
                <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Pesquisar</button>
            </form>
        </div>
    </section>
    <section class="container h-full md:max-w-[80vw] md:mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
            @foreach ($products as $product)
                <div class="bg-white rounded-lg shadow p-4">
                    <x-produto href="/product/{{ $product->id }}" title="{{ $product->name }}"
                        image="{{ $product->image }}" price="{{ $product->price }}" />

                    <div>
                        <form action="{{ route('cart.add', $product->id) }}" method="POST">
                            @csrf
                            <button
                                class="bg-black text-white hover:bg-gray-800 transition-colors px-4 py-2 rounded block">
                                <i class="fas fa-cart-plus mr-2"></i>
                                Add to Cart
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center">
            <nav class="flex space-x-2">
                @if ($products->currentPage() > 1)
                    <a href="{{ $products->previousPageUrl() }}"
                        class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300">Anterior</a>
                @endif

                @for ($i = 1; $i <= $products->lastPage(); $i++)
                    <a href="{{ $products->url($i) }}"
                        class="px-4 py-2 {{ $products->currentPage() == $i ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-800' }} rounded hover:bg-blue-600">
                        {{ $i }}
                    </a>
                @endfor

                @if ($products->hasMorePages())
                    <a href="{{ $products->nextPageUrl() }}"
                        class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300">Próximo</a>
                @endif
            </nav>
        </div>
    </section>
</x-layout>
