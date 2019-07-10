@component('components.timeline', ['type' => 'left', 'first' => true])
    @slot('date', 'sometime in 2011')
    @slot('title', 'Something')

    Something happened! :D
@endcomponent

@component('components.timeline', ['type' => 'right'])
    @slot('date', 'sometime in 2011')
    @slot('title', 'Something')

    Something happened! :D
@endcomponent

@component('components.timeline', ['type' => 'left'])
    @slot('date', 'sometime in 2011')
    @slot('title', 'Something')

    Something happened! :D
@endcomponent

@component('components.timeline', ['type' => 'right', 'last' => true])
    @slot('date', 'sometime in 2011')
    @slot('title', 'Something')

    Something happened! :D
@endcomponent
