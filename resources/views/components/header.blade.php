<header class="flex justify-between items-center px-4 mt-4 w-full">
    <h4 class="{{ request()->is('/') ? '' : 'text-green-300' }} font-krona">
        <a href="/">screenshots<br>beautiful</a>
    </h4>
    <div class="flex justify-center items-center gap-8">
    {{ $slot }}
    </div>
</header>
