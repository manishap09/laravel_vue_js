<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('api')->group(function () {
    Route::resource('products', ProductController::class);
});


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
 
// Route::get('/products', 'ProductController@index');
// Route::post('/product/create', 'ProductController@store');
// Route::get('/product/edit/{id}', 'ProductController@edit');
// Route::post('/product/update/{id}', 'ProductController@update');
// Route::delete('/product/delete/{id}', 'ProductController@destroy');