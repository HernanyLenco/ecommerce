<x-layout>
    <section class="container mx-auto px-4 py-8">
        <header class="mb-6 bg-gray-50 p-4 rounded shadow">
            <h2 class="text-2xl font-semibold mb-2">Carrinho</h2>
            <span class="text-gray-600">Você tem 2 itens no seu carrinho</span>
        </header>
        <div class="space-y-6 overflow-y-auto max-h-[60vh]">
            <!-- Item 1 -->
            <div class="flex flex-col sm:flex-row items-center gap-4 border-b pb-4">
                <img src="/images/mol.jpg" alt="Tênis Branco" class="w-32 h-32 object-cover rounded">
                <div class="flex-1">
                    <h3 class="text-lg font-semibold">Tênis Branco</h3>
                    <p class="text-gray-600">Preço: 10.500 Kz</p>
                    <div class="flex items-center gap-2 mt-2">
                        <label class="text-sm text-gray-700">Quantidade:</label>
                        <input type="number" value="1" min="1"
                            class="w-16 border rounded px-2 py-1 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500">
                    </div>
                </div>
                <div>
                    <button class="text-red-500 hover:underline text-sm">Remover</button>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="flex flex-col sm:flex-row items-center gap-4 border-b pb-4">
                <img src="/images/jeans.jpg" alt="Calça Jeans" class="w-32 h-32 object-cover rounded">
                <div class="flex-1">
                    <h3 class="text-lg font-semibold">Calça Jeans Slim</h3>
                    <p class="text-gray-600">Preço: 8.000 Kz</p>
                    <div class="flex items-center gap-2 mt-2">
                        <label class="text-sm text-gray-700">Quantidade:</label>
                        <input type="number" value="2" min="1"
                            class="w-16 border rounded px-2 py-1 text-sm focus:outline-none focus:ring-1 focus:ring-blue-500">
                    </div>
                </div>
                <div>
                    <button class="text-red-500 hover:underline text-sm">Remover</button>
                </div>
            </div>
        </div>

        <!-- Resumo do pedido -->
        <div class="mt-8 border-t pt-4 text-right">
            <p class="text-lg font-semibold mb-2">Total: <span class="text-blue-600">26.500 Kz</span></p>
            <a href="/checkout" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded transition">Finalizar
                Compra</a>
        </div>
    </section>
</x-layout>
