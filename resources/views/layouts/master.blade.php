<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
    @include ('layouts.header')

    <body class="h-100">
        <div id="app" class="h-100">
            @if (View::hasSection('main-content'))
                <div class="container h-100">
                    @yield ('main-content')
                </div>
            @endif
        </div>

        @include ('layouts.footer')
    </body>
</html>
