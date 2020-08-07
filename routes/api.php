<?php

    use App\Http\Controllers\CBrand;
    use App\Http\Controllers\COffer;
    use App\Http\Controllers\CPhone;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
    */

    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });

    Route::group(['prefix' => 'phones'], function () {
        Route::get('/', [CPhone::class, 'phoneGetWithOffers']);
        Route::post('/create', [CPhone::class, 'create']);
    });

    Route::group(['prefix' => 'brands'], function () {
        Route::get('/', [CBrand::class, 'getAll']);
    });

    Route::group(['prefix' => 'offers'], function () {
        Route::get('/', [COffer::class, 'getAll']);
        Route::post('/create', [COffer::class, 'create']);
    });