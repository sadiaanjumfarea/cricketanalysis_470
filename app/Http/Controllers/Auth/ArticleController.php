<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleView;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index2', compact('articles'));
    }
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $article = new Article();
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();

        return redirect()->route('articles.index')->with('success', 'Article created successfully!');
    }
}

