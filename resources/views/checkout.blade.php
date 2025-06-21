<x-layout>
    <section class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold mb-6">Finalizar Compra</h2>

        <!-- Formulário de dados do cliente -->
        <form action="/checkout" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf

            <!-- Dados do cliente -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold mb-2">Informações Pessoais</h3>
                <input type="text" name="nome" placeholder="Nome completo" class="w-full border rounded px-4 py-2"
                    required>
                <input type="email" name="email" placeholder="Email" class="w-full border rounded px-4 py-2"
                    required>
                <input type="tel" name="telefone" placeholder="Telefone" class="w-full border rounded px-4 py-2"
                    required>

                <h3 class="text-xl font-semibold mt-6 mb-2">Endereço de Entrega</h3>
                <input type="text" name="endereco" placeholder="Endereço" class="w-full border rounded px-4 py-2"
                    required>
                <input type="text" name="cidade" placeholder="Cidade" class="w-full border rounded px-4 py-2"
                    required>
                <input type="text" name="bairro" placeholder="Bairro" class="w-full border rounded px-4 py-2"
                    required>
            </div>

            <!-- Resumo do pedido -->
            <div class="bg-gray-100 p-6 rounded-lg shadow space-y-4 h-fit">
                <h3 class="text-xl font-semibold mb-2">Resumo do Pedido</h3>

                <!-- Exemplo de produtos (estático) -->
                <div class="flex justify-between">
                    <span>Camisa Social</span>
                    <span>Kz 8.900</span>
                </div>
                <div class="flex justify-between">
                    <span>Jeans Clássico</span>
                    <span>Kz 12.500</span>
                </div>
                <hr>
                <div class="flex justify-between font-bold text-lg">
                    <span>Total:</span>
                    <span>Kz 21.400</span>
                </div>

                <!-- Botão de finalizar -->
                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded hover:bg-blue-700 transition">
                    Confirmar Pedido
                </button>
            </div>
        </form>
    </section>
</x-layout>
