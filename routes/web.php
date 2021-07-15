<?php
use App\Http\Controllers\tb_productoController;
use App\Http\Controllers\tb_pedidoController;
use App\Http\Controllers\tb_dirigidoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PagosController;
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

Route::get('/marca', function () {
    return view('marca.index');
});

Auth::routes();

Route::resource('marca', tb_marcaController::class);

Route::resource('contacto', ContactoController::class);
Route::get('/bienvenida', [App\Http\Controllers\HomeController::class, 'index'])->name('bienvenida');

Route::resource('home', tb_productoController::class); 
Route::get('admin_productos', [tb_productoController::class, 'admin'] );
Route::resource('pedidos', tb_pedidoController::class); 
Route::resource('dirigidos', tb_dirigidoController::class); 
 Route::get('/tips', function () {
 return view('productos.TIPS');
 });

// Route::get('/cubios/create', [TbCubiosController::class, 'create']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/pagos', PagosController::class);
