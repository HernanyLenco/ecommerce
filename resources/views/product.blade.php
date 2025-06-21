<x-layout>
    <section class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Imagem do produto -->
            <div>
                <img src="/images/jeans.jpg" alt="Tênis Branco" class="w-full h-96 object-cover rounded shadow">
            </div>

            <!-- Informações do produto -->
            <div>
                <h1 class="text-3xl font-bold mb-2">Tênis Branco</h1>
                <p class="text-gray-600 text-lg mb-4">Tênis confortável, ideal para uso diário com estilo casual.</p>
                <p class="text-2xl text-blue-600 font-semibold mb-6">Kz 10.500</p>

                <!-- Selecionar quantidade -->
                <div class="mb-6">
                    <label for="quantity" class="block mb-1 font-medium">Quantidade</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1"
                        class="w-20 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
                </div>

                <!-- Botão adicionar ao carrinho -->
                <button class="bg-black text-white px-6 py-3 rounded hover:bg-gray-800 transition duration-200">
                    Adicionar ao Carrinho
                </button>
            </div>
        </div>
    </section>
</x-layout>
