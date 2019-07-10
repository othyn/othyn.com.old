@extends ('layouts.master')

@section ('title', 'home')

@section ('main-content')

    @component('components.fullscreen')
        <typography-title is-full-screen></typography-title>
    @endcomponent

    @component('components.block', ['type' => 'light'])
        @slot('title', 'man me')
        @include('home.about')
    @endcomponent

    @component('components.block', ['type' => 'dark'])
        @slot('title', 'history | grep me')
        @include('home.history')
    @endcomponent

    @component('components.block', ['type' => 'light'])
        @slot('title', 'htop')
        @include('home.skills')
    @endcomponent

    @component('components.block', ['type' => 'dark'])
        @slot('title', 'cd ~/git && ls -lah')
        @include('home.projects')
    @endcomponent

@endsection
