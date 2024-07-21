<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function home()
    {
        $articles = Article::latest()->limit(5)->get();
        $meta = [
            'title' => 'Artikel Terupdate',
            'description' => 'Artikel tentan sesuatu yang sedang tren',
            'keywords' => 'video viral',
            'image' => null
        ];
        return view('dashboard', compact('articles', 'meta'));
    }
}
