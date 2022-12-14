<?php

use Illuminate\Support\Facades\Route;

// HOME
Route::get('/', function () {
    $data = [
        "title" => "Home",
        "pharagraph" => "home paragraph",
    ];
    return view('home', $data);
})->name("home");
// /HOME

// SHOP
Route::get('/shop', function () {
    $data = [
        "title" => "Shop",
        "pharagraph" => "shop paragraph",
    ];
    return view('shop', $data);
})->name("shop");
// /SHOP

// ABOUT
Route::get('/about', function () {
    $data = [
        "title" => "About",
        "pharagraph" => "about paragraph",
    ];
    return view('about', $data);
})->name("about");
// /ABOUT

// CONTACTS
Route::get('/contacts', function () {
    $data = [
        "title" => "Contacts",
        "pharagraph" => "contacts paragraph",
    ];
    return view('contacts', $data);
})->name("contacts");
// /CONTACTS

// HISTORY
Route::get('/history', function () {
    $data = [
        "title" => "History",
        "pharagraph" => "history paragraph",
    ];
    return view('history', $data);
})->name("history");
// /HISTORY