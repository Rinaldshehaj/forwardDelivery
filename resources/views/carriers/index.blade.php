@extends('adminlte::page')
@section('title', 'Carriers')
@section('content')
    <div class="container d-flex flex-wrap">
        @foreach($carrier_account as $carrier)
            <div class="col-4">
                <div class="col-12">
                    <div class="card">
                        <div class="align-content-center card-body d-flex flex-column">
                            <div>
                                ID: {{ $carrier->id }}
                            </div>
                            <div>
                                Type: {{ $carrier->type }}
                            </div>
                            <div>
                                Description: {{ $carrier->description }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
