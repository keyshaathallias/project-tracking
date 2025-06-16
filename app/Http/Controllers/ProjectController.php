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
        $user = auth()->user();
        $query = Project::where('user_id', $user->id);
        if (request('status')) {
            $query->where('project_status', request('status'));
        }
        $projects = $query->latest()->get();
        return view('client.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'project_name' => 'required|string|max:255',
            'project_description' => 'required|string',
            'service' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'due_date' => 'required|date',
            'attachment' => 'nullable|file|mimes:pdf,jpg,jpeg,png,doc,docx,zip',
        ]);

        $validated['user_id'] = auth()->id();
        $validated['project_status'] = 'Awaiting Payment'; // Set default status

        if ($request->hasFile('attachment')) {
            $validated['attachment'] = $request->file('attachment')->store('attachments', 'public');
        }

        $project = Project::create($validated);

        return redirect()->route('projects.index')->with('success', 'Project created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $user = auth()->user();
        if ($project->user_id !== $user->id) {
            abort(403);
        }
        return view('client.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $user = auth()->user();
        if ($project->user_id !== $user->id) {
            abort(403);
        }
        return view('client.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $user = auth()->user();
        if ($project->user_id !== $user->id) {
            abort(403);
        }
        $validated = $request->validate([
            'project_name' => 'required|string|max:255',
            'project_description' => 'required|string',
            'service' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'attachment' => 'nullable|file',
            'due_date' => 'required|date',
            'project_status' => 'nullable|string|max:50',
        ]);
        if ($request->hasFile('attachment')) {
            $validated['attachment'] = $request->file('attachment')->store('attachments', 'public');
        }
        $project->update($validated);
        return redirect()->route('client.projects.show', $project)->with('success', 'Project updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $user = auth()->user();
        if ($project->user_id !== $user->id) {
            abort(403);
        }
        $project->delete();
        return redirect()->route('client.projects.index')->with('success', 'Project deleted successfully!');
    }
}
