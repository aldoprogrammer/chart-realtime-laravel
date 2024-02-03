@extends('layouts.app')
@section('title', 'User List')
@section('content-header', 'User List')
@section('content-action')
    <a href="{{route('users.create')}}"
    class="btn btn-info">Add New</a>
@endsection
@section('content')
    <div class="card text-start">
        <div class="card-body">
            <div class="table-responsive-lg">
                <div>Hello User Lists</div>
            </div>

        </div>
    </div>

@endsection

