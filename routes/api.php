<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\GameController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\GenerationController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'game'],
    function () {
        Route::get('list', [GameController::class, 'list']);
    }
);

Route::group(['prefix' => 'genre'],
    function () {
        Route::get('list', [GenreController::class, 'list']);
    }
);

Route::group(['prefix' => 'platform'],
    function () {
        Route::get('list', [PlatformController::class, 'list']);
    }
);

Route::group(['prefix' => 'publisher'],
    function () {
        Route::get('list', [PublisherController::class, 'list']);
    }
);

Route::group(['prefix' => 'generation'],
    function () {
        Route::get('list', [GenerationController::class, 'list']);
    }
);