<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PhotoController;
 
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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*Route::get('/products',function
() {
   $post = Post::create(['name' => 'chair','price' => '650','description' => 'all purpose','color' => 'black']);

   return $post;

});
*/


Route::resource('/products', PhotoController::class);

//Route::get('/products','PhotoController');
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/