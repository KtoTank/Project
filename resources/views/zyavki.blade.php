@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        @foreach($data as $data)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $data->nomer }}</h5>
                    <p class="card-text">{{ $data->text }}</p>
                    <p class="card-text">{{ $data->statusid }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
