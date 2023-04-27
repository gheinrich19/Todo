<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @livewireStyles
    {{$slot}}
</head>
<body>
<h1 class="text-3xl font-thin font-bold underline rounded">
    Hello world!
</h1>
@livewireScripts
</body>
</html>
