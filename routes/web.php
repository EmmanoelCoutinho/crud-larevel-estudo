<?php

use App\Http\Controllers\LivrosController;
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

//adição de novos livros
Route::get('/livro/novo', 'LivrosController@create');
Route::post('/livro/novo', 'LivrosController@store')->name('salvar_livro');

//listagem do livro cadastrados
Route::get('/', 'LivrosController@show');

//exclusão
Route::get('/livro/excluir/{id}', 'LivrosController@destroy')->name('excluir_livro');

//editando
Route::get('/livro/edit/{id}', 'LivrosController@edit')->name('editar_livro');
Route::post('/livro/edit/{id}', 'LivrosController@update')->name('atualizar_livro');
