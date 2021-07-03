@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <form action="{{ route('storeShops') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Shop name</label>
        <input type="text" name="shop_name">
        <label>Shop logo</label>
        <input type="file" name="logo">
        <label>Link of the shop</label>
        <input type="text" name="link">
        <input type="submit" value="Save" class="btn btn-primary">
    </form>
@stop
