<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return "Welcome to the application!";
});

//Route::get('/posts', [PostController::class, 'index'])
 //   ->name('posts.index');

//Route::get('/posts/create',  [PostController::class, 'create'])
//    ->name('posts.create');

//Route::post('/posts', [PostController::class, 'store'])
//    ->name('posts.store');
//Ruta para mostrar un registro
//Route::get('/posts/{id}', [PostController::class, 'show'])
//    ->name('posts.show');

//Route::put('/posts/{id}', [PostController::class, 'update'])
//   ->name('posts.update');

//Route::delete('/posts/{id}', [PostController::class, 'destroy'])
//    ->name('posts.destroy');


/*Route::resource('materials', PostController::class)
    ->parameter('materials', 'posts')
    ->names('posts');
*/
Route::prefix('posts')->name('posts.')->controller(PostController::class)->group(function () {
    Route::get('/', 'index')
        ->name('index');
        
    Route::get('/create', 'create')
        ->name('create');

    Route::post('/', 'store')
        ->name('store');

    Route::get('/{id}', 'show')
        ->name('show');

    Route::put('/{id}', 'update')
        ->name('update');

    Route::delete('/{id}', 'destroy')
        ->name('destroy');
});
