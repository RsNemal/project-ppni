<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Tampilkan halaman beranda utama dengan hero
        return view('partials/v_home', [
            'title' => 'Beranda',
            'showHero' => true
        ]);
    }
}
