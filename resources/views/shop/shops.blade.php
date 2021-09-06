@extends('layouts.app')

@section('content')
    <div class="container text-center mb-4">
        <h3>Shops</h3>
    </div>
    <div class="container d-flex flex-wrap">
        @foreach($shops as $shop)
            <div class="col-12 col-lg-4">
                <div class="col-12">
                    <div class="card">
                        <div class="align-content-center d-flex flex-column">
                            <a href="{{ $shop->link }}">
                                <img src="{{ $shop->logo_path }}" alt="Shop logo" class="w-100 h-100">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
