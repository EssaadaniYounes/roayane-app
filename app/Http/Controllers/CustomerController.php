<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): Factory | View | Application
    {

        $searchTerm =  $request->input('search');

        $employees = Customer::query()
            ->when($searchTerm, function ($query, $searchTerm) {
                return $query->where('full_name', 'LIKE', '%'.$searchTerm.'%')
                    ->orWhere('email', 'LIKE', '%'.$searchTerm.'%');
            })
            ->paginate(10);

        return view('home.employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'email' => 'unique:employees',
            'depart' => 'required',
            'hire_date' => 'required',
            'city' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required'
        ]);

        if ($validator->fails()) {
            // For example:
            return redirect('/employees/create')
                ->withErrors($validator)
                ->withInput();


        }
        $data = $request->except(['_token']);
        $customer = Customer::create($data);
        return redirect()->route('employees.index')->with([
            'success' => 'True'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param $reg_number
     * @return \Illuminate\Http\Response
     */
    public function show($reg_number)
    {
        $employee = Customer::where('registration_number', $reg_number)->first();
        return view("home.employees.show")->with([
            "employee" => $employee
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $reg_number
     * @return \Illuminate\Http\Response
     */
    public function edit($reg_number)
    {
        $employee = Customer::where('registration_number', $reg_number)->first();
        return view("home.employees.edit")->with([
            "employee" => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,$reg_number)
    {
        $employe = Customer::where('registration_number', $reg_number)->first();

        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'email' => 'unique:employees',
            'registration_number' => 'required|unique:employees,registration_number,' . $employe->registration_number,
            'depart' => 'required',
            'hire_date' => 'required',
            'city' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required'
        ]);

        if ($validator->fails()) {
            // For example:
            return redirect('/employees/create')
                ->withErrors($validator)
                ->withInput();


        }
        $data = $request->except(['_token', '_method']);
        $employe->update($data);
        return redirect()->route("employees.index")->with([
            "success" => "Employee updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($reg_number)
    {
        $employe = Customer::where('registration_number', $reg_number)->first();
        $employe->delete();
        return redirect()->route("employees.index")->with([
            "success" => "Employee deleted successfully"
        ]);
    }

    public function getCertificate($reg_number)
    {
        $employee = Customer::where('registration_number', $reg_number)->first();
        return view("home.employees.certificate")->with([
            "employee" => $employee
        ]);

    }
    public function getVacation($reg_number)
    {
        $employee = Customer::where('registration_number', $reg_number)->first();
        return view("home.employees.vacation")->with([
            "employee" => $employee
        ]);
    }
}
