@extends('layouts.app')

@section('content')
    <div class="pb-4">
        <div class="container-fluid">
            <div class="container d-flex justify-content-center">
                <h2 class="mb-5 mt-4">This will be a desc</h2>
            </div>
        </div>
        <form class="container rounded shadow-lg" name="calculator_form" id="calculator_form"
              method="POST"
              action="{{ route('calculate') }}" enctype="multipart/form-data">
            @csrf
            <div class="p-4">
                <h3>The calculator</h3>
            </div>
            <hr/>
            <div class="d-flex justify-content-center">
                <h2>Sponsors</h2>
            </div>
            <div class="d-flex justify-content-between flex-wrap p-5">
                <div class="d-flex flex-column">
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
                <div class="d-flex align-self-center flex-column">
                    <div class="d-flex justify-content-around">
                        <div class="d-flex flex-column mr-5">
                            <label class="form-label">Length</label>
                            <input class="form-control" type="text" name="length">
                        </div>
                        <div class="d-flex flex-column">
                            <label class="form-label">Height</label>
                            <input class="form-control" type="text" name="height">
                        </div>
                    </div>
                    <div class="d-flex justify-content-around">
                        <div class="d-flex flex-column mr-5">
                            <label class="form-label">Width</label>
                            <input class="form-control" type="text" name="width">
                        </div>
                        <div class="d-flex flex-column">
                            <label class="form-label">Weight</label>
                            <input class="form-control" type="text" name="weight">
                        </div>
                    </div>
                    <div class="pt-5">
                        <input type="submit" value="Calculate" class="btn btn-primary calculate__js">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        <table class="table mt-5 d-none" name="rates_table" id="rates_table">
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
