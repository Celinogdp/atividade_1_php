<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/cumprimento/{name}/{lastname?}', function ($name = null, $lastname = null) {
    return view('welcome', ['name'=>$name, 'lastname'=>$lastname]);
});

Route::get('/soma/{numero1}/{numero2}', function ($numero1, $numero2 ){

        $soma = $numero1 + $numero2;
        return($soma);
});

Route::get('/subtração/{numero1}/{numero2}', function ($numero1, $numero2 ){

    $subtração = $numero1 - $numero2;
    return($subtração);
});

Route::get('/divisão/{numero1}/{numero2}', function ($numero1, $numero2 ){

    if($numero2 > 0){
        $divi = $numero1 / $numero2;
        return($divi);
    }
    return('coloque outro numero');


});

Route::get('/multiplicação/{numero1}/{numero2}', function ($numero1, $numero2 ){

    $multi = $numero1 * $numero2;
    return($multi);
});

Route::get('/xablau/{nome}/{sobrenome?}/{idade?}/{email?}', function ($nome, $sobrenome = null, $idade = null, $email = null){

    return view('xablau', ['nome' => $nome, 'sobrenome' => $sobrenome, 'idade' => $idade, 'email' => $email]);
} );

Route::get('/produtos', [ProdutosController::class, 'index']);