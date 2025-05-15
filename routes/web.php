<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Rotas


Route::get('/', function () {
    return view('inicio');
})->name('inicio');



Route::get('/criar-conta', function () {
    return view('criar-conta');
})->name('criar-conta');



Route::get('/login', function () {
    return view('login');
})->name('login');



Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');



Route::post('/logar', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('dashboard');
    }

    return back()->withErrors([
        'email' => 'O email e senha digitados não são válidos',
    ])->onlyInput('email');
})->name('logar');






Route::post('/salva-conta', function (Request $request) {
    //dd($request);
    $user= new User ();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->save();

    return "Usuário salvo com sucesso";


    })->name('salva-conta');


















Route::get('/login', function () {
    return view('login');
})->name('login');


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





