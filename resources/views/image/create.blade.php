<x-layout class="bg-neutral-900">

    <x-flash-message class="bg-green-400 text-neutral-900"/>

    <main class="flex flex-col justify-between items-center">

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
{{--                        @if (Session::has('image'))--}}
{{--                            <div--}}
{{--                                class="border-4 border-green-500 w-[600px] h-[350px] flex items-center justify-center"--}}
{{----}}
{{--                            >--}}
{{--                                <div--}}
{{--                                    class="w-full h-full flex items-center justify-center p-10"--}}
{{--                                    id="image-container"--}}
{{--                                >--}}
{{--                                    <img--}}
{{--                                        src="/storage/{{ Session::get('image')->name }}"--}}
{{--                                        alt="Image"--}}
{{--                                        class="w-auto h-full rounded-xl shadow-xl transition-all"--}}
{{--                                        id="image-preview"--}}
{{--                                    >--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @else--}}
                            <x-form.upload-image/>
{{--                        @endif--}}
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
