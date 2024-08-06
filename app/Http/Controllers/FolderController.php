<?php

namespace App\Http\Controllers;

use App\Http\Requests\FolderRequest;
use App\Models\Folder;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
        // get parents to dispaly the path in breadcrumb
        $parents = array_reverse($folder->parentRecursiveFlatten()->toArray());

        //  get folder contents
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
        if (auth()->user()->type === "administrator") {

            return view('folder.create', compact('folder', 'children', 'parents', 'files'));

        }


        return view('user.folder.create', compact('folder', 'children', 'files', 'parents'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FolderRequest $request)
    {


        try {

            $folder = Folder::find($request->parent_folder_id);
            DB::transaction(function () use ($request, $folder) {
                $folder->children()->create([
                    'name' => $request->name
                ]);
                auth()->user()->folders()->attach($folder->id, ['name' => 'update']);
            });


            // return redirect('folders/create?id=' . $folder->id)
            //     ->with('msg', 'Folder created successfully');


            return redirect()->back()
                ->with('msg', 'Folder created successfully');

        } catch (\Exception $e) {

            return redirect()->back()
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

        try {

            $folder = Folder::findOrFail($id);
            $folder->delete();

            return redirect()->back()
                ->with('msg', 'Folder deleted successfully');

        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', $e->getMessage());
        }



    }




    public function users(Request $request)
    {
        $users = User::where('id', '!=', auth()->user()->id)->paginate(5);
        $modal = View('folder.access-modal', compact('users'))->render();
        return response()->json($modal);
    }
    public function pagination(Request $request)
    {

        $users = User::latest()->paginate(5);
        return view('admin.user.pagination-user', compact('users'))->render();

    }

    public function access(Request $request)
    {



        return 'helo';
        $accesses = $request->all();

        return $accesses;
        try {
            foreach ($accesses as $access) {
                $data = explode('-', $access);
                $user = User::where('name', $data[0])->first();

                if ($user->folders->contains($request->folder_id)) {

                    $user->folders()->where('folder_id', $request->folder_id)->first()->update([$data[1] => 1]);
                } else {
                    $user->folders()->attach($request->folder_id, [$data[1] => 1]);

                }

            }

            return redirect()->back()
                ->with('msg', 'folder has been successfully accessed by ' . $user->name);

        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', $e->getMessage());
        }





    }

}



