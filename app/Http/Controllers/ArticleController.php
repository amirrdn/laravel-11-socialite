<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $meta = [
            'title' => 'Artikel Terupdate',
            'description' => 'Artikel tentan sesuatu yang sedang tren',
            'keywords' => 'video viral',
            'image' => null
        ];
        $articles = $this->getArticlesForUser(auth()->user());
        return view('articles.index', compact('articles', 'meta'));
    }

    private function getArticlesForUser($user)
    {
        $limit = 0;
        switch ($user->membership_type) {
            case 'A':
                $limit = 3;
                break;
            case 'B':
                $limit = 10;
                break;
            case 'C':
                $limit = 100; // Assume no limit for type C
                break;
        }
        

        // Retrieve articles from the database
        return \App\Models\Article::limit($limit)->get();
    }
    public function show($title)
    {
        // return str_replace('-', ' ', strtolower($title));
        $article = Article::whereRaw('LOWER(slug) = ?', [strtolower($title)])->firstOrFail();
        $latestArticles = Article::whereRaw('LOWER(slug) != ?', [strtolower($title)])->get();
        $meta = [
            'title' => $article->title,
            'description' => \Str::limit(strip_tags($article->content), 160),
            'keywords' => $article->tags,
            'image' => $article->image
        ];
        return view('articles.show', compact('article', 'latestArticles', 'meta'));
    }
}
