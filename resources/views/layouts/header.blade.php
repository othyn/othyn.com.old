<head>
    <title>{{ env('APP_NAME', 'othyn') }}. @yield('title').</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Senior software engineer in the UK. This is my personal site.">

    {{-- <link rel="shortcut icon" href="/favicon.png"> --}}
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
