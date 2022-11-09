<?php

use Illuminate\Support\Facades\Route;

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
