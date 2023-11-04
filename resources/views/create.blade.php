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
            <div class="mx-32 w-full flex flex-col justify-start items-start gap-10 bg-dots bg-no-repeat bg-left-top pt-10 mt-8">
                <div class="space-y-4 w-full pl-8">
                    <h1 class="text-green-300 font-krona text-3xl">Create</h1>
                    <p class="text-zinc-100 text-xl">
                        Upload image to get started.
                    </p>
                </div>

                <div class="w-full">
                    <div class="w-full h-auto flex flex-col items-center justify-center mx-auto">
                        <form
                            action="/create"
                            method="POST"
                            enctype="multipart/form-data"
                            class="flex flex-col items-center justify-center gap-10"
                        >
                            @csrf

                            <div class="border-4 border-green-400 w-[600px] h-[350px] flex items-center justify-center">
                                <input
                                    type="file"
                                    name="image"
                                    id="image"
                                    class="text-sm text-zinc-100 flex items-center justify-center file:py-2 file:px-4 file:border-green-400 file:border-2 file:bg-transparent file:text-green-400 hover:file:bg-green-400 hover:file:text-neutral-900"
                                />
                            </div>
                            <div>
                                <x-button class="after:content-['upload_image'] after:bg-green-400 after:text-neutral-900 before:border-green-400 after:border-green-400 after:text-xl text-xl">
                                    upload image
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
