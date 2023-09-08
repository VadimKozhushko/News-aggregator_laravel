<?php


use \App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', static function (string $name): string {
    return "Hello, {$name}";
});

Route::get('/info/{info}', static function (string $info): string {
    return "Information abot us {$info}";
});

// Route::get('/news/{all}', static function (string $all): string {
//     return "Page with all news, {$all}";
// });

// Route::get('/new/{id}', static function (int $id): string {
//     return "News with #ID {$id}";
// });

// Route::get('/news', [NewsController::class, 'index']);
// Route::get('/news/{id}/show', [NewsController::class, 'show'])
// ->where('id','\d+');
    
Route::get('/',[NewsController::class, 'welcome'])
        ->name('main');
Route::get('/show_category_news/{id}', [NewsController::class, 'showCategoryNews'])
        ->name('show.category.news')
        ->where('id','\d+');


Route::get('/news', [NewsController::class, 'index'])
        ->name('news');
Route::get('/news/{id}/show', [NewsController::class, 'show'])
        ->name('news.show')
        ->where('id','\d+');

