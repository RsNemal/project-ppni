<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Pelayanan extends BaseController
{
    public function pengurusan_ka()
    {
      return view('pelayanan/v_pengurusan_ka', [
            'title' => 'Pengurusan KTA',
            'showHero' => false //
        ]);
    }

    public function pengurusan_sipp()
    {
      return view('pelayanan/v_pengurusan_sipp', [
            'title' => 'Pengurusan SIPP',
            'showHero' => false //
        ]);
    }

    public function pengurusan_skp()
    {
      return view('pelayanan/v_pengurusan_skp', [
            'title' => 'Pengurusan SKP',
            'showHero' => false //
        ]);
    }

}
