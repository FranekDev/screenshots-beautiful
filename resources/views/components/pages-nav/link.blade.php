@props(['href'])

<a
    href="{{ $href }}"
    class="{{ request()->routeIs($href) ? 'bg-green-400 text-neutral-900' : '' }} flex flex-col py-4 px-8 hover:bg-green-300 hover:text-neutral-900 justify-center items-center"
>
    @foreach (str_split(strtoupper($slot)) as $letter)
        <span>{{ $letter }}</span>
    @endforeach
</a>
