@extends('adminlte::page')

@section('content')
<form method="POST" class="container" action="{{ route('storeCountry') }}">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input name="name" class="form-control" type="text">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <input type="submit" class="btn btn-primary">
        </div>
    </div>
</form>
@endsection
