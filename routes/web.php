<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('tables');
// });
Route::get('/', [UserController::class, 'showLoginForm'])->name('login.form');
Route::post('/sign-in', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [UserController::class, 'signup']);
Route::middleware(['role'])->group(function () {
});
Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
Route::get('/userdashboard', [UserController::class, 'indek'])->name('indek');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/tables', [UserController::class, 'tables'])->name('tables');
Route::get('/user/search', [UserController::class, 'search']);
Route::get('/user/filter', [UserController::class, 'filter']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'signup']);
Route::middleware(['auth', 'role:admin'])->group(function () {
Route::get('/admindashboard', [UserController::class, 'index'])->name('admindashboard')->middleware('role:admin');
    Route::get('/userdashboard', [UserController::class, 'index'])->name('userdashboard')->middleware('role:user');
    Route::get('/admin', [UserController::class, 'index'])->middleware('role:user');

    Route::post('/user/store', [UserController::class, 'store']);
    Route::delete('/user/delete/{id}', [UserController::class, 'destroy']);

});

// User Dashboard
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user', function    () {
        $person = Auth::user();
        return view('user',compact('person'));
    })->name('user');
});



// Route::get('/admin', function () {
//     $person = Auth::user();
//     return view('admin',compact('person'));
// })->name('admin');


// Route::put('/tables',[UserController::class,'update'])->name('user.update');


// Route::post('/register', [UserController::class, 'createuser']);
// Route::get('/register', [UserController::class, 'show']);

