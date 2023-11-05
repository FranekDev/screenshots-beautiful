<x-layout class="bg-neutral-900">

    <x-flash-message class="bg-green-400 text-neutral-900"/>

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


        <div class="w-full h-full flex justify-between items-start">
            <x-pages-nav.links/>
            <div class="mx-32 w-full flex flex-col justify-start items-start gap-10 bg-dots bg-no-repeat bg-left-top pt-10 mt-8">
                <div class="space-y-4 w-full pl-8">
                    <h1 class="text-green-300 font-krona text-3xl">Create</h1>
                </div>

                <div class="w-full flex justify-between items-end">

                    <div class="w-full h-auto flex flex-col items-center justify-center mx-auto">
                        <form
                            action="/image/store"
                            method="POST"
                            enctype="multipart/form-data"
                            class="flex flex-col items-center justify-center gap-10 "
                        >
                            @csrf

                            <div class="border-4 border-green-400 w-[600px] h-[350px] flex items-center justify-center p-10">
                                <img
                                    src="/storage/{{ $image->name }}"
                                    alt="Image"
                                    class="w-auto h-full rounded-xl"
                                >
                            </div>
                            <div>
                                <x-button
                                    type="submit"
                                    class="after:content-['download_image'] after:bg-green-400 after:text-neutral-900 before:border-green-400 after:border-green-400 after:text-xl text-xl"
                                >
                                    download image
                                </x-button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
            <div class="text-white border-2 border-green-400 h-full w-fit flex justify-center items-center bg-slate-700">
                <div>
                    dsflk
                </div>
            </div>
        </div>
    </main>
</x-layout>
