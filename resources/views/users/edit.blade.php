@extends('layouts.app')
@section('title', 'Edit User')
@section('content-header', ' Edit Usert')
@section('content-action')
    <a href="{{ route('users.create') }}" class="btn btn-info">Add New</a>
@endsection
@section('content')
    <div class="card text-start">
        <div class="card-body">
            <p>@include('message.flash-message')</p>
            <div class="table-responsive-lg">
                <form action="{{ route('users.update', $users->id)}}"
                class="row g-3 needs-validation"
                method="POST">
                @csrf
                @method('PUT')
                    <div class="col-md-4">
                        <label for="name" class="form-label">
                            Name
                        </label>
                        <input type="text" class="form-control" id="name" placeholder="Input name"
                            value="{{ old('name', $users->name) }}" required name="name">
                        @if ($errors->has('name'))
                            <span class="text-danger">
                                {{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="email" class="form-label">
                            Email
                        </label>
                        <input type="email" class="form-control"
                        id="email" placeholder="Input email"
                            value="{{ old('email', $users->email) }}" required
                            name="email">
                        @if ($errors->has('email'))
                            <span class="text-danger">
                                {{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="text-right col-12">
                        <button class="btn btn-primary" type="submit" name="submit">
                            <i class="fa fa-plus"></i>
                            Update
                        </button>
                        <a href="{{ route('users.index') }}" class="btn btn-danger m-l-5">
                            <i class="fa fa-close"></i> Close
                        </a>
                    </div>


                </form>


            </div>

        </div>

    </div>
    </div>

@endsection
