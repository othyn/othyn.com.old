@extends ('layouts.master')

@section ('title', 'home')

@section ('main-content')

    @component('components.fullscreen')
        <typography-title is-full-screen></typography-title>
    @endcomponent

    @component('components.block', ['type' => 'light'])
        @slot('title')
            {{-- hello world --}}
            man me
        @endslot

        @include('home.about')
    @endcomponent

    @component('components.block', ['type' => 'dark'])
        @slot('title')
            {{-- history of me --}}
            history | grep me
        @endslot

        @include('home.timeline')
    @endcomponent

@endsection
