@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <form action="{{ route('updateShop', $shop->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label class="form-label">Shop name</label>
        <input class="form-control" type="text" name="shop_name" value="{{ $shop->shop_name }}">
        <label class="form-label">Link of the shop</label>
        <input class="form-control" type="text" name="link" value="{{ $shop->link }}">
        <label class="form-label">Shop logo</label>
        <input class="form-control" type="file" name="logo">
        <img class="form-control" src="{{ $shop->logo_path }}" alt="Shop logo" style="height: 250px; width: 250px;">
        <input type="submit" value="Save" class="mt-5 btn btn-primary">
    </form>
@stop
