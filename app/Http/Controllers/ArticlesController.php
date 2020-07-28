<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
	public function index() {
		// Rener a list of resource.
		$articles = Article::latest()->get();

		return view('articles.index', ['articles' => $articles]);
	}

    public function show(Article $article)
    {
    	// Show a single resource.

    	return view('articles.show', ['article' => $article]);
    }

    public function create() {
    	return view('articles.create');
    }

    public function store() {
        // validation

        Article::create($this->validateArticle());

    	return redirect('articles.index');
    }

    public function edit(Article $article) {
    	// Show a view to edit an existing resource.
         
        return view('articles.edit', compact('article')); 
    }

    public function update(Article $article) {
    	// Persist the edited resource.
        $article->update($this->validateArticle());

        return redirect($article->path());
        
    }

    public function destroy() {
    	// Delete the resource.
    }

    protected function validateArticle() {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
