@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('storeCountryAddress') }}" enctype="multipart/form-data">
    @csrf
    <label>Address Line 1</label>
    <input type="text" name="address_line_1">
    <label>Address Line 2</label>
    <input type="text" name="address_line_2">
    <label>City</label>
    <input type="text" name="city">
    <label>State</label>
    <input type="text" name="state">
    <label>Zip</label>
    <input type="text" name="zip">
    <label>Country</label>
    <select name="country_id">
        @foreach($countries as $country):
            <option value="{{$country['id']}}">{{$country['name']}}</option>
        @endforeach
    </select>
    <label>Phone</label>
    <input type="text" name="phone">
    <input type="submit" value="Save" class="btn btn-primary">
</form>
@endsection
