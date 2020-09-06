<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }}</title>
    {{-- Bootstrapp Style --}}
    <link rel="stylesheet" href="{{ asset('boots/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="py-4">
        @include('layout.partials.navbar')
        {{-- notification alert--}}
        @include('alert')
        @yield('content')
    </div>
</body>
</html>
