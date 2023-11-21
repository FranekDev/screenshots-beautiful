<div {{ $attributes->merge(['class' => 'space-y-4 w-full pl-8']) }}>
    <h1 class="text-green-300 font-krona text-3xl">
        {{ $slot }}
    </h1>
</div>
