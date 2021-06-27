<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\EmpresaController;

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


Route::redirect('/', '/admin/empresas');



Route::prefix('admin')->name('admin.')->group(function(){

    Route::get('empresas', [EmpresaController::class, 'empresa'])->name('empresas.listar');
    Route::get('empresas/salvar', [EmpresaController::class, 'formAdicionar'])->name('empresas.form');
    Route::post('empresas/salvar', [EmpresaController::class, 'adicionar'])->name('empresas.adicionar');

});

Route::get('/sobre', function () {
    return '<h1>Sobre<h1>';
});
