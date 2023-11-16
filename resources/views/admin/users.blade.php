@php use App\Enums\Role; @endphp
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

        <div class="w-full h-full p-10 flex justify-center items-center">
            <div class="flex justify-start items-start border-4 border-green-400 mx-12 w-full h-full bg-dots bg-no-repeat bg-left-top max-w-[1100px]">
                <x-admin.nav/>

                <div class="w-full h-full overflow-y-scroll relative">
                    <div class="w-full h-fit absolute">
                        @if (isset($users))
                            <table class="w-full">
                                <thead class="bg-neutral-900">
                                <tr class="text-green-300 text-lg">
                                    <td class="pl-4 py-2">Lp.</td>
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>Joined at</td>
                                    <td>Role</td>
                                    <td class="pr-4"></td>
                                </tr>
                                </thead>
                                <tbody class="text-neutral-300 px-8">

                            @foreach($users as $user)
                                <tr class="{{ $loop->odd ? 'bg-neutral-950' : 'bg-neutral-900' }}">
                                    <td class="pl-4 py-2">{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                    <td>{{ ucwords($user->role) }}</td>
                                    <td class="pr-4">
                                        @if ($user->role !== Role::ADMIN->value)
                                        <form
                                            action="/admin/users/{{ $user->id }}"
                                            method="post"
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button class="text-xs text-neutral-400 hover:text-red-300 transition-all">Delete</button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No users</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
