<?php

namespace App\Controllers;

class Profile extends BaseController
{
 
 public function visimisi()
    {
        return view('profile/v_visi_misi', [
            'title' => 'Visi Misi',
            'showHero' => false //
        ]);
    }

     public function strukturOrganisasi()
    {
        return view('profile/v_struktur_organisasi', [
            'title' => 'Struktur Organisasi',
            'showHero' => false 
        ]);
    }

        public function sejarah()
    {
        return view('profile/v_sejarah', [
            'title' => 'Sejarah',
            'showHero' => false 
        ]);
    }
}
