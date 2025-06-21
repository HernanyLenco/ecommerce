<x-layout>
    <section class="relative h-screen">
        <!-- Imagem de fundo com opacidade -->
        <div class="absolute inset-0 md:hidden"
            style="background-image: url('/images/mobile.jpg'); background-size: cover; background-position: center;">
        </div>

        <div class="absolute inset-0 md:block hidden"
            style="background-image: url('/images/desktop.jpg'); background-size: cover; background-position: center;">
        </div>

        <!-- Conteúdo por cima da imagem -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full p-8 text-center bg-black/50">
            <h1 class="text-4xl font-bold text-white mb-4">Bem-vindo ao AngoClothes</h1>
            <p class="text-gray-200 mb-6">Sua loja de roupas online favorita!</p>
            <a href="/produtos" class="border text-white px-6 py-2 rounded hover:bg-gray-200/20 transition">
                Ver Produtos
            </a>
        </div>
    </section>
    <section class="container h-1/2 md:max-w-[80vw] md:mx-auto p-4">
        <h2 class="text-2xl font-semibold mb-4">Categorias</h2>

        <div class="swiper">
            <div class="swiper-wrapper">
                <x-card-categorie title="Calças" image="/images/jeans.jpg" />
                <x-card-categorie title="Camisas" image="/images/desktop.jpg" />
                <x-card-categorie title="Plovers" image="/images/mol.jpg" />
            </div>
        </div>
    </section>
    <section class="container h-full md:max-w-[80vw] md:mx-auto p-4">
        <h2 class="text-2xl font-semibold mb-2">Produtos em Destaque</h2>
        <div class="grid grid-cols-1 gap-4">

            <div>
                <h2 class="text-xl font-bold mb-4">Camisas</h2>
                <div class="swiper product-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <x-produto url="/product" title="Camisa Social" image="/images/desktop.jpg"
                                price="R$ 89,90" />
                        </div>
                        <div class="swiper-slide">
                            <x-produto title="Camisa Casual" image="/images/casual.jpg" price="R$ 79,90" />
                        </div>
                        <div class="swiper-slide">
                            <x-produto title="Camisa Slim" image="/images/slim.jpg" price="R$ 99,90" />
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-xl font-bold mb-4">Jeans</h2>
                <div class="swiper product-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <x-produto title="Camisa Social" image="/images/jeans.jpg" price="R$ 89,90" />
                        </div>
                        <div class="swiper-slide">
                            <x-produto title="Camisa Casual" image="/images/casual.jpg" price="R$ 79,90" />
                        </div>
                        <div class="swiper-slide">
                            <x-produto title="Camisa Slim" image="/images/slim.jpg" price="R$ 99,90" />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="bg-gray-100 py-12">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">O que dizem nossos clientes</h2>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <x-testemunho
                    message="A AngoClothes é incrível! A qualidade das roupas é excelente e o atendimento é nota 10!"
                    avatar="https://i.pravatar.cc/40?img=1" name="João Pereira" subtitle="Cliente desde 2020"
                    path="M7.17 6.17C5.2 8.13 4 10.53 4 13c0 3.31 2.69 6 6 6v-2c-2.21 0-4-1.79-4-4 0-1.24.55-2.42 1.56-3.43L9 7.17 7.17 6.17zM17.17 6.17C15.2 8.13 14 10.53 14 13c0 3.31 2.69 6 6 6v-2c-2.21 0-4-1.79-4-4 0-1.24.55-2.42 1.56-3.43L19 7.17l-1.83-1z" />

                <x-testemunho
                    message="A AngoClothes é minha loja favorita! Sempre encontro roupas estilosas e com preços justos."
                    avatar="https://i.pravatar.cc/40?img=2" name="Maria Clara" subtitle="Cliente desde 2021"
                    path="M7.17 6.17C5.2 8.13 4 10.53 4 13c0 3.31 2.69 6 6 6v-2c-2.21 0-4-1.79-4-4 0-1.24.55-2.42 1.56-3.43L9 7.17 7.17 6.17zM17.17 6.17C15.2 8.13 14 10.53 14 13c0 3.31 2.69 6 6 6v-2c-2.21 0-4-1.79-4-4 0-1.24.55-2.42 1.56-3.43L19 7.17l-1.83-1z" />

                <x-testemunho
                    message="A AngoClothes superou minhas expectativas! A entrega foi rápida e a qualidade das roupas é excelente."
                    avatar="https://i.pravatar.cc/40?img=3" name="Lucas Silva" subtitle="Cliente desde 2022"
                    path="M7.17 6.17C5.2 8.13 4 10.53 4 13c0 3.31 2.69 6 6 6v-2c-2.21 0-4-1.79-4-4 0-1.24.55-2.42 1.56-3.43L9 7.17 7.17 6.17zM17.17 6.17C15.2 8.13 14 10.53 14 13c0 3.31 2.69 6 6 6v-2c-2.21 0-4-1.79-4-4 0-1.24.55-2.42 1.56-3.43L19 7.17l-1.83-1z" />

            </div>
        </div>
    </section>
    <section class="bg-white py-12 border-t">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Siga-nos nas Redes Sociais</h2>
            <p class="text-gray-600 mb-8">Acompanhe lançamentos, promoções e novidades da AngoClothes em primeira mão.
            </p>

            <div class="flex justify-center gap-6 flex-wrap">
                <a href="https://instagram.com/angoclothes" target="_blank"
                    class="text-pink-500 text-3xl hover:scale-110 transition">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="https://facebook.com/angoclothes" target="_blank"
                    class="text-blue-600 text-3xl hover:scale-110 transition">
                    <i class="fab fa-facebook"></i>
                </a>

                <a href="https://tiktok.com/@angoclothes" target="_blank"
                    class="text-black text-3xl hover:scale-110 transition">
                    <i class="fab fa-tiktok"></i>
                </a>

                <a href="https://wa.me/244900000000" target="_blank"
                    class="text-green-500 text-3xl hover:scale-110 transition">
                    <i class="fab fa-whatsapp"></i>
                </a>

                <a href="https://youtube.com/@angoclothes" target="_blank"
                    class="text-red-600 text-3xl hover:scale-110 transition">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </section>
</x-layout>
