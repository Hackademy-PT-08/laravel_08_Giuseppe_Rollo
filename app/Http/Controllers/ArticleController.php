<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //visualizzazione form di aggiunta

    public function create() {

        return view('articles.create');

    }

//aggiungere articolo
    public function store (Request $request){

        $article= new Article;

        $article->title = $request->titolo;
        $article->content = $request->contenuto;
        $article->save();
        return redirect('/');

}
}
