<?php
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\TbMediosPagosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/pagos', function () {
//     return view('medios_pago.crear');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('contacto', ContactoController::class);
Route::resource('pagos', TbMediosPagosController::class);