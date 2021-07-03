@extends('adminlte::page')
@section('title', 'AdminLTE')

@section('content')
    <h2>Hello {{ $user_address->full_name }}</h2>
    <form method="POST" action="{{ route('updateAddress', $user_address->id) }}">
        @csrf
        <label>Full name</label>
        <input type="text" value="{{ $user_address->full_name }}" name="full_name">
        <label>Street name</label>
        <input type="text" value="{{ $user_address->street_name }}" name="street_name">
        <label>Apartment detail</label>
        <input type="text" value="{{ $user_address->apartment_detail }}" name="apartment_detail">
        <label>Country</label>
        <input type="text" value="{{ $user_address->country }}" name="country">
        <label>Zip</label>
        <input type="text" value="{{ $user_address->zip_code }}" name="zip_code">
        <label>Phone number</label>
        <input type="text" value="{{ $user_address->phone_number }}" name="phone_number">
        <input type="submit" value="Save" class="btn btn-primary">
    </form>
@stop
