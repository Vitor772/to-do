<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui você registra as rotas web da aplicação. Estas rotas são carregadas
| pelo RouteServiceProvider e pertencem ao grupo de middleware "web".
| Organize as responsabilidades por controller para facilitar a manutenção.
|
*/

// HomeController: Responsável por gerenciar a página inicial.
Route::get('/', [HomeController::class, 'index'])->name('home');

// TaskController: Gerenciamento de tarefas (CRUD).
Route::get('/task/new', [TaskController::class, 'create'])->name('task.create'); // Exibe formulário para criar uma nova tarefa.
Route::post('/task/create_action', [TaskController::class, 'create_action'])->name('task.create_action'); // Processa o formulário de criação.
Route::get('/task/edit', [TaskController::class, 'edit'])->name('task.edit'); // Exibe formulário para editar uma tarefa existente.
Route::get('/task/delete', [TaskController::class, 'delete'])->name('task.delete'); // Deleta uma tarefa específica.
Route::get('/task', [TaskController::class, 'index'])->name('task.view'); // Lista as tarefas existentes.
Route::post('/task/edit_action', [TaskController::class, 'edit_action'])->name('task.edit_action'); // Exibe formulário para editar uma tarefa existente

// AuthController: Gerenciamento de autenticação de usuários.
Route::get('/register', [AuthController::class, 'register'])->name('register'); // Exibe o formulário de registro de usuário.
Route::get('/login', [AuthController::class, 'index'])->name('login'); // Exibe o formulário de login de usuário.

// TestController: Testes e rotas temporárias.
Route::get('/user', [TestController::class, 'index']); // Rota para testes relacionados ao usuário.

