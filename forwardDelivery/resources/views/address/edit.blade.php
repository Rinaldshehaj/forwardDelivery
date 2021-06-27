@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <h2>Change <strong>{{ $country->name }}</strong> address details</h2>
    <form method="POST" action="{{ route('updateCountryAddress', $address->id) }}">
        @csrf
        <label>Address Line 1</label>
        <input type="text" value="{{ $address->address_line_1 }}" name="address_line_1">
        <label>Address Line 2</label>
        <input type="text" value="{{ $address->address_line_2 }}" name="address_line_2">
        <label>City</label>
        <input type="text" value="{{ $address->city }}" name="city">
        <label>State</label>
        <input type="text" value="{{ $address->state }}" name="state">
        <label>Zip</label>
        <input type="text" value="{{ $address->zip }}" name="zip">
        <label>Phone</label>
        <input type="text" value="{{ $address->phone }}" name="phone">
        <input type="submit" value="Save" class="btn btn-primary">
    </form>
@stop
