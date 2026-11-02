<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
// use resources\views\employees\employees;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'designation' => 'required|string|max:255',
            'salary' => 'required|integer|min:0',
        ]);
        Employee::create($validated);

        return redirect('/employees');
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
        // return redirect('/employees');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,' . $id,
            'designation' => 'required|string|max:255',
            'salary' => 'required|integer|min:0',
        ]);
        $employee = Employee::findOrFail($id);
        $employee->update($validated);

        return redirect('/employees');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect('/employees');
    }
}