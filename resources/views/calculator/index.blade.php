@extends('layouts.app')

@section('content')
    <div class="pb-4">
        <form name="calculator_form" id="calculator_form" method="POST" action="{{ route('calculate') }}" enctype="multipart/form-data">
        @csrf
        <label>From</label>
        <select name="fromCountry" id="fromCountry">
            @foreach($countries as $country)
                <option value="{{ $country->name  }}"> {{ $country->name }}</option>
            @endforeach
        </select>
        <label>To</label>
        <select name="toCountry" id="toCountry">
            @include('partials.countries_select_options')
        </select>
        <div>
            <label>Length</label>
            <input type="text" name="length">
            <label>Height</label>
            <input type="text" name="height">
            <label>Width</label>
            <input type="text" name="width">
            <label>Weight</label>
            <input type="text" name="weight">
        </div>
        <input type="submit" value="Calculate" class="btn btn-primary calculate__js">
    </form>
    </div>
    <table class="table d-none" name="rates_table" id="rates_table" >
        <thead>
            <th>Carrier</th>
            <th>Service</th>
            <th>Rate</th>
        </thead>
        <tbody>

        </tbody>
    </table>
@endsection
