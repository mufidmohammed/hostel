@extends('layouts.main')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Number of students</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <h3 class="text-white">{{ $student_total }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-secondary text-white mb-4">
                    <div class="card-body">Total number of rooms</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <h3 class="text-white">{{ $room_total }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-grey text-dark mb-4">
                    <div class="card-body">Total number of courses</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <h3 class="text-dark">{{ $course_total }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Students who have paid</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <h3 class="text-white">{{ $paid_students }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Students who have checked-in</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <h3 class="text-white">{{ $students_checked_in }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-secondary text-white mb-4">
                    <div class="card-body">Total amount paid</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <h3 class="text-white">${{ $total_amount_paid }}</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
