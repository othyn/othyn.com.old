<div class="row no-gutters">
    @if ($type == 'left')
        <div class="col-sm py-2">
            <div class="card">
                <div class="card-body">
                    <div class="float-right text-muted small">{{ $date }}</div>
                    <h4 class="card-title text-muted">{{ $title }}</h4>
                    <p class="card-text">{{ $slot }}</p>
                </div>
            </div>
        </div>
    @else
        <div class="col-sm"></div>
    @endif

    <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
        <div class="row h-50">
            @if (!isset($first))
                <div class="col border-right">&nbsp;</div>
            @else
                <div class="col">&nbsp;</div>
            @endif
            <div class="col">&nbsp;</div>
        </div>
        <h5 class="m-2">
            <span class="badge badge-pill bg-light border">&nbsp;</span>
        </h5>
        <div class="row h-50">
            @if (!isset($last))
                <div class="col border-right">&nbsp;</div>
            @else
                <div class="col">&nbsp;</div>
            @endif
            <div class="col">&nbsp;</div>
        </div>
    </div>

    @if ($type == 'right')
        <div class="col-sm py-2">
            <div class="card">
                <div class="card-body">
                    <div class="float-right text-muted small">{{ $date }}</div>
                    <h4 class="card-title text-muted">{{ $title }}</h4>
                    <p class="card-text">{{ $slot }}</p>
                </div>
            </div>
        </div>
    @else
        <div class="col-sm"></div>
    @endif
</div>
