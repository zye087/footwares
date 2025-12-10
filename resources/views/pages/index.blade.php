<x-app>
    <header class="p-2.5 flex justify-center">
        <x-nav />
    </header>

    <main class="flex justify-center">
        <div class="w-[85%] px-2.5">
            <x-carousel />
            
            <div class="p-2.5">
                <div class="w-[250px]">
                    <img src="{{ asset("images/product_01.png") }}" alt="products">
                    <p>sample</p>
                    <p>₱ 1,000</p>
                </div>
            </div>
        </div>
    </main>
</x-app>