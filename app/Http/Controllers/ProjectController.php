<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Project;
use App\Models\Sectore;
use App\Http\Requests\ProjectRequest;
use App\Models\Folder;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $projects = Project::paginate(10);
        return view('admin.project.projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        $sectores = Sectore::all();
        return view('admin.project.create-project', compact('sectores'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $project = Project::create($this->mapRequest($request));
                Folder::create([
                    'name' => $project->name,
                ]);
            });


            return redirect()->route('projects.create')
                ->with('msg', 'project created successfully');

        } catch (\Exception $e) {

            return redirect()->route('projects.create')
                ->with('error', $e->getMessage());
        }








    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        $sectores = Sectore::all();
        return view('admin.project.edit-project', compact('project', 'sectores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        try {
            $project = Project::findOrFail($id);
            $project->update($this->mapRequest($request));
            return redirect()->route('projects.index')
                ->with('msg', 'User updated successfully');

        } catch (\Exception $e) {
            return redirect()->route('projects.index')
                ->with('error', $e->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {

            $project = Project::findOrFail($id);
            $project->delete();

            return redirect()->route('projects.index')
                ->with('msg', 'Project deleted successfully');

        } catch (\Exception $e) {

            return redirect()->route('projects.index')
                ->with('error', $e->getMessage());
        }
    }


    public function mapRequest($request)
    {
        return [
            'name' => $request->name,
            'donar' => $request->donar,
            'proj_manager' => $request->proj_manager,
            'location' => $request->location,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'sectore_id' => $request->sectore,
            'description' => $request->description
        ];
    }



    public function folders(Request $request)
    {

        $id = $request->input('id');
        $project = Project::find($id);



        return view('folder.create', compact('project'));

    }
}
