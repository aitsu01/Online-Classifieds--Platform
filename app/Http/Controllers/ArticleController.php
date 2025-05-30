<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ArticleController extends Controller implements HasMiddleware
{

    public static function middleware() {
        return [
            new Middleware('auth', only: ['create','show']),// modifica fatta solo gli utenti loggati o registrati posso vedere il carosello delgi articoli
           
        ];
    }
    public function create() {
        $categories = Category::all();
        return view('article.create', compact('categories'));
    }

    public function index() {
        $articles=Article::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate('6');
        return view('article.index', compact('articles'));
    }

    public function show(Article $article) {
        return view('article.show', compact('article'));
    }

    public function byCategory(Category $category) {
        
        $articles = $category->articles->where('is_accepted', true);
        return view('article.byCategory', compact('articles', 'category'));
    }

    public function undoLastAction(){
        $lastArticle = Article::orderBy('updated_at', 'desc')->first();
        $lastArticle->setAccepted(null);
        return redirect()->back()->with('message', __('messages.undoLastReview'), ['title' => $lastArticle->title]);
    }

    
}
