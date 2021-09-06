@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <form action="{{ route('storeShops') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group p-5">
            <label class="form-label">Shop name</label>
            <input type="text" class="form-control" name="shop_name">
            <label class="form-label">Shop logo</label>
            <input type="file" class="form-control" name="logo" required>
            <label class="form-label">Slug</label>
            <input type="text" class="form-control" name="link">
            <label class="form-label">Country</label>
            <select class="form-control" name="country" id="country" required>
                <option>Select country</option>
                @foreach($countries as $country)
                    <option value="{{ $country->id  }}"> {{ $country->name }}</option>
                @endforeach
            </select>
            <input type="submit" value="Save" class="btn btn-primary mt-4">
        </div>
    </form>
@stop
