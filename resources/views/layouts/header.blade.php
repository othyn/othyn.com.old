<head>
    <title>{{ env('APP_NAME', 'othyn') }}. @yield('title').</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Senior software engineer in the UK. This is my personal site.">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="preload" href="{{ mix('/css/app.css') }}" as="style">
    <link rel="preload" href="{{ mix('/js/manifest.js') }}" as="script">
    <link rel="preload" href="{{ mix('/js/vendor.js') }}" as="script">
    <link rel="preload" href="{{ mix('/js/app.js') }}" as="script">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
