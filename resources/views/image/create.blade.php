<x-layout class="bg-neutral-900">

    <x-flash-message class="bg-green-400 text-neutral-900"/>

    <main class="flex flex-col justify-between items-center">

        <x-pages-header/>

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

        </div>
    </main>
</x-layout>
