@extends('adminlte::page')

@section('content')
<form method="POST" action="{{ route('storeCountry') }}">
    @csrf
    <label>Name</label>
    <input name="name" type="text">
    <input type="submit" class="btn btn-primary">
</form>
@endsection
