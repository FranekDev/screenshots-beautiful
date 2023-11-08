@props(['value'])

<div {{ $attributes->merge(['class' => 'w-[65px] h-[65px] rounded-full color-preview']) }}>
    <input
        type="hidden"
        name=""
        value="{{ $value }}"
    >
</div>
