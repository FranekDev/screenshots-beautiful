<x-layout class="bg-neutral-900">
    <main class="flex flex-col justify-between items-center w-screen h-screen">
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

        <div class="w-full h-full p-10">
            <div class="flex justify-start items-start border-4 border-green-400 mx-12 w-auto h-full bg-dots bg-no-repeat bg-left-top">
                <x-admin.nav/>

                <div class="w-full h-full p-14 grid grid-cols-3 gap-10">
{{--                    <div class="bg-amber-200 w-full h-full"></div>--}}
                    <x-admin.summary title="Total users">
                        {{ $users }}
                    </x-admin.summary>
                    <x-admin.summary title="Total images">
                        {{ $images }}
                    </x-admin.summary>
                </div>
            </div>
        </div>
    </main>
</x-layout>
