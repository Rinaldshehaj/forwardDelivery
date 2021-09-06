@extends('layouts.app')
@section('title', 'Edit Address Details')

@section('content')
    <form method="POST" action="{{ route('updateAddress', $user_address->id) }}">
        @csrf
        <div class="container p-5 rounded shadow-lg">
            <h2>Hello {{ $user_address->full_name }}</h2>
            <label class="form-label">Full name</label>
            <input class="form-control" type="text" value="{{ $user_address->full_name }}" name="full_name">
            <label class="form-label">Street name</label>
            <input class="form-control" type="text" value="{{ $user_address->street_name }}" name="street_name">
            <label class="form-label">Apartment detail</label>
            <input class="form-control" type="text" value="{{ $user_address->apartment_detail }}" name="apartment_detail">
            <label class="form-label">Country</label>
            <input class="form-control" type="text" value="{{ $user_address->country }}" name="country">
            <label class="form-label">Zip</label>
            <input class="form-control" type="text" value="{{ $user_address->zip_code }}" name="zip_code">
            <label class="form-label">Phone number</label>
            <input class="form-control" type="text" value="{{ $user_address->phone_number }}" name="phone_number">
            <input type="submit" value="Save" class="mt-5 btn btn-primary">
        </div>
    </form>
@stop
