@extends('layouts.main')

@section('content')

<div class="col-md-12">
<br>
    </div>
<div class="row">
    <h1>Kleurboeken</h1>
    <div class="col-md-12">
    <br>
            @foreach ($images as $image)
            <div class="col-md-8">
                <h2>{{ $image->title }}</h2>
                <br>
                <img src="{{ asset('images/' . $image->image) }}" height="480" width="300" alt="Image not working."/>
            </div>
            <br>
            <div class="col-md-4">
                <a href="#" class="btn btn-lg btn-block btn-primary">View Product</a>
                <h5>€{{ $image->price }}</h5>
            </div>
            <hr>
        @endforeach
    </div>
</div>


@endsection