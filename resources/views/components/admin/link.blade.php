@props(['href'])
<a
    href="{{ $href }}"
    class="border-b-2 border-r-2 border-green-400 text-2xl font-inter w-full px-4 py-2 text-center hover:bg-green-300 hover:text-neutral-900 transition-all {{ request()->is(substr($href, 1)) ? 'bg-green-400 text-neutral-900' : 'text-neutral-300' }}"
>
    {{ $slot }}
</a>
