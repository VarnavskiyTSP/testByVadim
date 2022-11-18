<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Models\Article;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home', [
        'logotext' => 'Geometry Dash',
        'demon' => 'Legendary Extreme Demon',
        'creator' => 'Legendary Creators',
        'level' => 'Verified Levels',
        'part' => 'Sneak Peek',
        'demonlist' => 'Bloodlust, Abyss of Darkness, Thanatophobia, Athanatos, Red World Rebirth, Yatagarasu, Devil Vortex, Kappa, Fusion Z',
        'creatorlist' => 'Noobas, Edge, Namtar, Supmaxy, Zeidos, DeCody, Syberian, VolteX, ZareGD',
        'levellist' => 'Acheron, Slaughterhouse, Abyss of Darkness, Sakupen Circles, Firework, Arcturus, Hard Machine, Tartarus, Sonic Wave Infinity',
        'partlist' => 'Sneak Peek - level Dash (14 August 2021), Sneak Peek 2 - level Explorers (4 September 2022)'
    ]);
});
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
Route::get('/articles/{article}/show', [ArticleController::class, 'show'])->name('articles.show');
