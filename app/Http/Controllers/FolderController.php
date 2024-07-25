<?php

namespace App\Http\Controllers;

use App\Http\Requests\FolderRequest;
use App\Models\Folder;
use Illuminate\Http\Request;


class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {

        $project = Project::findOrFail($id);

    }

    /**df
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $folder = Folder::find($request->input('id'));
        $parents = array_reverse($folder->parentRecursiveFlatten()->toArray());

        $children = $folder->children()->get();
        $files = collect();
        foreach ($folder->files as $file) {
            $files->push([
                'url' => $file->url,
                'name' => $file->name,
                'location' => $file->location,
                'folder_id' => $file->folder_id
            ]);
        }
        return view('folder.create', compact('folder', 'children', 'parents', 'files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FolderRequest $request)
    {


        try {

            $folder = Folder::find($request->parent_folder_id);
            $folder->children()->create([
                'name' => $request->name
            ]);

            return redirect('folders/create?id=' . $folder->id)
                ->with('msg', 'Folder created successfully');

        } catch (\Exception $e) {

            return redirect()->url('folders/create?id=' . $folder->id)
                ->with('error', $e->getMessage());
        }







    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $folder = Folder::find($id);

        $view = view('folder.edit', compact('folder'))->render();

        return response()->json($view);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FolderRequest $request, string $id)
    {



        try {

            $folder = Folder::find($id);
            $folder->update([
                'name' => $request->name
            ]);


            if ($folder->parent) {

                return redirect('folders/create?id=' . $folder->parent->id)
                    ->with('msg', 'Folder created successfully');
            }


            return redirect('folders/create?id=' . $folder->id)
                ->with('msg', 'Folder created successfully');

        } catch (\Exception $e) {

            return redirect()->url('folders/create?id=' . $folder->id)
                ->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
