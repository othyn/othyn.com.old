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
        @slot('title', 'htop')
        @include('home.skills')
    @endcomponent

    @component('components.block', ['type' => 'light'])
        @slot('title', 'ls -lah ~/git')
        @include('home.projects')
    @endcomponent

    @component('components.block', ['type' => 'dark'])
        @slot('title', 'history | grep me')
        @include('home.history')
    @endcomponent

    @component('components.block', ['type' => 'light'])
        @slot('title', 'ls -lah /opt')
        @include('home.hobbies')
    @endcomponent

    @component('components.block', ['type' => 'dark'])
        @slot('title', 'wall')
        @include('home.social')
    @endcomponent

@endsection
