<?php
Route::get('/', function () {
    return view('index');
});
Route::post('result', 'CalculatorController@calculator');

Route::get('r', 'CalculatorController@tuanAnh');