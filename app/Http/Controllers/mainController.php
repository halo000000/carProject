<?php

namespace App\Http\Controllers;


class mainController
{
    public function home()
    {
        return view('home');
    }
    public function cars()
    {
        return view('cars');
    }
    public function products()
    {
        return view('products');
    }
    public function info()
    {
        return view('info');
    }
}
