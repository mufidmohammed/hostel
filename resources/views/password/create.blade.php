@extends('layouts.main')

@section('content')
<div class="container mt-4 mx-4 p-4">
    <div class="card col-md-8">
        <div class="card-header">
            Change password
        </div>
        <div class="card-body">
            @include('partials.message')
            <form action="{{ route('password.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="currentPassword" class="form-label">Current password</label>
                    <input type="text" name="current_password" class="form-control" />
                </div>

                <div class="form-group mb-3">
                    <label for="newPassword" class="form-label">New password</label>
                    <input type="password" name="password" class="form-control" value="{{ old('name') }}" />
                </div>

                <div class="form-group mb-3">
                    <label for="confirmPassword" class="form-label">Confirm password</label>
                    <input type="password" name="password_confirmation" class="form-control" />
                </div>

                <div class="form-group mb-3">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>

                @include('partials.errors')
            </form>
        </div>
    </div>
</div>
@endsection