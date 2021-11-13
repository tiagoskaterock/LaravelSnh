<?php

use Illuminate\Support\Facades\Route;



// -----------------  SITE ---------------------

Route::get('/', function () {
    return view('site.index');
});
