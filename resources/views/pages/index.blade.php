<x-app>
    <header class="p-2.5 flex justify-center">
        <x-nav />
    </header>

    <main class="flex justify-center">
        <div class="w-3/4 p-2.5">
            <div class="relative bg-stone-500 rounded-xl h-[350px] flex justify-between">
                <img src="{{ asset("images/header-bg.jpg") }}" alt="bg" class="object-cover rounded-xl" width="100%" height="100%">
                <h1 class="absolute inset-0 flex items-center justify-center text-white font-sans font-bold text-2xl text-center" >Your journey deserves footwear built for confidence.</h1>
            </div>
            <h1>Content here...</h1>
        </div>
    </main>
</x-app>