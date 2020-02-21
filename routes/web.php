<?php



use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/aplicacao') ->group( function(){

    Route::get('/', function () {
        return view ('app');
    })->name('app');

    Route::get('/user', function () {
        return view ('user');
    })->name('app.user');

    Route::get('/profile', function () {
        return view ('profile');
    })->name('app.profile');
});

Route::get('Carros','MeuControlador@Carros' );
Route::get('mult/{n1}/{n2}' , 'MeuControlador@mult' );
Route::redirect('todosprodutos1', 'produtos', 301);
Route::resource('clientes' , 'ClienteControlador');


///