<x-layout>
    <section class="container h-full md:max-w-[80vw] md:mx-auto p-4">
        <h2 class="text-2xl font-semibold mb-4">Produtos</h2>
        <div class="flex flex-col gap-2">
            <input type="text" placeholder="Pesquisar produtos..." class=" p-2 border border-gray-300 rounded mb-4"
                id="searchInput">
            <select name="" class=" p-2 border border-gray-300 rounded mb-4 w-1/2 md:w-1/6" id="sortSelect">
                <option value="">Ordenar Por</option>
                <option value="price_asc">Preço: Menor para Maior</option>
                <option value="price_desc">Preço: Maior para Menor</option>
                <option value="newest">Mais Recentes</option>
                <option value="oldest">Mais Antigos</option>
            </select>
        </div>
    </section>
    <section class="container h-full md:max-w-[80vw] md:mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
            <div>
                <x-produto href="/product" title="Camisa Social" image="/images/desktop.jpg" price="R$ 89,90" />
            </div>
            <div>
                <x-produto title="Camisa Casual" image="/images/desktop.jpg" price="R$ 79,90" />
            </div>
            <div>
                <x-produto title="Camisa Slim" image="/images/desktop.jpg" price="R$ 99,90" />
            </div>
            <div>
                <x-produto title="Jeans Clássico" image="/images/desktop.jpg" price="R$ 129,90" />
            </div>
            <div>
                <x-produto title="Jeans Skinny" image="/images/skinny.jpg" price="R$ 119,90" />
            </div>
            <div>
                <x-produto title="Jeans Destroyed" image="/images/destroyed.jpg" price="R$ 139,90" />
            </div>
            <div>
                <x-produto title="Plover Casual" image="/images/mol.jpg" price="R$ 89,90" />
            </div>
            <div>
                <x-produto title="Plover de Inverno" image="/images/inverno.jpg" price="R$ 99,90" />
            </div>
            <div>
                <x-produto title="Plover de Lã" image="/images/la.jpg" price="R$ 109,90" />
            </div>
        </div>
        <div class="flex justify-center">
            <nav class="flex space-x-2">
                <span class="px-4 py-2 bg-blue-500 text-white rounded">1</span>
                <span class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 cursor-pointer">2</span>
                <span class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 cursor-pointer">3</span>
            </nav>
        </div>
    </section>
</x-layout>
