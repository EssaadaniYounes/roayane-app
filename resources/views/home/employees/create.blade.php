@extends('layouts.app-master')

@section('title', 'Employees Management System | Create')

@section('content')
   @include('layouts.partials.errors')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row mb-5 " style="margin-top: -40px;">
                    <div class="col-md-6 mx-auto">
{{--                        @include('layouts.alert')--}}
                    </div>
                </div>
                <div class="card my-5">
                    <div class="card-header bg-white text-center p-3">
                        <h3 class="text-dark">
                            Add new employee
                        </h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" class="mt-3" action="{{ route('employees.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="full_name" class="form-label fw-bold">Full Name</label>
                                <input type="text" name="full_name" value="{{old("full_name")}}" placeholder="Full Name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="text" name="email" value="{{old("email")}}" placeholder="Email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label fw-bold" for="registration_number">Registration Number</label>
                                <input type="text" name="registration_number" value="{{old("registration_number")}}"  placeholder="Registration Number" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label fw-bold" for="depart">Department</label>
                                <input type="text" class="form-control" value="{{old("depart")}}"  name="depart" placeholder="Department">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label fw-bold" for="hire_date">Hiring Date</label>
                                <input type="date" class="form-control" value="{{old("hire_date")}}"  placeholder="Hiring Date" name="hire_date">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label fw-bold" for="phone">Phone</label>
                                <input type="text" class="form-control" value="{{old("phone")}}"  placeholder="Phone" name="phone">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label fw-bold" for="address">Address</label>
                                <input type="text" class="form-control" value="{{old("address")}}"  placeholder="Address" name="address">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label fw-bold" for="city">City</label>
                                <input type="text" class="form-control" value="{{old("city")}}"  placeholder="City" name="city">
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

