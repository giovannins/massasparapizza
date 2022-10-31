<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        return view('home/index');
    }

    public function sobre()
    {
        return view('home/sobre');
    }

    public function produtos()
    {
        return view('home/produtos');
    }
}
