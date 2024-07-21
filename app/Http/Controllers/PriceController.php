<?php

namespace App\Http\Controllers;
use App\Models\Price;

use Illuminate\Http\Request;

class PriceController extends Controller
{

    public function price_add(Request $add_position) {
    
        $Price = new Price();
        $Price->name_product=$add_position->input('name_neon');
        $Price->price=$add_position->input('coast_neon');
        $Price->production_time=$add_position->input('time_neon');
        $Price->save();

        return redirect('admin');
    }

    public function Price(){
    $price = new Price;
    // return view('home', ['price'=>$price->where('price', '>', '0')->get()]);
    return view('home', ['cost'=>$price->all()]);
    }
    
}
