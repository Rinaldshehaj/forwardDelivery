@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <div class="mb-4">
        <a href="{{ route('createCountryAddress') }}" class="btn btn-primary">Create an address for a country</a>
    </div>
    <div class="d-flex flex-wrap">
        @foreach($addresses as $address)
            <div class="col-12 col-lg-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1> {{ get_country_by_id($address->country_id)->name }} </h1>
                            <h2>Address Line 1 : {{ $address->address_line_1 }}</h2>
                            <h2>Address Line 2 : {{ $address->address_line_2 }}</h2>
                            <h2>City : {{ $address->city }}</h2>
                            <h2>State : {{ $address->state }}</h2>
                            <h2>Zip : {{ $address->zip }}</h2>
                            <h2>Phone : {{ $address->phone }}</h2>
                            <a href="{{ route('editCountryAddress', $address->id) }}" class="btn btn-warning">Modify</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop
