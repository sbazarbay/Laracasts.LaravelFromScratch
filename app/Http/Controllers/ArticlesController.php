<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;

class ArticlesController extends Controller
{
	public function index() {
		// Rener a list of resource.
		if(request('tag')) {
			$articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
		} else {
			$articles = Article::latest()->get();
		}

		return view('articles.index', ['articles' => $articles]);
	}

	public function show(Article $article)
	{
		// Show a single resource.

		return view('articles.show', ['article' => $article]);
	}

	public function create() {
		return view('articles.create', [
			'tags' => Tag::all()

		]);
	}

	public function store() {
		$this->validateArticle();

		$article = new Article(request(['title', 'excerpt', 'body']));
		$article->user_id = 1;
		$article->save();

		$article->tags()->attach(request('tags'));

		return redirect()->route('articles.index');
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
			'body' => 'required',
			'tags' => 'exists:tags,id'
		]);
	}
}
