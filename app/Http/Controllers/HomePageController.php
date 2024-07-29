<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Price;
use App\Models\Review;
use App\Models\Example;
use App\Enums\ContactDetailsEnum;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function get(){
        $data['articles']= (new Article())->all();
        $data['prices']= (new Price())->all();
        $data['rewiews']= (new Review())->all();
        $data['examples']= (new Example())->all();
        $data['contacts']= ContactDetailsEnum::getConstants();
        return view('home', ['data'=>$data]);
    }
}
