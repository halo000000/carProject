<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dynamiController
{
    //
    public function oneCar(int $id)
    {
        return view('buy',['id'=> $id]);
    }
    public function oneProducts(int $id)
    {
        return view('products',['id'=> $id]);
    }
    public function oneInfo(string $slug)
    {
        return view('info',['slug'=> $slug]);
    }
}
