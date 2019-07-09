<div class="component-block component-block-{{ $type }}">
    @component('components.title', ['type' => $type])
        {{ $title }}
    @endcomponent

    <div class="container">
        {{ $slot }}
    </div>
</div>
