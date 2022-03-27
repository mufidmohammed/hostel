@extends('layouts.main')

@section('content')

    <div class="container mt-4 mx-4 p-4">
        <div class="card col-md-8">
            <div class="card-header">
                Update Course
            </div>
            <div class="card-body">
                @include('partials.message')
                <form action="{{ route('courses.update', ['course' => $course->id]) }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="type" class="form-label">Course Type</label>
                        <input type="text" name="type" class="form-control" value="{{ $course->type }}" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="fees" class="form-label">Course Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $course->name }}" />
                    </div>

                    <div class="form-group mb-3">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>

                    @include('partials.errors')
                </form>
            </div>
        </div>
    </div>

@endsection
