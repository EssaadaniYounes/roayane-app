@extends('layouts.app-master')

@section('title', 'Employees Management System | '.$employee->full_name)

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card my-5">
                    <div class="card-header bg-white text-center p-3">
                        <h3 class="text-dark">
                            Vacation Request
                        </h3>
                    </div>
                    <div class="card-body">
                        <p class="lead">
                            <b>{{$employee->full_name}}</b> :
                        </p>
                        <p class="lead">
                            <b>{{$employee->depart}}</b> department.
                        </p>
                        <p class="lead">
                            Vacation starting from <b>________________</b>
                        </p>
                        <p class="lead">
                            And ends on <b>______________</b>
                        </p>

                        <p class="m-5">
                            ___________
                            ___________
                        </p>
                        <a href="#" id="printPageButton" class="btn btn-sm btn-primary mb-3" onclick="document.getElementById('printPageButton').style.display = 'none';window.print();" class="btn btn-md btn-primary mr-2 mb-2">
                            <i class="fas fa-print"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



