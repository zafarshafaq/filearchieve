<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FileRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Folder;
use App\Models\File;


class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $folder = Folder::find(8);


        return $this->getParents($folder);

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
    public function store(FileRequest $request)
    {





        $folder = Folder::find($request->parent_folder_id);
        $parents = array_reverse($folder->parentRecursiveFlatten()->toArray());
        $folder_path = '';
        foreach ($parents as $parent) {
            $folder_path .= '/' . $parent['name'];
        }
        // return $request->file;
        $file_name = time() . '_' . $request->name . '.' . $request->file->extension();
        $request->file->storeAs('/public' . $folder_path . '/' . $folder->name, $file_name);
        $path = $folder_path . '/' . $folder->name . '/' . $file_name;

        try {

            $folder->files()->create([
                'name' => $request->name,
                'location' => $request->location,
                'url' => $path
            ]);



            return redirect('folders/create?id=' . $folder->id)
                ->with('msg', 'File created successfully');

        } catch (\Exception $e) {
            return redirect('')
                ->with('msg', $e->getMessage());
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }



    /**
     * Search files request by ajax request
     */
    public function search(Request $request)
    {


        $files = File::where('name', 'like', '%' . $request->search_string . '%')->orderBy('id', 'desc')->paginate(10);
        if ($files->count() >= 1) {
            return view('file.pagination-file', compact('files'))->render();
        } else {

            return response()->json([
                'status' => 'noting_found',
            ]);
        }
    }
}
