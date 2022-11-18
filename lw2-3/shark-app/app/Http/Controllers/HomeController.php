<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home', [
            'logotext' => 'Geometry Dash',
            'demon' => 'Legendary Extreme Demon',
            'demonlist' => 'Bloodlust, Abyss of Darkness, Thanatophobia, Athanatos, Red World Rebirth, Yatagarasu, Devil Vortex, Kappa, Fusion Z',
            'creator' => 'Legendary Creators',
            'creatorlist' => 'Noobas, Edge, Namtar, Supmaxy, Zeidos, DeCody, Syberian, VolteX, ZareGD',
            'level' => 'Verified Levels',
            'levellist' => 'Acheron, Slaughterhouse, Abyss of Darkness, Sakupen Circles, Firework, Arcturus, Hard Machine, Tartarus, Sonic Wave Infinity',
            'part' => 'Sneak Peek',
            'partlist' => 'Sneak Peek - level Dash (14 August 2021), Sneak Peek 2 - level Explorers (4 September 2022)'
        ]);
    }
}
