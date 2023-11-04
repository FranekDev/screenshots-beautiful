@if (session()->has('success'))
    <p {{ $attributes->merge(['class' => 'fixed px-4 py-2 font-krona rounded-xl shadow-xl mx-auto w-fit mt-2 text-xs inset-0 h-fit animate-slide-down']) }} id="flash-message">{{ session('success') }}</p>
@endif
