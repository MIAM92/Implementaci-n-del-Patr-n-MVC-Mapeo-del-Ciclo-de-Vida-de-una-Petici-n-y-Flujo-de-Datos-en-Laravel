<?php

use App\Http\Controllers\LugarController;

// Cuando alguien entre a la página principal, verá el catálogo completo
Route::get('/', [LugarController::class, 'index'])->name('lugares.index');

// Cuando alguien entre a /lugar/1 o /lugar/2, verá el detalle de ese destino específico
Route::get('/lugar/{id}', [LugarController::class, 'show'])->name('lugares.show');
