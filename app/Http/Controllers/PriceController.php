<?php

namespace App\Http\Controllers;
use App\Models\Price;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function Price(){
    $price = new Price;
    return view('home', ['price'=>$price->where('price', '>', '0')->get()]);
    }
    
}
