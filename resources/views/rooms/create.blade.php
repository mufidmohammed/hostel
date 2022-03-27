@extends('layouts.main')

@section('content')

    <div class="container mt-4 mx-4 p-4">
        <div class="card col-md-8">
            <div class="card-header">
                Add a room
            </div>
            <div class="card-body">
                @include('partials.message')
                <form action="{{ route('rooms.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="type" class="form-label">Room Number</label>
                        <input type="number" name="room_number" class="form-control" value="{{ old('room_number') }}" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="numberOfPeople" class="form-label">Number of people</label>
                        <input type="number" name="number_of_people" class="form-control" value="{{ old('number_of_people') }}" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="maximumCapacity" class="form-label">Maximum capacity</label>
                        <input type="number" name="max_capacity" class="form-control" value="{{ old('max_capacity') }}" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="feePerPerson" class="form-label">Fee per person</label>
                        <input type="number" name="fee_per_person" class="form-control" value="{{ old('fee_per_person') }}" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="totalFees" class="form-label">Total fees</label>
                        <input type="number" name="total_fees" class="form-control" value="{{ old('total_fees') }}" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value=""></option>
                            <option @selected(old('status') == 'available') value="available">Available</option>
                            <option @selected(old('status') == 'taken') value="taken">Taken</option>
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
