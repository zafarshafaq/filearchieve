<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Folder;
use App\Models\File;



class testController extends Controller
{

    public function test(Request $request)
    {
        // $user = User::find(14);
        // $folder = Folder::find(16);

        // $user->accesses()->attach($folder);
        // return 'success';


        $user = User::find(3);
        $folder = Folder::find(2);
        if ($user->hasAccess($folder->id, 'update')) {
            return 'has access';
        }
        return 'not access';
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {


        if ($request->ajax()) {
            return datatables()->of(User::all())->toJson();
        }
        $users = User::all();
        return view('test', compact('users'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        return $request->all();


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
}
