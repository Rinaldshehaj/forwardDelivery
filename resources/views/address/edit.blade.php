@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <h2>Change <strong>{{ $country->name }}</strong> address details</h2>
    <form method="POST" action="{{ route('updateCountryAddress', $address->id) }}">
        @csrf
        <label class="form-label">Address Line 1</label>
        <input class="form-control" type="text" value="{{ $address->address_line_1 }}" name="address_line_1">
        <label class="form-label">Address Line 2</label>
        <input class="form-control" type="text" value="{{ $address->address_line_2 }}" name="address_line_2">
        <label class="form-label">City</label>
        <input class="form-control" type="text" value="{{ $address->city }}" name="city">
        <label class="form-label">State</label>
        <input class="form-control" type="text" value="{{ $address->state }}" name="state">
        <label class="form-label">Zip</label>
        <input class="form-control" type="text" value="{{ $address->zip }}" name="zip">
        <label class="form-label">Phone</label>
        <input class="form-control" type="text" value="{{ $address->phone }}" name="phone">
        <input type="submit" value="Save" class="mt-4 btn btn-primary">
    </form>
@stop
