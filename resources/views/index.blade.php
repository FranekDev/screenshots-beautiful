<x-layout class="bg-gradient-to-bl from-green-400 to-emerald-400 ">
    <x-flash-message class="bg-neutral-900 text-neutral-300"/>

    <main class="flex flex-col justify-between items-center">
        <x-header>
            @auth
                <div class="flex justify-center items-center gap-5">
                    <a
                        href="/dashboard"
                        class="font-krona text-neutral-900 text-xs"
                    >{{ auth()->user()->name }}</a>

                    <x-session.link
                        href="/logout"
                        class="after:content-['Log_Out'] after:bg-green-400 before:border-black after:border-black"
                    >
                        Log Out
                    </x-session.link>
                </div>
            @else
                <x-session.link
                    href="/register"
                    class="after:content-['Register'] after:bg-green-400 before:border-black after:border-black"
                >
                    Register
                </x-session.link>
                <x-session.link
                    href="/login"
                    class="after:content-['Log_In'] after:bg-green-400 before:border-black after:border-black"
                >
                    Log In
                </x-session.link>
            @endauth
        </x-header>

        <section class="w-full flex justify-between fixed my-auto inset-0 h-fit">
            <x-nav class="border-black">
                <x-nav.link href="/">Home</x-nav.link>
                <x-nav.link href="/create">Create</x-nav.link>
                <x-nav.link href="/about">About</x-nav.link>
            </x-nav>

            <div class="w-full flex justify-around mx-5 items-center ">
                <div class="space-y-4">
                    <h1 class="font-krona text-4xl md:text-6xl">screenshots<br>beautiful</h1>

                    <a href="/create" class="block">
                        <x-button class="after:content-['Get_Started'] after:bg-black after:text-emerald-400 before:border-black after:border-black">
                            Get Started
                        </x-button>
                    </a>
                </div>

                <div class="border-2 border-black p-10">
                    <div class="rounded-xl w-[450px] h-[200px] shadow-xl overflow-hidden bg-zinc-800">
                        {{--                        <img--}}
                        {{--                            src="/img/preview.png"--}}
                        {{--                            alt="Preview"--}}
                        {{--                            class="w-full h-full aspect-video"--}}
                        {{--                        >--}}
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-layout>
