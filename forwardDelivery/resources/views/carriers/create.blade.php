@extends('adminlte::page')

@section('content')
    <form method="POST" action="{{ route('storeCarriers') }}" enctype="multipart/form-data">
        @csrf
        <select name="carrier_type" >
            @foreach($carrier_types as $carrier)
                <option value="{{ $carrier->type }}">{{ $carrier->readable }}</option>
            @endforeach
        </select>
    </form>

@endsection
