<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Document management system') }}</title>

    @vite('resources/css/app.css')
</head>

<body>
    @include('layouts.app')

    <main>
        <div class="w-full max-w-sm mx-auto overflow-hidden shadow-md">
            <h1 class="text-center">Home page</h1>
        </div>
    </main>

</body>

</html>
