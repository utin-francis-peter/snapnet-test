<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the employees for a project.
     */
    public function index($projectId)
    {
        return Employee::where('project_id', $projectId)->get();
    }

    /**
     * Store a newly created employee under a project in storage.
     */
    public function store(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:employees',
            'position' => 'nullable|string',
        ]);

        $incomingFields['project_id'] = $request->project_id;

        return Employee::create($incomingFields);
    }

    /**
     * Display the specified employee.
     */
    public function show(string $id)
    {
        return Employee::find($id);
    }

    /**
     * Update the specified employee in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = Employee::find($id);
        $employee->update($request->all());
        return $employee;
    }

    /**
     * Remove the specified employee from storage.
     */
    public function destroy(string $id)
    {
        return Employee::destroy($id);
    }
}
