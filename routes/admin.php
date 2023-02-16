<?php
use Illuminate\Routing\Route;

/**Routes de l'administrador */
Route::prefix('adb')->group(function(){
    Route::get('articulos', 'ControladorAdmin@articulos');
});