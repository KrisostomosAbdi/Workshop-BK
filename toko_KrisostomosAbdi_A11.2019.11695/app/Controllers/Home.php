<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $DiskonModel = new \App\Models\DiskonModel();
        return view('home', [
            'diskon' => $DiskonModel->where('Aktif', 1)->findAll(),
        ]);
    }
    public function contact()
    {
        return view('contact');
    }
}
