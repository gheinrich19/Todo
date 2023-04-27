<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @livewireStyles
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!-- We've used 3xl here, but feel free to try other max-widths based on your needs -->
        <div class="mx-auto max-w-3xl">
            {{$slot}}
        </div>
    </div>

</head>
<body>
<h1 class="text-3xl font-thin font-bold underline rounded">
    Hello world!
</h1>
@livewireScripts
</body>
</html>
