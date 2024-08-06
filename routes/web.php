<?php


use App\Http\Controllers\DocumentController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\testController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Models\File;
use App\Models\Folder;
use App\Models\Project;

// Route::get('test', [testController::class, 'index'])->name('test');
Route::post('test/store', [testController::class, 'store'])->name('test.store');



Route::get('test', [testController::class, 'test'])->name('test');

Route::get('files/search', [FileController::class, 'search'])->name('files.search');











Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function (Request $request) {
    if (auth()->user()->type === "administrator") {
        $folders = Folder::where('parent_id', null)->paginate(10);
        $files = File::paginate(10);
        return view('admin.dashboard', compact('files', 'folders'));
    }

    $folders = auth()->user()->folders()->get();
    return view('user.dashboard', compact('folders'));
})->middleware(['auth', 'verified'])->name('dashboard');












Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Application Route
    Route::get('/pagination/paginate-data', [FolderController::class, 'pagination']);
    Route::get('users/search', [UserController::class, 'search'])->name('users.search');
    Route::resource('/users', UserController::class);
    Route::resource('projects', ProjectController::class);
    Route::get('/documents', DocumentController::class)->name('document');
    Route::get('folders/create', [FolderController::class, 'create'])->name('folders.create');
    Route::get('/folder/access-modal', [FolderController::class, 'users'])->name('folders.access-modal');
    Route::post('/folders/access', [FolderController::class, 'access'])->name('folders.access');
    Route::resource('folders', FolderController::class);
    Route::resource('files', FileController::class);

});

require __DIR__ . '/auth.php';