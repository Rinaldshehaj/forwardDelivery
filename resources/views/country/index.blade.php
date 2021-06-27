@extends('adminlte::page')

@section('content')
    <div>
        <a href="{{ route('createCountry') }}">+ Create new country</a>
    </div>
    @foreach($countries as $country)
        <h2>{{ $country->name }}</h2>
    @endforeach
@stop
