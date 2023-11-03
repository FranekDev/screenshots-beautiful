<x-layout class="bg-neutral-900">
    <main class="flex flex-col justify-between items-center">
        <x-header>
            <x-button class="after:content-['Register'] after:bg-neutral-900 before:border-green-400 after:border-green-400  after:text-green-400">
                Register
            </x-button>
            <x-button class="after:content-['Log_In'] after:bg-neutral-900 before:border-green-400 after:border-green-400 after:text-green-400">
                Log In
            </x-button>
        </x-header>

        <div class="w-full h-full">
            <section class="w-full flex justify-between fixed my-auto inset-0 h-fit">
                <x-nav class="border-green-400 text-neutral-300">
                    <x-pages-nav.link href="/">Home</x-pages-nav.link>
                    <x-pages-nav.link href="/create">Create</x-pages-nav.link>
                    <x-pages-nav.link href="/about">About</x-pages-nav.link>
                </x-nav>
            </section>

            <div class="w-[843px] h-[359px] flex flex-col items-start justify-start ml-32 mt-28 bg-dots bg-no-repeat bg-left-top bg-contain gap-10 pt-4 pl-2">
                <h1 class="text-green-300 font-krona text-4xl">About</h1>
                <p class="text-zinc-100 text-2xl">
                    This is about section. Website to create beautiful screenshots.<br>
                    Perfect to post on Your social media.
                </p>
            </div>
        </div>
    </main>
</x-layout>
