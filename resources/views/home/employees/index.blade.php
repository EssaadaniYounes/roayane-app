@extends('layouts.app-master')
<style>
    .pagination {
        display: flex;
        justify-content: flex-end;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination li a {
        color: #333;
        display: block;
        padding: 5px 10px;
        text-decoration: none;
    }

    .pagination li.active a {
        background-color: #333;
        color: #fff;
    }

    .pagination li:first-child a,
    .pagination li:last-child a {
        background-color: #eee;
        border-radius: 3px;
    }

</style>
@section('content')
    <div class="row">
        <div class="col-md-12 mb-2 p-3" style="background-color: rgba(79,33,33,0.56)">
            <h2>Employees List </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
            <form action="{{route('employees.index')}}" class=" d-flex" method="GET">
                <div class="form-group" >
                    <input type="text"
                           name="search"
                           id="search"
                           class="form-control"
                           placeholder="Search by name, email"
                           value="{{ request()->input('search') }}"
                           style="border-top-right-radius: 0;border-bottom-right-radius: 0;"
                    >
                </div>
                <button type="submit" class="btn btn-primary" style="border-top-left-radius: 0;border-bottom-left-radius: 0;">Search</button>
            </form>
        </div>
    </div>
   <div class="m-2  border-2 rounded">
       <table class="table table-striped text-sm-center">
           <thead>
           <tr>
               <th scope="col">Registration number</th>
               <th scope="col">Name</th>
               <th scope="col">Email</th>
               <th scope="col">Department</th>
               <th scope="col">Actions</th>
           </tr>
           </thead>
           <tbody>
           @foreach ($employees as $employ)
               <tr>
                   <td scope="row">{{ $employ->registration_number }}</td>
                   <td>{{ $employ->full_name }}</td>
                   <td>{{ $employ->email }}</td>
                   <td>{{ $employ->depart }}</td>
                   <td class="d-flex justify-content-center align-items-center">
                       <a href="{{route('employees.show',$employ->registration_number)}}"
                          class="btn btn-sm btn-primary">
                           <i class="fas fa-eye"></i>
                       </a>
                       <a href="{{route('employees.edit',$employ->registration_number)}}"
                          class="btn btn-sm btn-warning mx-2">
                           <i class="fas fa-edit"></i>
                       </a>
                       <form class="m-0" id="{{$employ->registration_number}}" action="{{route("employees.destroy",$employ->registration_number)}}" method="post">
                           @csrf
                           @method("DELETE")
                           <button type="submit" class="btn btn-sm btn-danger">
                               <i class="fa fa-trash"></i>
                           </button>
                       </form>
                   </td>
               </tr>
           @endforeach
           </tbody>
       </table>

   </div>
    {{ $employees->appends(request()->query())->links('pagination::bootstrap-4', ['previous' => 'Previous', 'next' => 'Next', 'first' => 'First', 'last' => 'Last']) }}
{{--    {{ $employees->links('pagination::bootstrap-4', ['previous' => 'Previous', 'next' => 'Next', 'first' => 'First', 'last' => 'Last']) }}--}}

@endsection
