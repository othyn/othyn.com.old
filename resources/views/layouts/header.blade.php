<head>
    <title>{{ env('APP_NAME', 'othyn') }}. @yield('title').</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <link rel="shortcut icon" href="/favicon.png"> --}}
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
