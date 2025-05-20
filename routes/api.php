<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login'])->name('api.login');
Route::post('/cadastro', [AuthController::class, 'store'])->name('api.cadastro');
Route::post('/logout', [AuthController::class, 'logout'])->name('api.logout');

Route::prefix('/categoria')->group(function () {
    Route::get('/visualizar', function () {
        return 'categoria';
    });

    Route::get('/{id}', function () {
        return 'teste';
    });

    // apenas adm
    Route::post('/criar', function(){
        return 'criar';
    });

    Route::put('/atualizar/{id}', function(){
        return 'atualizar';
    });

    Route::delete('/deletar/{id}', function(){
        return 'deletar';
    });
});

// ROTAS EXAMPLES
Route::prefix('/examples')->group(function () {

    // GET /api/examples — lista todos, pode filtrar por categoria
    Route::get('/', function () {
        return 'Listar todos os exemplos (com filtro opcional)';
    });

    // GET /api/examples/{id} — detalhes de um exemplo específico
    Route::get('/{id}', function ($id) {
        return "Detalhes do exemplo de id: $id";
    });

    // POST /api/examples — criação (admin)
    Route::post('/', function () {
        return 'Criar um novo exemplo (somente admin)';
    });

    // PUT /api/examples/{id} — atualização (admin)
    Route::put('/{id}', function ($id) {
        return "Atualizar o exemplo id: $id (somente admin)";
    });

    // DELETE /api/examples/{id} — remoção (admin)
    Route::delete('/{id}', function ($id) {
        return "Deletar o exemplo id: $id (somente admin)";
    });

});

// ROTAS ARTICLES
Route::prefix('/articles')->group(function () {

    // GET /api/articles — lista todos os artigos
    Route::get('/', function () {
        return 'Listar todos os artigos';
    });

    // GET /api/articles/{id} — detalhes do artigo
    Route::get('/{id}', function () {
        return "Detalhes do artigo id: ";
    });

    // POST /api/articles — criação (admin)
    Route::post('/', function () {
        return 'Criar um novo artigo (somente admin)';
    });

    // PUT /api/articles/{id} — atualização (admin)
    Route::put('/{id}', function ($id) {
        return "Atualizar o artigo id: $id (somente admin)";
    });

    // DELETE /api/articles/{id} — exclusão (admin)
    Route::delete('/{id}', function () {
        return "Deletar o artigo id: (somente admin)";
    });

});

// ROTAS FAVORITES
Route::prefix('/favorites')->group(function () {

    // GET /api/favorites — lista favoritos do usuário autenticado
    Route::get('/', function () {
        return 'Listar exemplos favoritos do usuário autenticado';
    });

});

// POST /api/examples/{id}/favorite — marca ou desmarca favorito
Route::post('/examples/{id}/favorite', function () {
    return "Marcar/desmarcar exemplo id: como favorito";
});
