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
        return view('buyCars');
    }
    public function products()
    {
        return view('carParts');
    }
    public function info()
    {
        return view('info');
    }
}
