<x-layout class="bg-neutral-900">
    <main class="flex flex-col justify-between items-center">
        <x-header>
            @auth
                <x-session.link
                    href="/logout"
                    class="after:content-['Log_Out'] after:bg-neutral-900 before:border-green-400 after:border-green-400 after:text-green-400"
                >
                    Log Out
                </x-session.link>
            @else
                <x-session.link
                    href="/register"
                    class="after:content-['Register'] after:bg-neutral-900 before:border-green-400 after:border-green-400 after:text-green-400"
                >
                    Register
                </x-session.link>
                <x-session.link
                    href="/login"
                    class="after:content-['Log_In'] after:bg-neutral-900 before:border-green-400 after:border-green-400 after:text-green-400"
                >
                    Log In
                </x-session.link>
            @endauth
        </x-header>

        <x-pages-nav.links/>

        <div class="w-full h-full flex justify-start items-start">
            <div class="mx-32 w-full flex flex-col justify-start items-start gap-5 bg-dots bg-no-repeat bg-left-top pt-10 mt-8">
                <div class="space-y-4 w-full pl-8 pb-56">
                    <h1 class="text-green-300 font-krona text-3xl">About</h1>
                    <p class="text-zinc-100 text-xl">
                        This is about section. Website to create beautiful screenshots.<br>
                        Perfect to post on Your social media.
                    </p>
                </div>


            </div>
        </div>
    </main>
</x-layout>
