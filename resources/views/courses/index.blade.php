@extends('layouts.main')

@section('content')

<div class="container mt-4 mx-4 p-4">
    <div class="card col-md-8">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    All Courses
                </div>
                <div class="col-md-4">
                    <a href="{{ route('courses.create') }}" class="btn btn-success">Add Course</a>
                </div>
            </div>
        </div>
            <div class="card-body">

                @include('partials.message')

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Course Type</th>
                            <th>Course Name</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $course->id }}</td>
                                <td>{{ $course->type }}</td>
                                <td>{{ $course->name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('courses.edit', ['id' => $course->id]) }}" class="btn btn-primary">Edit <i class="fa fa-edit"></i></a>
                                    <a href="{{ route('courses.destroy', ['id' => $course->id]) }}" onclick="return confirm('You are about to delete a course. Proceed?')" class="btn btn-danger">Remove <i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>

@endsection
