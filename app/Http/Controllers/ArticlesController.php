<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();

        return view('artiekelen.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {

        return view('artiekelen.show', ['article' => $article]);
    }

    public function create()
    {
        return view('artiekelen.create');
    }

    public function store()
    {

        Article::create($this->validateArticle());


        return redirect('article/overzicht');
    }

    public function edit(Article $article)
    {
        return view('artiekelen.edit', compact('article'));
    }

    public function update(Article $article)
    {

        $article->update($this->validateArticle());



        return redirect('/article/' . $article->id);
    }

    public function destroy()
    {

    }


    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'short_body' => 'required',
            'body' => 'required'
        ]);
    }
}
