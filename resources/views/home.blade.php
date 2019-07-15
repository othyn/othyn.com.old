@extends ('layouts.master')

@section ('title', 'home')

@section ('main-content')

    @component('components.block', ['id' => 'about'])
        @slot('title', 'man me')
        @include('home.about')
    @endcomponent

    @component('components.block', ['id' => 'skills'])
        @slot('title', 'htop')
        @include('home.skills')
    @endcomponent

    @component('components.block', ['id' => 'projects'])
        @slot('title', 'ls -lah ~/git')
        @include('home.projects')
    @endcomponent

    @component('components.block', ['id' => 'hobbies'])
        @slot('title', 'ls -lah /opt')
        @include('home.hobbies')
    @endcomponent

    @component('components.block', ['id' => 'history'])
        @slot('title', 'history | grep me')
        @include('home.history')
    @endcomponent

    @component('components.block', ['id' => 'social'])
        @slot('title', 'wall')
        @include('home.social')
    @endcomponent

@endsection
