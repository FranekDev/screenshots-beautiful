<x-header>
    @auth
        <div class="flex justify-center items-center gap-5">
            <a
                href="/dashboard"
                class="font-krona text-green-300 text-xs"
            >{{ auth()->user()->name }}</a>

            <x-session.link
                href="/logout"
                class="after:content-['Log_Out'] after:bg-neutral-900 before:border-green-400 after:border-green-400 after:text-green-400"
            >
                Log Out
            </x-session.link>
        </div>
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
