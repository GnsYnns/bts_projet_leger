<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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

Route::get('/', function () {
    return view('accueil');
});

Route::get('/{lang}', function (string $lang) {
    if (! in_array($lang, ['en', 'fr'])) {
        abort(400);
    } else {
        App::setLocale($lang);
    }
    return view('accueil');
});

Route::get('/{locale}', function (string $locale) {
    if (! in_array($locale, ['cancel','disabilities','help','info','map','operation','privacy','terms'])) {
        return view('accueil');
    } else {
        return view('annex.$locale');
    }
});