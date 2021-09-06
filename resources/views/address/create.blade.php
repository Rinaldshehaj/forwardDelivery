@extends('adminlte::page')

@section('title', 'Addresses')

@section('content')
<form method="POST" action="{{ route('storeCountryAddress') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
    <label class="form-label">Address Line 1</label>
    <input class="form-control" type="text" name="address_line_1">
    <label class="form-label">Address Line 2</label>
    <input class="form-control" type="text" name="address_line_2">
    <label class="form-label">City</label>
    <input class="form-control" type="text" name="city">
    <label class="form-label">State</label>
    <input class="form-control" type="text" name="state">
    <label class="form-label">Zip</label>
    <input class="form-control" type="text" name="zip">
    <label class="form-label">Country</label>
    <select class="form-control" name="country_id">
        @foreach($countries as $country):
            <option value="{{$country['id']}}">{{$country['name']}}</option>
        @endforeach
    </select>
    <label>Phone</label>
    <input class="form-control" type="text" name="phone">
    <input type="submit" value="Save" class="mt-4 btn btn-primary">
    </div>
</form>
@endsection
