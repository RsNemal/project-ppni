<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('layout', [
            'title' => 'Beranda',
            'showHero' => true
        ]);
    }

    //     public function home()
    // {
    //     return view('home', [
    //         'title' => 'Beranda'
    //     ]);
    // }

}
