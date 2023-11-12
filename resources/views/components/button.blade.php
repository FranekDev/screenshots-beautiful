@props(['type' => 'button'])

    <button {{ $attributes->merge(['class' => 'px-4 py-2 flex justify-center items-center z-50
relative before:absolute
before:border-2  before:w-full before:h-full  before:-z-10
 after:z-10  after:pt-1.5
after:border-2   after:w-full after:h-full after:absolute after:mb-3 after:ml-3 hover:after:animate-slide-in after:animate-slide-out
']) }}
            type="{{ $type }}"
    >
        {{ $slot }}
    </button>
