<?php

use Illuminate\Support\Facades\Route;

// = private documentation... =================================
// Route::get("/docs", function () {
//     return view("docs.index");
// });
// o
// Route::get("/docs", fn() => view("docs.index"));
// o
Route::view("/docs", "docs.index");
// = private documentation... =================================

Route::view("/", "home");

Route::view("/services", "services");

Route::view("/about", "about");

Route::view("/contact", "contact");
