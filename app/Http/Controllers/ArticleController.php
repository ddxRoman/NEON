<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function submit(Request $req) {
    
        $article = new Article();
        $article->header=$req->input('header');
        $article->body=$req->input('body');
        $article->rank=$req->input('rank');
        $article->save();

        return redirect('admin');
    }
    public function fistArticle(){
    $article = new Article;
    return view('home', ['header'=>$article->where('rank', '=', '0')->get()]);
    }
    }

    
    