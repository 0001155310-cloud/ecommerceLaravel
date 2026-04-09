<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminProdutosController;
use App\Http\Controllers\admin\AdminPedidosController;
use App\Http\Controllers\admin\AdminClientesController;
use App\Http\Controllers\admin\AdminConfiguracoesController;

Route::get('/', function () {return view('index');});
Route::get('/index', function () {return view('index');});
Route::get('/catalogo', function () {return view('catalogo');});
Route::get('/produto', function () {return view('produto');});
Route::get('/carrinho', function () {return view('carrinho');});
Route::get('/checkout', function () {return view('checkout');});
Route::get('/contato', function () {return view('contato');}); 


Route::get('/admin', function () {return view('admin.index');});
Route::get('/admin/index', [AdminController::class, 'home']);
Route::get('/admin/produtos', [AdminProdutosController::class, 'produtos']);
Route::get('/admin/pedidos', [AdminPedidosController::class, 'pedidos']);
Route::get('/admin/clientes', [AdminClientesController::class, 'clientes']);
Route::get('/admin/configuracoes', [AdminConfiguracoesController::class, 'configuracoes']);

Route::post('/admin/salvar', [AdminProdutosController::class, 'salvar']);
Route::delete('/admin/excluir', [AdminProdutosController::class, 'excluir']);
