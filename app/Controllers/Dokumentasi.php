<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dokumentasi extends BaseController
{
    public function dokumentasi()
    {
        return view('dokumentasi/v_dokumentasi', [
            'title' => 'Dokumentasi',
            'showHero' => false //
        ]);
    }
}
