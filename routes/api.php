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


Route::post('/logout', [AuthController::class, 'logout'])->name('api.logout');


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

    Route::post('/criar', [CategoriaController::class, 'store']);

    Route::put('/atualizar/{id}', [CategoriaController::class, 'update']);

    Route::delete('/deletar/{id}', [CategoriaController::class, 'destroy']);
});


/**
 * ROTAS DE EXEMPLOS
 */
Route::prefix('exemplos')->group(function () {


    Route::get('/', function () {
        return 'Listar todos os exemplos (com filtro opcional)';
    });

    Route::get('/{id}', function ($id) {
        return "Detalhes do exemplo id: $id";
    });

    Route::post('/', function () {
        return 'Criar um novo exemplo (somente admin)';
    });

    Route::put('/{id}', function ($id) {
        return "Atualizar o exemplo id: $id (somente admin)";
    });

    Route::delete('/{id}', function ($id) {
        return "Deletar o exemplo id: $id (somente admin)";
    });

    Route::post('/{id}/favorite', function ($id) {
        return "Marcar/desmarcar exemplo id: $id como favorito";
    });
});


/**
 * ROTAS DE ARTIGOS
 */
Route::prefix('artigos')->group(function () {

    Route::get('/',[ArtigoController::class, 'show']);

    Route::get('/{id}',[ArtigoController::class, 'showArtigo']);

    Route::post('/', [ArtigoController::class, 'store']);

    Route::put('/{id}', [ArtigoController::class, 'update']);

    Route::delete('/{id}', [ArtigoController::class, 'apagar']);
});


/**
 * ROTAS DE FAVORITOS (apenas autenticados)
 */
Route::prefix('favoritos')->group(function () {

    Route::get('/', function () {
        return 'Listar exemplos favoritos';
    });

});
