@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 my-4">
                <h4>All Students</h4>
            </div>
            <div class="col-md-4 my-4">
                <a href="{{ route('students.create') }}"><button class="btn btn-success pull-right">Add Student</button></a>
            </div>
        </div>
        <hr>
        @include('partials.message')
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Level</th>
                    <th>Age</th>
                    <th>Room Number</th>
                    <th>Starting date</th>
                    <th>Course</th>
                    <th>Fees</th>
                    <th>Payment status</th>
                    <th>Checked In</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->level }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->room->room_number }}</td>
                        <td>{{ $student->start_date }}</td>
                        <td>{{ $student->course->name }}</td>
                        <td>{{ $student->fees }}</td>
                        <td>{{ $student->paid ? 'Paid' : 'Unpaid' }}</td>
                        <td>{{ $student->checked_in ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ route('students.edit', ['id' => $student->id]) }}" class="btn btn-primary mb-1">Edit<i class="fa fa-edit"></i></a>
                            <a href="{{ route('students.destroy', ['id' => $student->id]) }}" onclick="return confirm('You are about to delete a record. Proceed?')" class="btn btn-danger">Remove</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
