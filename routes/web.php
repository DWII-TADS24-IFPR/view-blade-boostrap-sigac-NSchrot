<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('alunos', \App\Http\Controllers\AlunoController::class);
Route::resource('categorias', \App\Http\Controllers\CategoriaController::class);
Route::resource('comprovantes', \App\Http\Controllers\ComprovanteController::class);
Route::put('/alunos/{aluno}', [AlunoController::class, 'update'])->name('alunos.update');
Route::get('/turmas/{cursoId}', [AlunoController::class, 'getTurmasByCurso'])->name('turmas.byCurso');