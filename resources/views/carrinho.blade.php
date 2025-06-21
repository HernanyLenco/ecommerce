<x-layout>
    <section class="container mx-auto px-4 py-8">
        <header class="mb-6 bg-gray-50 p-4 rounded shadow">
            <h2 class="text-2xl font-semibold mb-2">Carrinho</h2>
            <span class="text-gray-600">Você tem {{ count($cart) }} item(ns) no seu carrinho</span>
        </header>

        <div class="space-y-6 p-6">
            @php $total = 0; @endphp

            @forelse ($cart as $id => $item)
                @php $total += $item['price'] * $item['quantity']; @endphp

                <div class="flex flex-col sm:flex-row items-center gap-4 border-b pb-4">
                    <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-32 h-32 object-cover rounded">
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold">{{ $item['name'] }}</h3>
                        <p class="text-gray-600">Preço: {{ number_format($item['price'], 2, ',', '.') }} Kz</p>
                        <div class="flex items-center gap-2 mt-2">
                            <label class="text-sm text-gray-700">Quantidade:</label>
                            <input type="number" value="{{ $item['quantity'] }}" min="1" disabled
                                class="w-16 border rounded px-2 py-1 text-sm">
                        </div>
                    </div>
                    <div>
                        <form action="{{ route('cart.remove', $id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-red-500 hover:underline text-sm">Remover</button>
                        </form>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-500">O carrinho está vazio.</p>
            @endforelse

            @if (count($cart))
                <!-- Resumo do pedido -->
                <div class="mt-8 border-t pt-4 text-right">
                    <p class="text-lg font-semibold mb-2">
                        Total: <span class="text-blue-600">{{ number_format($total, 2, ',', '.') }} Kz</span>
                    </p>
                    <a href="/checkout" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded transition">
                        Finalizar Compra
                    </a>
                </div>
            @endif
        </div>
    </section>
</x-layout>
