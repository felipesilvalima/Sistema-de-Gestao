<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendaController;
Route::prefix('dashboard')->group(function(){
Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard.index');
});
Route::prefix('produtos')->group(function(){

Route::get('/',[ProdutoController::class,'index'])->name('produto.index');

Route::get('/cadastrarproduto',[ProdutoController::class,'cadastrarproduto'])->name('cadastrar.produto');
Route::post('/cadastrarproduto',[ProdutoController::class,'cadastrarproduto'])->name('cadastrar.produto');

Route::get('/edit{id}',[ProdutoController::class,'edit'])->name('produto.edit');
Route::put('/edit{id}',[ProdutoController::class,'edit'])->name('produto.edit');

Route::get('/delete{id}',[ProdutoController::class,'delete'])->name('produto.delete');

});


Route::prefix('clientes')->group(function(){

    Route::get('/',[ClienteController::class,'index'])->name('cliente.index');

    Route::get('/visualizar{id}',[ClienteController::class,'show'])->name('cliente.show');
    
    Route::get('/cadastrarcliente',[ClienteController::class,'cadastrarcliente'])->name('cadastrar.cliente');
    Route::post('/cadastrarcliente',[ClienteController::class,'cadastrarcliente'])->name('cadastrar.cliente');
    
    Route::get('/edit{id}',[ClienteController::class,'edit'])->name('cliente.edit');
    Route::put('/edit{id}',[ClienteController::class,'edit'])->name('cliente.edit');
    
    Route::get('/delete{id}',[ClienteController::class,'delete'])->name('cliente.delete');
    
    });



 Route::prefix('vendas')->group(function(){

        Route::get('/',[VendaController::class,'index'])->name('venda.index');
     
        Route::get('/cadastrarvendas',[VendaController::class,'cadastrarvendas'])->name('cadastrar.venda');
        Route::post('/cadastrarvendas',[VendaController::class,'cadastrarvendas'])->name('cadastrar.venda');
        
        Route::get('/delete{id}',[VendaController::class,'delete'])->name('venda.delete');
  
        Route::get('/enviarComprovantePorEmail{id}',[VendaController::class, 'enviarComprovantePorEmail'])->name('enviarComprovantePorEmail.venda');
     });


     Route::prefix('usuario')->group(function(){

      Route::get('/',[UserController::class,'index'])->name('usuario.index');

      Route::get('/cadastrarUsuario',[UserController::class,'cadastrarUsuario'])->name('cadastrar.usuario');
      Route::post('/cadastrarUsuario',[UserController::class,'cadastrarUsuario'])->name('cadastrar.usuario');
      
      Route::get('/edit{id}',[UserController::class,'edit'])->name('usuario.edit');
      Route::put('/edit{id}',[UserController::class,'edit'])->name('usuario.edit');
      
      Route::get('/delete{id}',[UserController::class,'delete'])->name('usuario.delete');
      
      });