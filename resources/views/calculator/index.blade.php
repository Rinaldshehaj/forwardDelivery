@extends('layouts.app')

@section('content')
    <div class="pb-4">
        <form class="container" name="calculator_form" id="calculator_form" method="POST" action="{{ route('calculate') }}" enctype="multipart/form-data">
        @csrf
            <div class="d-flex">
                <div class="d-flex justify-content-around">
                    <div class="d-flex flex-column">
                        <label class="form-label">From</label>
                        <select class="form-control" name="fromCountry" id="fromCountry">
                            @foreach($countries as $country)
                                <option value="{{ $country->name  }}"> {{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-flex flex-column">
                        <label class="form-label">To</label>
                        <select class="form-control" name="toCountry" id="toCountry">
                            @include('partials.countries_select_options')
                        </select>
                    </div>
                </div>
            </div>
                <div class="d-flex justify-content-around">
                    <div class="d-flex flex-column">
                        <label class="form-label">Length</label>
                        <input class="form-control" type="text" name="length">
                    </div>
                    <div class="d-flex flex-column">
                        <label class="form-label">Height</label>
                        <input class="form-control" type="text" name="height">
                    </div>
                </div>
            </div>
        <div>
            <label class="form-label">Width</label>
            <input class="form-control" type="text" name="width">
            <label class="form-label">Weight</label>
            <input class="form-control" type="text" name="weight">
        </div>
        <input type="submit" value="Calculate" class="btn btn-primary calculate__js">
    </form>
    </div>
    <div class="container">
        <table class="table d-none" name="rates_table" id="rates_table">
            <thead>
            <th>Carrier</th>
            <th>Service</th>
            <th>Rate</th>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
@endsection
