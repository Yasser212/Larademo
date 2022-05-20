<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ArticleController extends Controller
{
    // Show all articles
    public function index() {
        return view('articles.index', [
            'articles' => Article::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    //Show single article
    public function show(Article $article) {
        return view('articles.show', [
            'article' => $article
        ]);
    }

    // Show Create Form
    public function create() {
        return view('articles.create');
    }

    // Store Article Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('articles', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Article::create($formFields);

        return redirect('/')->with('message', 'Article created successfully!');
    }

    // Show Edit Form
    public function edit(Article $article) {
        return view('articles.edit', ['article' => $article]);
    }

    // Update Article Data
    public function update(Request $request, Article $article) {
        // Make sure logged in user is owner
        if($article->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $article->update($formFields);

        return back()->with('message', 'Article updated successfully!');
    }

    // Delete Article
    public function destroy(Article $article) {
        // Make sure logged in user is owner
        if($article->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        $article->delete();
        return redirect('/')->with('message', 'Article deleted successfully');
    }

    // Manage Articles
    public function manage() {
        return view('articles.manage', ['articles' => auth()->user()->articles()->get()]);
    }
}