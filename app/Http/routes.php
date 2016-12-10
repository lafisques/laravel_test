<?php
//app/Http/routes.php
//twig template resources/views/hello.twig
Route::get('/', function () {
    return View::make('hello');
});
Route::get('/test', function () {
    return View::make('hello');
});