@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4>Observer List</h4>
                </div>
                <div class="col-md-6">
                    <a class="btn btn-info" href="{{route('observers.create')}}">Create New</a>
                </div>
            </div>
        </div>
    </div>

@endsection