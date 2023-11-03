@props(['href'])

<a
    href="{{ $href }}"
    class="{{ request()->routeIs($href) ? 'bg-neutral-900 text-neutral-300' : '' }} flex flex-col py-4 px-8 hover:bg-neutral-800 hover:text-neutral-300 justify-center items-center"
>
    @foreach (str_split(strtoupper($slot)) as $letter)
        <span>{{ $letter }}</span>
    @endforeach
</a>
