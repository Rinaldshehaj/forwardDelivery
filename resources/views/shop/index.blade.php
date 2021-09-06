@extends('adminlte::page')

@section('title', 'Shops')

@section('content')

    <div class="mb-4">
        <a href="{{ route('createShops') }}" class="btn btn-primary">Create new shop</a>
    </div>
    <div class="container d-flex flex-wrap">
        @foreach($shops as $shop)
            <div class="col-12 col-lg-4">
                <div class="col-12">
                    <div class="card">
                        <div class="align-content-center card-body d-flex flex-column">
                            <a href="{{ $shop->link }}">
                                <img src="{{ $shop->logo_path }}" alt="Shop logo" class="w-100 h-100">
                            </a>
                            <h5 class="text-center mt-1 mb-1">
                                {{ $shop->shop_name }}
                            </h5>
                            <div class="d-flex justify-content-around">
                                <a href="{{ route('editShop', $shop->id) }}" class="btn btn-warning">Modify</a>
                                <form type="submit"
                                      method="POST"
                                      action="{{ route('deleteShop', ['id' => $shop->id]) }}">
                                    @csrf
                                    <button onclick="return confirm('Are you sure you want to delete?')"
                                            class="btn btn-danger"
                                            type="submit">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop
