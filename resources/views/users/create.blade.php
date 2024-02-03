@extends('layouts.app')
@section('title', 'User List')
@section('content-header', 'user List')
@section('content-actino')
    <a href="{{ route('users.create') }}" class="btn btn-info">Add New</a>
@endsection
@section('content')
    <div class="card text-start">
        <div class="card-body">
            <div class="table-responsive-lg">
                <form action="" class="row g-3 needs-validation">
                    <div class="col-md-4">
                        <label for="name" class="form-label">
                            Name
                        </label>
                        <input type="text" class="form-control" id="name" placeholder="Input name"
                            value="{{ old('name') }}" required>
                        @if ($errors->has('name'))
                            <span class="text-danger">
                                {{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="email" class="form-label">
                            Email
                        </label>
                        <input type="email" class="form-control" id="email" placeholder="Input email"
                            value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="text-danger">
                                {{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="password" class="form-label">
                            Password
                        </label>
                        <input type="password" class="form-control" id="password" placeholder="Input password"
                            value="{{ old('password') }}" required>
                        @if ($errors->has('password'))
                            <span class="text-danger">
                                {{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="confirm-password" class="form-label">
                            Confirm Password
                        </label>
                        <input type="password" class="form-control" id="confirm-password"
                            placeholder="Input Confirm Password" required>
                    </div>

                    <div class="text-right col-12">
                        <button class="btn btn-primary" type="submit" name="submit">
                            <i class="fa fa-plus"></i>
                            Save
                        </button>
                        <a href="{{ route('users.index') }}" class="btn btn-danger m-l-5">
                            <i class="fa fa-close"></i> Back
                        </a>
                    </div>


                </form>


            </div>

        </div>

    </div>
    </div>

@endsection
