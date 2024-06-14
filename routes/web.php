<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\auth\RegisterController;
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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::group(['middleware' => ['web']], function() {
// Rotas do Painel e Home
    Route::get('/painel', function () {
        return view('dashboard');
    });

    Route::get('/home', function () {
        return view('dashboard');
    });

    // Rotas para Agricultores
    Route::get('/agricultores', [FarmerController::class, 'index']);
    Route::get('/agricultores/detalhes/{id}', [FarmerController::class, 'show']);
    Route::put('/agricultores/detalhes/{id}', 'FarmerController@update')->name('agricultores.update');
    Route::resource('agricultores', FarmerController::class);

    // Rotas para Produtos e Ofertas
    Route::get('/produtos/alimento/detalhes/{id}', [OfferController::class, 'offerSingle']);
    Route::get('/produtos/alimento/editar/{id}', [OfferController::class, 'offerEdit']);
    Route::get('/produtos/alimento/{id}', [OfferController::class, 'offerAdd']);
    Route::get('/produtos/produtos', function () {
        return view('produtos/produtos');
    });
        
    Route::get('/produtos/estoque', [OfferController::class, 'stock']);
    Route::post('/produtos/alimento', [OfferController::class, 'addOffer']);
    Route::patch('/produtos/alimento/{id}', [OfferController::class, 'editOffer']);
    Route::resource('produtos', OfferController::class);

    // Rotas para Clientes
    Route::resource('clientes', ClientController::class);
    Route::get('/clientes/detalhes/{id}', [ClientController::class, 'single']);
    Route::get('/clientes', [ClientController::class, 'index']);
    Route::post('/clientes/adicionar', [ClientController::class, 'addClient']);
    Route::patch('/clientes/atualizar/{id}', [ClientController::class, 'editClient']);
    Route::get('/clientes/alimento', function () {
        return view('clientes/alimento');
    });
        
    // Rotas para Usuários (Admin)
    Route::resource('usuarios', AdminController::class);
    Route::get('/usuario/solicitacoes', [AdminController::class, 'associate']);
    Route::post('/usuario/adicionar-solicitacao', function () {
        return view('usuario/solicitacoes');
    });

    // Rotas de Conferência
    Route::get('/conferencia/folhas', function () {
        return view('conferencia/folhas');
    });
    Route::get('/conferencia/caixas', function () {
        return view('conferencia/caixas');
    });
    Route::get('/conferencia/pesos', function () {
        return view('conferencia/pesos');
    });

    // Rotas de Vendas
    Route::get('/vendas', [OrderController::class, 'index']);
    Route::post('/vendas/adicionar', [OrderController::class, 'addOrder']);
    Route::patch('/vendas/atualizar/{id}', [OrderController::class, 'UpdateOrderId']);
    Route::get('/vendas/finalizado', function () {
        return view('venda/finalizado');
    });
    Route::get('/vendas/entregadores', function () {
        return view('venda/entregadores');
    });
        
    Route::get('/alimentos', [OfferController::class, 'list']);
    Route::get('/alimentos/editar', function () {
        return view('alimentos/editar');
        });
    
});