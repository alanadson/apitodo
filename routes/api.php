<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ping', function (){
    return ['pong'];
});


// CRUD todo
// Create = métodos para criar uma tarefa
// Read = métodos para realizar uma tarefa
// Update = métodos para realizar uma tarefa
// Delete = métodos para deletar uma tarefa

// Post /todo = Inserir uma tarefa no sistema
// GET /todos = Ler todas as tarefas do sistema
// GET /todo/2 = Ler uma tarefa específica do sistema
// PUT /todo/2 = Atualizar uma tarefa no sistema
// DELETE /todo/2 = Deletar uma tarefa no sistema

Route::post('/todo', [ApiController::class, 'createTodo']);
Route::get('/todos', [ApiController::class, 'readAllTodos']);
Route::get('/todo/{id}', [ApiController::class, 'readTodo']);
Route::put('/todo/{id}', [ApiController::class, 'updateTodo']);
Route::delete('/todo/{id}', [ApiController::class, 'deleteTodo']);
