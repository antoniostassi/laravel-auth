<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models 
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
        $data = $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:10|max:1024',
            'creation_date' => 'required',
            'expiring_date' => 'nullable',
            'label_tag' => 'nullable|min:3|max:15',
            'price' => 'nullable|integer|min:0|max:10000',
            'completed' => 'nullable'
        ]);

        $data['completed'] = isset($data['completed']); // Se all'interno di data['completed'] c'è qualcosa, allora sarà vero ( poiché checkbox ), altrimenti nulla
        $data['slug'] = str()->slug($data['name']);

        $project->update($data);

        return redirect()->route('admin.projects.show', ['project' => $project->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
