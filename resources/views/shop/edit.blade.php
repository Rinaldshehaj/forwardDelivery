@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <form action="{{ route('updateShop', $shop->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Shop name</label>
        <input type="text" name="shop_name" value="{{ $shop->shop_name }}">
        <label>Shop logo</label>
        <img src="{{ $shop->logo_path }}" alt="Shop logo" style="height: 250px; width: 250px;">
        <input type="file" name="logo">
        <label>Link of the shop</label>
        <input type="text" name="link" value="{{ $shop->link }}">
        <input type="submit" value="Save" class="btn btn-primary">
    </form>
@stop
