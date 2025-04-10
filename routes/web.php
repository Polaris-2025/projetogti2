<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ciar-conta', function () {
    return view('ciar-conta');
});


Route::post('/salva-conta', function (Request $request) {
dd($request);
$user= new User ();
$user->name = $request->name;
$user->email = $request->email;
$user->password = $request->password;
$user->save();

return "Usuário salvo com sucesso";


})->name('salva-conta');



Route::get('/Identificação', function () {
    return " A Eliminação realizada com sucesso";
});


Route::get('/Eliminados/{Ilunminados}', function ($Iluminados) {
    return " Já elvis:  ".$Iluminados;
});


Route::get('/subtração/{num777}/{num780}', function ($num777,$num780) {
    return " A subtração é:  ".$num777 - $num780;
});

Route::get('/multiplicação/{num777}/{num780}', function ($num777,$num780) {
    return " A multiplicação é:  ".$num777 * $num780;
});


Route::get('/divisão/{num777}/{num780}', function ($num777,$num780) {
    return " A divisão é:  ".$num777 / $num780;
});





