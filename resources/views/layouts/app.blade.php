<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DMS - @yield('title')</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-[#f3f4f6]">
    @include('includes.navbar')

    <main>
        @yield('content')
    </main>

</body>

</html>
