<x-layout class="bg-neutral-900">

    <x-flash-message class="bg-green-400 text-neutral-900"/>

    <main class="flex flex-col justify-between items-center h-full w-full">
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
        <div class="w-full h-full flex pl-32 gap-5">
            <div class="w-full flex flex-col justify-start items-start gap-10 bg-dots bg-no-repeat bg-left-top pt-10 mt-8">
                <x-title>Create</x-title>

                <div class="w-full flex justify-between items-end">

                    <div class="w-full h-auto flex flex-col items-center justify-center mx-auto gap-10">
                        <div
                            class="border-4 border-green-500 w-fit h-fit flex items-center justify-center"

                        >
                            <div
                                class="w-fit h-full flex items-center justify-center p-10"
                                id="image-container"
                            >
                                <img
                                    src="/storage/{{ $image->name }}"
                                    alt="Image"
                                    class="w-auto h-full rounded-xl shadow-xl transition-all object-contain"
                                    id="image-preview"
                                >
                            </div>
                        </div>
                        <div>
                            <x-button
                                type="submit"
                                class="after:content-['download_image'] after:bg-green-400 after:text-neutral-900 before:border-green-400 after:border-green-400 after:text-xl text-xl"
                                id="download-image"
                            >
                                download image
                            </x-button>
                        </div>
                    </div>


                </div>
            </div>
            <div class="h-fit w-full flex justify-center mt-36">

                <div class="border-4 border-green-400 flex flex-col justify-center items-center h-fit w-auto">

                    <div class="flex flex-col gap-3 w-auto items-start px-4 py-6">
                        <p class="text-green-300">Backgrounds</p>
                        <x-colors/>
                    </div>

                    <div class="flex flex-col gap-3 items-start px-4 py-6 w-full">
                        <p class="text-green-300">Rounded</p>

                        <label class="relative inline-flex items-center cursor-pointer">
                            <input
                                type="checkbox"
                                value=""
                                class="sr-only peer"
                                id="rounded-corners"
                                checked
                            >
                            <div class="w-11 h-6 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-green-300 dark:peer-focus:ring-green-400 rounded-full peer dark:bg-neutral-950 peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-neutral-900 after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-400"></div>
                        </label>

                    </div>

                </div>

            </div>
        </div>
    </main>
</x-layout>
