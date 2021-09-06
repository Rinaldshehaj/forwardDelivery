@extends('layouts.app')
@section('content')
    <div class="row p-4 mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1> Full name : {{ $address_details['full_name'] }} </h1>
                    <h2>Street Name : {{ $address_details['street_name'] }}</h2>
                    <h2>Apartment Details : {{ $address_details['apartment_detail'] }}</h2>
                    <h2>Country : {{ $address_details['country'] }}</h2>
                    <h2>City : {{ $address_details['city'] }}</h2>
                    <h2>Zip : {{ $address_details['zip_code'] }}</h2>
                    <h2>Phone : {{ $address_details['phone_number'] }}</h2>
                    <a href="{{ route('editAddress', ['id' => $address_details['id']]) }}" class="btn btn-warning">Edit your details</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-4">
        <h3>Use one of the addresses</h3>
    </div>
    <div class="container d-flex flex-wrap">
        @foreach($addresses as $address)
            <div class="col-12 col-lg-4">
                <div class="col-12">
                    <div class="card mt-5">
                        <div class="card-body text-center">
                            <h1> {{ get_country_by_id($address->country_id)->name }} </h1>
                            <h2>Address Line 1 : {{ $address->address_line_1 }}</h2>
                            <h2>Address Line 2 : {{ $address->address_line_2 }}</h2>
                            <h2>City : {{ $address->city }}</h2>
                            <h2>State : {{ $address->state }}</h2>
                            <h2>Zip : {{ $address->zip }}</h2>
                            <h2>Phone : {{ $address->phone }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
