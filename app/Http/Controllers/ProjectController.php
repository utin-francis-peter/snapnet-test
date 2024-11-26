<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Project::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $incomingFields = $request -> validate([
           'name' => 'required|unique:projects',
            'description' => 'nullable|string',
            'status' => 'required|in:ongoing,completed,cancelled',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after:start_date',
        ]);

     return Project::create($incomingFields);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Project::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    $project = Project::find($id);
    $project->update($request -> all());
    return $project;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Project::destroy($id);
    }

}
