<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="d-flex justify-content-between mb-3">
            @guest
            @else
            <div id="create-space">
                <a href="{{ route('space.create') }}" class="btn btn-primary">Pin New Location</a>
            </div>
            @endguest
            <div id="view-space">
                <a href="{{ route('space.index') }}" class="btn btn-secondary"><i class="fas fa-list"></i></a> |
                <a href="{{ route('space.browse') }}" class="btn btn-secondary"><i class="fas fa-globe"></i></a>
            </div>
        </div>
    </div>
</div>
