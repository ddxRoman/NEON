<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Price;
use App\Enums\ContactDetailsEnum;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function get(){
        $data['articles']= (new Article())->all();
        $data['prices']= (new Price())->all();
        $data['contacts']= ContactDetailsEnum::getConstants();
        // dd($data['contacts']);
        return view('home', ['data'=>$data]);

    }
}
