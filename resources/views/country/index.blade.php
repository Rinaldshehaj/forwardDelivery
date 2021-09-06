@extends('adminlte::page')

@section('content')
    <div class="mb-4">
        <a href="{{ route('createCountry') }}" class="btn btn-primary">Create new country</a>
    </div>
    @foreach($countries as $country)
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4>{{ $country->name }}</h4>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@stop
