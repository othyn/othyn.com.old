@extends ('layouts.master')

@section ('title', 'home')

@section ('main-content')

    @component('components.fullscreen')
        <typography-title is-full-screen></typography-title>
    @endcomponent

    @component('components.lightblock')
        @include('home.timeline')
    @endcomponent

@endsection
