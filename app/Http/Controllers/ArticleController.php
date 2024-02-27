<?php

namespace App\Http\Controllers;

use id;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ArticleStoreRequest;

class ArticleController extends Controller
{





    public function Index()
    {
        $articles = Article::all();
        return view('Articoli', ['titoloArticoli' => 'Articoli'], ['Articoli' => $articles]);
    }






    public function Show($id)
    {
        $article = Article::find($id);

        return view('Detaglio', ['articolo' => $article],);
    }






    public function ShowByCategory($categoria)
    {
        $articles = Article::all();
        $articoliPerCategoria = Article::where('categoria', $categoria)->get();
        return view('ArticoliPerCategoria', ['Articoli' => $articoliPerCategoria], ['Articoli' => $articles]);
    }



    public function  store(ArticleStoreRequest $request)
    {
        $validated = $request->validated();
        $article = Article::create($validated);
        $image = $request->file('image');
        if ($request->hasFile('image')) {
            $path = 'public/images';
            $name = $article['id'] . 'copertina' . '.' . $request->file('image')->extension();
            $completePath = $path . '/' . $name;
            $file = $request->file('image')->storeAs($path, $name);
            $article->image = $completePath;
            $article->save();
        } else {
            $image = 'DefaundImage/default.jpg';
            $article->image = $image;
            $article->save();
        }

        return redirect()->back()->with(['success' => 'Articolo creato correttamente']);
    }



    public function create()
    {
        return view('create-article');
    }
}
