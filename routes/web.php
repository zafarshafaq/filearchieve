<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\File;
use App\Models\Folder;
use App\Models\Project;





Route::get('/test', function () {

    $file = File::find(2);
    $path = storage_path($file->url);
    return response()->file($path);
});









Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    $folders = Folder::where('parent_id', null)->paginate(10);

    $files = File::paginate(10);
    return view('admin.dashboard', compact('files', 'folders'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/users', UserController::class);
Route::resource('projects', ProjectController::class);
Route::get('/documents', DocumentController::class)->name('document');
Route::get('folders/create', [FolderController::class, 'create'])->name('folders.create');
Route::resource('folders', FolderController::class);
Route::resource('files', FileController::class);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';