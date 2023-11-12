<x-layout class="bg-neutral-900">

    <x-flash-message class="bg-red-400 text-neutral-900"/>

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

                <div class="w-full h-full overflow-y-scroll relative">
                    <div class="w-full h-fit absolute">
                        @if (isset($images))
                            <table class="w-full h-full ">
                                <thead class="bg-neutral-900">
                                <tr class="text-green-300 text-xl">
                                    <td class="py-2 pl-4">Lp.</td>
                                    <td>Image</td>
                                    <td>Owner</td>
                                    <td>Email</td>
                                    <td>Uploaded at</td>
                                    <td>Size</td>
                                    <td class="pr-4"></td>
                                </tr>
                                </thead>

                                <tbody class="text-neutral-300">
                                @foreach($images as $image)
                                    <tr class="{{ $loop->odd ? 'bg-neutral-950' : 'bg-neutral-900' }} p-2 px-8">
                                        <td class="pl-4 py-2">{{ $loop->iteration }}</td>
                                        <td class="p-2 flex justify-center items-center">
                                            <div class="rounded overflow-hidden w-fit h-fit">
                                                <img
                                                    src="/storage/{{ $image->name }}"
                                                    alt="Photo"
                                                    class="w-auto h-auto max-w-20 max-h-10 object-contain"
                                                >
                                            </div>
                                        </td>
                                        {{--                                        <td>{{ $image->name }}</td>--}}
                                        <td>{{ $image->owner->name }}</td>
                                        <td>{{ $image->owner->email }}</td>
                                        <td>{{ $image->created_at->format('d/m/Y') }}</td>
                                        <td>Size</td>
                                        <td class="pr-4">
                                            <form
                                                action="/admin/images/{{ $image->id }}"
                                                method="post"
                                            >
                                                @csrf
                                                @method('DELETE')
                                                <input
                                                    type="hidden"
                                                    name="image"
                                                    value="{{ $image->id }}"
                                                >
                                                <button class="text-xs text-red-300">Delete</button>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p class="text-neutral-300 font-krona text-3xl">No users</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
