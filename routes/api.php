<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [Controller\ApiController::class, 'estados']);
Route::get('/{id_estado}', [Controller\ApiController::class, 'municipios_por_estado']);
