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
                <div class="space-y-4 w-full pl-8">
                    <h1 class="text-green-300 font-krona text-3xl">Create</h1>
                </div>

                <div class="w-full flex justify-between items-end">

                    <div class="w-full h-auto flex flex-col items-center justify-center mx-auto gap-10">
                        <div
                            class="border-4 border-green-400 w-[600px] h-[350px] flex items-center justify-center"

                        >
                            <div class="w-full h-full flex items-center justify-center p-10" id="image-container">
                                <img
                                    src="/storage/{{ $image->name }}"
                                    alt="Image"
                                    class="w-auto h-full rounded-xl shadow-xl"
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
            <div class="text-white h-fit w-full flex justify-center mt-36">
                <div class="border-4 border-green-400 flex flex-col justify-center items-center h-fit w-auto">
                    <div class="flex flex-col gap-3 w-auto items-start px-4 py-6">
                        <p class="text-green-300">Backgrounds</p>
                        <div class="grid grid-cols-3 w-auto gap-3 [&>div]:cursor-pointer">
                            <div class="w-[65px] h-[65px] bg-gradient-to-br from-blue-500 to-sky-300 rounded-full color-preview">
                                <input
                                    type="hidden"
                                    name=""
                                    value="bg-gradient-to-br from-blue-500 to-sky-300"
                                >
                            </div>
                            <div class="w-[65px] h-[65px] bg-gradient-to-br from-orange-200 to-orange-500 rounded-full color-preview">
                                <input
                                    type="hidden"
                                    name=""
                                    value="bg-gradient-to-br from-orange-200 to-orange-500"
                                >
                            </div>
                            <div class="w-[65px] h-[65px] bg-gradient-to-br from-purple-600 to-indigo-400 rounded-full color-preview">
                                <input
                                    type="hidden"
                                    name=""
                                    value="bg-gradient-to-br from-purple-600 to-indigo-400"
                                >
                            </div>
                            <div class="w-[65px] h-[65px] bg-green-400 rounded-full color-preview">
                                <input
                                    type="hidden"
                                    name=""
                                    value="bg-green-400"
                                >
                            </div>
                            <div class="w-[65px] h-[65px] bg-neutral-900 rounded-full color-preview border-4 border-green-400">
                                <input
                                    type="hidden"
                                    name=""
                                    value="bg-neutral-900"
                                >
                            </div>
                            <div class="w-[65px] h-[65px] bg-teal-300 rounded-full color-preview">
                                <input
                                    type="hidden"
                                    name=""
                                    value="bg-teal-300"
                                >
                            </div>
                            <div class="w-[65px] h-[65px] bg-gradient-to-br from-neutral-900 to-neutral-700 rounded-full color-preview">
                                <input
                                    type="hidden"
                                    name=""
                                    value="bg-gradient-to-br from-neutral-900 to-neutral-700"
                                >
                            </div>
                            <div class="w-[65px] h-[65px] bg-gradient-to-br from-gray-200 to-neutral-400 rounded-full color-preview">
                                <input
                                    type="hidden"
                                    name=""
                                    value="bg-gradient-to-br from-gray-200 to-neutral-400"
                                >
                            </div>
                            <div class="w-[65px] h-[65px] bg-gradient-to-br from-teal-300 to-yellow-200 rounded-full color-preview">
                                <input
                                    type="hidden"
                                    name=""
                                    value="bg-gradient-to-br from-teal-300 to-yellow-200"
                                >
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 items-start px-4 py-6 w-full">
                        <p class="text-green-300">Rounded</p>
                        <input
                            type="checkbox"
                            name=""
                            id=""
                        >
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
