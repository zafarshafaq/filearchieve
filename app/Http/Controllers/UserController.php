<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;

use App\Models\User;

class UserController extends Controller
{



    public function index()
    {


        $users = User::paginate(10);
        return view('admin.user.users', compact('users'));
    }


    public function create()
    {

        return view('admin.user.create-user');
    }

    public function store(UserRequest $request)
    {
        try {
            $user = User::create($this->mapRequest($request));
            return redirect()->back()
                ->with('msg', 'User created successfully');

        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', $e->getMessage());
        }

    }


    public function edit(string $id)
    {

        $user = User::findOrFail($id);


        return view('admin.user.edit-user', compact('user'));
    }


    public function Update(UserUpdateRequest $request, string $id)
    {



        try {

            $user = User::findOrFail($id);

            $user->update($this->mapRequest($request));

            return redirect()->route('users.index')
                ->with('msg', 'User updated successfully');

        } catch (\Exception $e) {

            return redirect()->route('users.index')
                ->with('error', $e->getMessage());
        }

    }


    public function destroy(string $id)
    {

        try {

            $user = User::findOrFail($id);
            $user->delete();

            return redirect()->route('users.index')
                ->with('msg', 'User deleted successfully');

        } catch (\Exception $e) {

            return redirect()->route('users.index')
                ->with('error', $e->getMessage());
        }



    }

    public function mapRequest($request)
    {
        return [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'position' => $request->position,
            'password' => bcrypt($request->password),
            'type' => 'user'
        ];
    }

    public function search(Request $request)
    {


        $users = User::where('name', 'like', '%' . $request->search_string . '%')->orderBy('id', 'desc')->paginate(5);



        if ($users->count() >= 1) {
            return view('admin.user.pagination-user', compact('users'))->render();

        } else {

            return response()->json([
                'status' => 'noting_found',
            ]);
        }
    }



}
