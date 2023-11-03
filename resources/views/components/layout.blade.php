<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>Screenshots Beautiful</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body {{ $attributes(['class' => 'w-screen h-screen font-inter selection:bg-green-300 selection:text-neutral-900']) }}>

    {{ $slot }}

</body>
</html>
