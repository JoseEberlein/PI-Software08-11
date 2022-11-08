<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\NoticiasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {
    return view('welcome');
});
*/



Route::get('/',[HomeController::class,'MostrarHome'])->name('home');





//====================== R O T A S ======================


Route::get('/cadastrar-noticia',[NoticiasController::class,'FormularioCadastroNoticia'])->name('cadastrar-noticia');

Route::post('/cadastrar-noticia',[NoticiasController::class,'SalvarBancoNoticia'])->name('salvar-bancoNoticia');

Route::get('/editar-noticia',[NoticiasController::class,'MostrarEditarNoticia'])->name('editar-noticia');




//deletarNoticia
Route::delete('/editar-noticia/{registrosNoticias}',[NoticiasController::class,'ApagarBancoNoticia'])->name('apagar-noticia');

//AlterarNoticia
Route::get('/alterar-noticia/{registrosNoticias}',[NoticiasController::class,'MostrarAlterarNoticia'])->name('alterar-noticia');

Route::put('/editar-noticia/{registrosNoticias}',[NoticiasController::class,'AlterarBancoNoticia'])->name('alterar-banco-noticia');









Route::get('/ver-noticia',[NoticiasController::class,'MostrarVerNoticia'])->name('ver-noticia');

Route::put('/ver-noticia/{registrosNoticias}',[NoticiasController::class,'AlterarVerNoticia'])->name('alterar-ver-noticia');
