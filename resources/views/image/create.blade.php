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
                    <p class="text-zinc-100 text-xl">
                        Upload image to get started.
                    </p>
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

                            <div class="border-4 border-green-400 w-[600px] h-[350px] flex items-end justify-center bg-image bg-center bg-no-repeat bg-[length:300px_175px] cursor-pointer" id="upload-image">
                                <input
                                    type="file"
                                    name="image"
                                    id="image"
                                    class="hidden text-sm text-zinc-100 items-center justify-center file:py-2 file:px-4 file:border-green-400 file:border-2 file:bg-transparent file:text-green-400 hover:file:bg-green-400 hover:file:text-neutral-900"
                                />
                                <p class="text-zinc-100 text-lg mb-10" id="image-desc">Click to upload</p>
{{--                                <img src="/img/image-icon.svg" alt="Upload Image" class="w-36 h-auto">--}}
                            </div>
                            <div>
                                <x-button type="submit" class="after:content-['upload_image'] after:bg-green-400 after:text-neutral-900 before:border-green-400 after:border-green-400 after:text-xl text-xl">
                                    upload image
                                </x-button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
                    <div class="text-white border-2 border-green-400 h-full w-fit flex justify-center items-center bg-slate-700">
                        <div>
                            sddsfds
                        </div>
                    </div>
        </div>
    </main>
</x-layout>
