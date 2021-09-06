@extends('adminlte::page')

@section('content')
    <div class="mb-4">
        <a href="{{ route('createCountry') }}" class="btn btn-primary">Create new country</a>
    </div>
    @foreach($countries as $country)
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4>{{ $country->name }}</h4>
                            <form type="submit"
                                  method="POST"
                                  action="{{ route('deleteCountry', ['id' => $country->id]) }}">
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
@stop
