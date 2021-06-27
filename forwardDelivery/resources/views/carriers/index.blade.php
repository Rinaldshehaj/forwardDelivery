@extends('adminlte::page')

@section('content')
    @foreach($carrier_account as $carrier)
        <div>
           ID: {{ $carrier->id }}
        </div>
        <div>
           Type: {{ $carrier->type }}
        </div>
        <div>
           Description: {{ $carrier->description }}
        </div>
        -------------------------------------------
    @endforeach
@endsection
