<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;

class DocumentController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {


        $folders = Folder::where('parent_id', null)->get();
        return view('admin.document.index', compact('folders'));
    }
}
