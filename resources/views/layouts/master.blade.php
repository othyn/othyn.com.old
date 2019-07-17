<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="w-100 h-100">
    @include ('layouts.header')

    <body class="terminal w-100 h-100">
        <div id="app">
            <div class="container">
                @include('layouts.nav')

                <main>
                    @yield ('main-content')
                </main>
            </div>
        </div>

        @include ('layouts.footer')
    </body>
</html>
