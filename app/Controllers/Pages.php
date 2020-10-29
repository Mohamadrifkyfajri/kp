<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Masjid Baiturridwan',
            'tes' => ['satu', 'dua', 'tiga']
        ];

        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About | Masjid Baiturridwan'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact | Masji Baiturrahman'
        ];
        return view('pages/contact', $data);
    }



    //--------------------------------------------------------------------

}
