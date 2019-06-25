<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
    @include ('layouts.header')

    <body class="h-100">
        <div id="app" class="h-100">
            @if (View::hasSection('main-content'))
                @yield ('main-content')
            @else
                @component('components.fullscreen')
                    <h4 class="subtitle rainbow">This page has no content.</h4>
                @endcomponent
            @endif
        </div>

        @include ('layouts.footer')
    </body>
</html>
