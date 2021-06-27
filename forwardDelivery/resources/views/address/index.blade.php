@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <div>
        <a href="{{ route('createCountryAddress') }}">+ Create an address for a country</a>
    </div>
    @foreach($addresses as $address)
        <!-- Country address detail -->
        <h1> {{ get_country_by_id($address->country_id)->name }} </h1>
        <h2>Address Line 1 : {{ $address->address_line_1 }}</h2>
        <h2>Address Line 2 : {{ $address->address_line_2 }}</h2>
        <h2>City : {{ $address->city }}</h2>
        <h2>State : {{ $address->state }}</h2>
        <h2>Zip : {{ $address->zip }}</h2>
        <h2>Phone : {{ $address->phone }}</h2>
        <a href="{{ route('editCountryAddress', $address->id) }}" class="btn btn-warning">Modify</a>
        <p>----------------------------------------</p>
    @endforeach
@stop
