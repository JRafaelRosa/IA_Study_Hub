<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ArtigoController;

/**
 * ROTAS DE AUTENTICAÇÃO
 */
Route::post('/login', [AuthController::class, 'login'])->name('api.login');
Route::post('/cadastro', [AuthController::class, 'store'])->name('api.cadastro');

// Logout precisa autenticação
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth:sanctum')
    ->name('api.logout');

// Retorna usuário autenticado
Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home', function () {
    return 'inicio';
});

/**
 * ROTAS DE CATEGORIA (apenas autenticados)
 */
Route::prefix('categoria')->group(function () {

    Route::get('/visualizar', [CategoriaController::class, 'listar']);

    Route::get('/{id}', [CategoriaController::class, 'showCategoria']);

    // Apenas admin (exemplo de middleware de permissão)
    Route::post('/criar', [CategoriaController::class, 'store'])->middleware('permissao');

    Route::put('/atualizar/{id}', [CategoriaController::class, 'update'])->middleware('permissao');

    Route::delete('/deletar/{id}', [CategoriaController::class, 'destroy'])->middleware('permissao');
});


/**
 * ROTAS DE EXEMPLOS
 */
Route::prefix('exemplos')->group(function () {

    // Lista todos, com filtro opcional
    Route::get('/', function () {
        return 'Listar todos os exemplos (com filtro opcional)';
    });

    // Detalhes de um exemplo específico
    Route::get('/{id}', function ($id) {
        return "Detalhes do exemplo id: $id";
    });

    // Criação (admin)
    Route::post('/', function () {
        return 'Criar um novo exemplo (somente admin)';
    })->middleware('permissao');

    // Atualização (admin)
    Route::put('/{id}', function ($id) {
        return "Atualizar o exemplo id: $id (somente admin)";
    })->middleware('permissao');

    // Remoção (admin)
    Route::delete('/{id}', function ($id) {
        return "Deletar o exemplo id: $id (somente admin)";
    })->middleware('permissao');

    // Marcar ou desmarcar como favorito
    Route::post('/{id}/favorite', function ($id) {
        return "Marcar/desmarcar exemplo id: $id como favorito";
    })->middleware('auth:sanctum');
});


/**
 * ROTAS DE ARTIGOS
 */
Route::prefix('artigos')->group(function () {

    // Lista todos os artigos
    Route::get('/',[ArtigoController::class, 'show']);

    // Detalhes de um artigo
    Route::get('/{id}',[ArtigoController::class, 'showArtigo']);

    // Criação (admin)
    Route::post('/', [ArtigoController::class, 'store'])->middleware('permissao');

    // Atualização (admin)
    Route::put('/{id}', [ArtigoController::class, 'update'])->middleware('permissao');

    // Exclusão (admin)
    Route::delete('/{id}', [ArtigoController::class, 'apagar'])->middleware('permissao');
});


/**
 * ROTAS DE FAVORITOS (apenas autenticados)
 */
Route::prefix('favoritos')->middleware('auth:sanctum')->group(function () {

    // Lista favoritos do usuário autenticado
    Route::get('/', function () {
        return 'Listar exemplos favoritos do usuário autenticado';
    });

});
