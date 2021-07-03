@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <a href="{{ route('createShops') }}">+ Create new shop</a>
    @foreach($shops as $shop)
        <div>
            <a href="{{ $shop->link }}">
                <img src="{{ $shop->logo_path }}" alt="Shop logo" style="height: 250px; width: 250px;">
            </a>
        </div>
        <p>
            {{ $shop->shop_name }}
        </p>
        <a href="{{ route('editShop', $shop->id) }}" class="btn btn-warning">Modify</a>
        <br>
    @endforeach
@stop
