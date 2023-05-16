<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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
function usuario(?string $rol=null) {
    if($rol!==null) {
        return request()->user()->rol===$rol;
    }
    return request()->user();
}



Route::get('/', function () {
    return view('welcome');
});
Route::any("/login",[MainController::class,'login'])->name('login');
Route::any("/ok",[MainController::class,'ok'])->name('ok');
