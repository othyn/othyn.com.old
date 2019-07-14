<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
    @include ('layouts.header')

    <body class="h-100">
        <div class="container h-100">
            <div class="row h-100 align-items-center text-center">
                <div class="col-12">
                    <h1 class="rainbow rainbow-text">@yield('code'). @yield('message').</h1>
                </div>
            </div>
        </div>

        @include ('layouts.footer')
    </body>
</html>
