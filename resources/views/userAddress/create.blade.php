@extends('layouts.app')

@section('content')
    <form action="{{ route("storeAddress") }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container p-5 rounded shadow-lg">
            <h3>Complete your profile</h3>
            <hr/>
            <label class="form-label"> Full name </label>
            <input class="form-control" name="full_name" type="text">

            <label class="form-label"> Street name</label>
            <input class="form-control" name="street_name" type="text">

            <label class="form-label">Apartment detail</label>
            <input class="form-control" name="apartment_detail" type="text">

            <label class="form-label">Country</label>
            <input class="form-control" name="country" type="text">

            <label class="form-label">City</label>
            <input class="form-control" name="city" type="text">

            <label class="form-label">Zip Code</label>
            <input class="form-control" name="zip_code" type="text">

            <label class="form-label">Phone number</label>
            <input class="form-control" name="phone_number" type="text">

            <input class="mt-4 btn btn-primary" type="submit" value="Save">
        </div>
    </form>
@endsection
