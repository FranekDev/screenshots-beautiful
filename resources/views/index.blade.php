<x-layout class="bg-gradient-to-bl from-green-400 to-emerald-400 ">
    <main class="flex flex-col justify-between items-center">
        <x-header>
            <x-button class="after:content-['Register'] after:bg-green-400 before:border-black after:border-black">
                Register
            </x-button>
            <x-button class="after:content-['Log_In'] after:bg-green-400 before:border-black after:border-black">
                Log In
            </x-button>
        </x-header>

        <section class="w-full flex justify-between fixed my-auto inset-0 h-fit">
            <x-nav class="border-black">
                <x-nav.link href="/">Home</x-nav.link>
                <x-nav.link href="/create">Create</x-nav.link>
                <x-nav.link href="/about">About</x-nav.link>
            </x-nav>

            <div class="w-full flex justify-between mx-5 items-center">
                <div class="space-y-4">
                    <h1 class="font-krona text-4xl md:text-6xl">screenshots<br>beautiful</h1>
                    <x-button class="after:content-['Get_Started'] after:bg-black after:text-emerald-400 before:border-black after:border-black">Get Started</x-button>
                </div>

                <div class="border-2 border-black p-10">
                    <div class="rounded-xl bg-zinc-800 w-[450px] h-[200px] shadow-xl"></div>
                </div>
            </div>
        </section>
    </main>
</x-layout>
