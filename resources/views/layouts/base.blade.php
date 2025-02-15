<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-head></x-head>

<body class="font-sans antialiased">
    {{ $slot}}
</body>

</html>