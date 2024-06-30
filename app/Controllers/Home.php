<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {   
        $data =[
            'judul'=>'Dashbord',
            'page'=>'../Views/Dashbord'
        ];
        return view('Dashbord',$data);

    }
    public function kecamatan(): string
    {
        $data =[
            'judul'=>'kecamatan',
            'page'=>'../Views/kecamatan/tampil'
        ];
        return view('tampil',$data);
    }
    public function pondok(): string
    {
        $data =[
            'judul'=>'pondok',
            'page'=>'v_pondok'
        ];
        return view('v_pondok',$data);
    }
}
