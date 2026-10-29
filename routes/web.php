<?php

use Illuminate\Support\Facades\Route;

// Главная страница
Route::get('/', function () {
    return view('home');
});

// Страница "О нас"
Route::get('/about', function () {
    return view('about');
});

// Страница "Контакты" с передачей массива данных
Route::get('/contacts', function () {
    $contacts = [
        'Телефон: +7 (999) 123-45-67',
        'Email: info@example.com',
        'Адрес: г. Москва, ул. Примерная, д. 1',
    ];

    return view('contacts', ['contacts' => $contacts]);
});