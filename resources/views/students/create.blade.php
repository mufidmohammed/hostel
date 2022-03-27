@extends('layouts.main')

@section('content')

    <div class="container mt-4 mx-4 p-4">
        <div class="card col-md-8">
            <div class="card-header">
                Add Student
            </div>
            <div class="card-body">
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="roomNumber" class="form-label">Room Number</label>
                        <select name="room_id" class="form-control">
                            <option value="">Choose a room</option>
                            @foreach ($rooms as $room)
                                <option @selected($room->id == old('room_id')) value="{{ $room->id }}">Room {{ $room->room_number }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="fees" class="form-label">Fees</label>
                        <input type="number" step="0.01" name="fees" value="{{ old('fees') }}" class="form-control" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="startingFrom" class="form-label">Starting from</label>
                        <input type="date" name="start_date" class="form-control" value="{{ old('start_date') }}" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="course" class="form-label">Course</label>
                        <select name="course_id" class="form-control">
                            <option value=""></option>
                            @foreach($courses as $course)
                                <option @selected(old('course_id') == $course->id) value="{{ $course->id }}">{{ $course->name }} ({{$course->type}})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="startingFrom" class="form-label">Last name</label>
                        <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}" />
                    </div>
                    <div class="form-group mb-3">
                        <div class="row px-2">Gender</div>
                        <div class="form-check-inline mb-3">
                            <input @checked(old('gender') == 'M') type="radio" class="form-check-input" name="gender" value="M">
                            <label for="male" class="form-check-label">Male</label>
                        </div>
                        <div class="form-check-inline mb-3">
                            <input @checked(old('gender') == 'F') type="radio" class="form-check-input" name="gender" value="F">
                            <label for="female" class="form-check-label">Female</label>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="startingFrom" class="form-label">Phone Number</label>
                        <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="startingFrom" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="startingFrom" class="form-label">Level</label>
                        <input type="text" name="level" class="form-control" value="{{ old('level') }}" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Age</label>
                        <input type="number" name="age" class="form-control" value="{{ old('age') }}" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Payment status</label>
                        <select name="paid" class="form-control">
                            <option @selected(old('paid') == 1) value="1">Paid</option>
                            <option @selected(old('paid') == 0) value="0">Unpaid</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Checked In</label>
                        <select name="checked_in" class="form-control">
                            <option @selected(old('checked_in') == 1) value="1">Checked In</option>
                            <option @selected(old('checked_in') == 0) value="0">Not checked in</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <button class="btn btn-primary" type="submit">Add</button>
                    </div>

                    @include('partials.errors')
                </form>
            </div>
        </div>
    </div>

@endsection
