<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControladorAdmin;

Route::group(['middlaware' => ['adb']](function(){
    Route::get('articulos', [ControladorAdmin::class,'articulos']);
}));