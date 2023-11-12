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
                            <table class="w-full h-full">
                                <thead class="w-full bg-neutral-900">
                                <tr class="text-green-300 text-xl flex justify-between p-4 w-full px-8">
                                    <th class="bg-amber-200 w-auto">Lp.</th>
                                    <th class="bg-lime-300 w-auto">Image</th>
                                    <th class="bg-slate-100 w-auto">Owner</th>
                                    <th class="bg-amber-600 w-auto">Email</th>
                                    <th class="bg-green-400 w-auto">Uploaded at</th>
                                    <th class="bg-yellow-100 w-auto">Size</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody class="text-neutral-300">
                                @foreach($images as $image)
                                    <tr class="{{ $loop->odd ? 'bg-neutral-950' : 'bg-neutral-900' }} p-2 flex justify-between [&>td]:flex [&>td]:justify-center [&>td]:w-auto [&>td]:h-auto [&>td]:items-center px-8">
                                        <td class="">{{ $loop->iteration }}</td>
                                        <td class="">
                                            <div class="rounded overflow-hidden max-w-auto max-h-auto bg-yellow-100">
                                                <img
                                                    src="/storage/{{ $image->name }}"
                                                    alt="Photo"
                                                    class="w-20 h-10 object-contain"
                                                >
                                            </div>
                                        </td>
{{--                                        <td>{{ $image->name }}</td>--}}
                                        <td>{{ $image->owner->name }}</td>
                                        <td>{{ $image->owner->email }}</td>
                                        <td>{{ $image->created_at->format('d/m/Y') }}</td>
                                        <td>Size</td>
                                        <td>
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
