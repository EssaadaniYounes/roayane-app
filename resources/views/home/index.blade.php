@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Dashboard</h1>
            <div class="main-content">
                <div class="header pb-8 pt-5 pt-md-8">
                    <div class="container-fluid">
                        <h2 class="mb-5 text-secondary">Stats Card</h2>
                        <div class="header-body">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6">
                                    <div class="card card-stats mb-4 mb-xl-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="card-title text-uppercase text-muted mb-0">Employees</h5>
                                                    <span class="h2 font-weight-bold mb-0">{{\App\Models\Customer::count()}}</span>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                        <i class="fas fa-chart-bar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{route('employees.index')}}" class="mt-3 mb-0 text-muted text-sm">
                                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>View</span>
                                                <span class="text-nowrap">all</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please <a href="{{route('login')}}">login</a> to view the restricted data.</p>
        @endguest
    </div>
@endsection
