<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include ('includes.header')
</head>

<body class="bg-[#f3f4f6]">
    @include('includes.navbar')

    <main>
        @yield('content')
    </main>

    @include ('includes.scripts')
</body>

</html>
