<x-app>
    <header class="p-2.5 flex justify-center">
        <x-nav />
    </header>

    <main class="flex justify-center">
        <div class="w-[85%] px-2.5">
            <x-carousel />
            
            <div class="py-[100px] flex justify-center gap-4">
                {{-- Row 1 --}}
                <div class="w-[200px] shadow-xl rounded-xl">
                    <img src="{{ asset("images/product(8).png") }}" alt="products" class="rounded-t-xl w-[200px] h-[250px]">
                    <div class="p-4 flex flex-col gap-2">
                        <p>Luka Jordan</p>
                        <p>₱ 1,000</p>
                    </div>
                </div>
                <div class="w-[200px] shadow-xl rounded-xl">
                    <img src="{{ asset("images/product(8).png") }}" alt="products" class="rounded-t-xl w-[200px] h-[250px]">
                    <div class="p-2.5">
                        <p>Luka Jordan</p>
                        <p>₱ 1,000</p>
                    </div>
                </div>
                <div class="w-[200px] shadow-xl rounded-xl">
                    <img src="{{ asset("images/product(8).png") }}" alt="products" class="rounded-t-xl w-[200px] h-[250px]">
                    <div class="p-2.5">
                        <p>Luka Jordan</p>
                        <p>₱ 1,000</p>
                    </div>
                </div>
                <div class="w-[200px] shadow-xl rounded-xl">
                    <img src="{{ asset("images/product(8).png") }}" alt="products" class="rounded-t-xl w-[200px] h-[250px]">
                    <div class="p-2.5">
                        <p>Luka Jordan</p>
                        <p>₱ 1,000</p>
                    </div>
                </div>
                <div class="w-[200px] shadow-xl rounded-xl">
                    <img src="{{ asset("images/product(8).png") }}" alt="products" class="rounded-t-xl w-[200px] h-[250px]">
                    <div class="p-2.5">
                        <p>Luka Jordan</p>
                        <p>₱ 1,000</p>
                    </div>
                </div>

                {{-- Row 2 --}}
                <div class="w-[200px] shadow-xl rounded-xl">
                    <img src="{{ asset("images/product(8).png") }}" alt="products" class="rounded-t-xl w-[200px] h-[250px]">
                    <div class="p-4 flex flex-col gap-2">
                        <p>Luka Jordan</p>
                        <p>₱ 1,000</p>
                    </div>
                </div>
                <div class="w-[200px] shadow-xl rounded-xl">
                    <img src="{{ asset("images/product(8).png") }}" alt="products" class="rounded-t-xl w-[200px] h-[250px]">
                    <div class="p-2.5">
                        <p>Luka Jordan</p>
                        <p>₱ 1,000</p>
                    </div>
                </div>
                <div class="w-[200px] shadow-xl rounded-xl">
                    <img src="{{ asset("images/product(8).png") }}" alt="products" class="rounded-t-xl w-[200px] h-[250px]">
                    <div class="p-2.5">
                        <p>Luka Jordan</p>
                        <p>₱ 1,000</p>
                    </div>
                </div>
                <div class="w-[200px] shadow-xl rounded-xl">
                    <img src="{{ asset("images/product(8).png") }}" alt="products" class="rounded-t-xl w-[200px] h-[250px]">
                    <div class="p-2.5">
                        <p>Luka Jordan</p>
                        <p>₱ 1,000</p>
                    </div>
                </div>
                <div class="w-[200px] shadow-xl rounded-xl">
                    <img src="{{ asset("images/product(8).png") }}" alt="products" class="rounded-t-xl w-[200px] h-[250px]">
                    <div class="p-2.5">
                        <p>Luka Jordan</p>
                        <p>₱ 1,000</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app>