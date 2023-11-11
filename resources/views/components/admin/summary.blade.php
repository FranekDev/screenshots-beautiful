@props(['title'])

<div class="w-60 h-52 border-2 border-green-400">
    <p class="p-4 text-neutral-300 text-xl font-inter">{{ $title }}</p>
    <div class="text-green-300 font-krona text-[90px] flex justify-center items-center">
        {{ $slot }}
    </div>
</div>
