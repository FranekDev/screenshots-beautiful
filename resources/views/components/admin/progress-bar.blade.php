@props(['title', 'size', 'maxSize'])

<div class="border-2 border-green-400 col-span-2 h-fit w-auto">
    <input
        id="progress"
        type="hidden"
        name=""
        value="{{ $size }}"
    >
    <p class="p-4 text-neutral-300 text-xl font-inter">{{ $title }} {{ $size }}GB / {{ $maxSize }}GB</p>
    <div class="p-4">
        <div class="h-5 w-full border-2 border-green-400">
            <div id="progress-bar" class="bg-green-400 h-full">

            </div>
        </div>
    </div>
</div>
