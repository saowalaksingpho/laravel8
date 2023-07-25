<x-bootstrap title="{{ $Staff->title }}">
    <div class="row g-4">
        <div class="col-lg-12">
            <a class="btn btn-primary" href="{{ route('Staff.index') }}"> Back</a>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-lg-4">
            <img src="{{ $Staff->photo }}" class="img-fluid img-thumbnail" />
        </div>
        <div class="col-lg-8">

            <h2>{{ $Staff->title }}</h2>
            <div>{{ $Staff->content }} </div>
            <hr />
            <div>
                <strong>Price: </strong>
                <span class="fs-2 text-warning">฿{{ $Staff->price }}</span>
            </div>
            <hr />
            <div>
                <strong>Stock: </strong>
                <span>{{ $Staff->stock }}</span>
            </div>
        </div>
    </div>
</x-bootstrap>