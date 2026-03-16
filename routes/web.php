<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("home");
});

Route::get("/services", function () {
    return view("services");
});

Route::get("/about", function () {
    return view("about");
});

Route::get("/contact", function () {
    return view("contact");
});

// = private documentation... =================================
Route::get("/docs", function () {
    return view("docs.index");
});
// = private documentation... =================================
