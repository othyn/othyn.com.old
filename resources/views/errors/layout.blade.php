<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
    @include ('layouts.header')

    <body class="h-100">
        <div class="container h-100">
            <div class="row h-100 align-items-center text-center">
                <div class="col-12">
                    <h4 class="subtitle rainbow">@yield('code'). @yield('message').</h4>
                </div>
            </div>
        </div>

        @include ('layouts.footer')
    </body>
</html>
