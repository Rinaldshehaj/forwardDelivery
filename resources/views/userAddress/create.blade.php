@extends('layouts.app')

@section('content')
<form action="{{ route("storeAddress") }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label> Full name </label>
        <input name="full_name" type="text">

        <label> Street name</label>
        <input name="street_name" type="text">

        <label>Apartment detail</label>
        <input name="apartment_detail" type="text">

        <label>Country</label>
        <input name="country" type="text">

        <label>City</label>
        <input name="city" type="text">

        <label>Zip Code</label>
        <input name="zip_code" type="text">

        <label>Phone number</label>
        <input name="phone_number" type="text">

        <input class="btn btn-primary" type="submit" value="Save">
    </div>
</form>
@endsection
