@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <h2>Name : {{ $authUser->name }}</h2>
    <h2>Email : {{ $authUser->email }}</h2>
    <a href="{{ route('editAddress', $authUser->id) }}">Reset your password</a>
@stop
