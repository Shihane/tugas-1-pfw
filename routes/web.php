<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (\Illuminate\Http\Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');

    if ($username == 'admin' && $password == 'password') {
        return redirect('/home');
    } else {
        return redirect('/login')->withErrors(['login' => 'Login tidak berhasil, coba lagi.']);
    }
});

Route::get('/home', function () {
    return view('home');
});


