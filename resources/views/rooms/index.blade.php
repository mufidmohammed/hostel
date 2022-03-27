@extends('layouts.main')

@section('content')
    <div class="container mt-4 mx-4 p-4">
        <div class="card col-md-12">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-9">
                        All Courses
                    </div>
                    <div class="col-md-3">
                        <a href="{{ route('rooms.create') }}" class="btn btn-success">Add Course</a>
                    </div>
                </div>
            </div>
            <div class="card-body">

                @include('partials.message')

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Room Number</th>
                            <th>Number of people</th>
                            <th>Maximum capacity</th>
                            <th>Charge per person</th>
                            <th>Total Charge</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rooms as $room)
                            <tr>
                                <td>{{ $room->id }}</td>
                                <td>{{ $room->room_number }}</td>
                                <td>{{ $room->number_of_people }}</td>
                                <td>{{ $room->max_capacity }}</td>
                                <td>{{ $room->fee_per_person }}</td>
                                <td>{{ $room->total_fees }}</td>
                                <td>{{ $room->status }}</td>
                                <td class="text-center">
                                    <a href="{{ route('rooms.edit', ['room' => $room->id]) }}"
                                        class="btn btn-primary">Edit <i class="fa fa-edit"></i></a>
                                    <a href="{{ route('rooms.destroy', $room->id) }}" onclick="return confirm('You are about to delete a record. Proceed?');" class="btn btn-danger">Remove <i
                                            class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete() {
            if (confirm('You are about to delete a record. Proceed?')) {
                document.getElementById('formDelete').submit();
            }
        }
    </script>
@endsection
