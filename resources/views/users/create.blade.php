@extends('layouts.app')
@section('title', 'User List')
@section('content-header', 'user List')
@section('content-actino')
    <a href="{{route('users.create')}}"
    class="btn btn-info">Add New</a>
@endsection
@section('content')
    <div class="card text-start">
        <div class="card-body">
            <div class="table-responsive-lg">
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input
                        type="text"
                        name=""
                        id=""
                        class="form-control"
                        placeholder=""
                        aria-describedby="helpId"
                    />
                    <small id="helpId" class="text-muted">Help text</small>
                </div>
                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Submit
                </button>


             </div>

            </div>

        </div>
    </div>

@endsection

