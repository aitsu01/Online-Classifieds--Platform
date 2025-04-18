<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ArticleController extends Controller implements HasMiddleware
{

    public static function middleware() {
        return [
            new Middleware('auth', only: ['create']),
        ];
    }
    public function create() {
        $categories = Category::all();
        return view('article.create', compact('categories'));
    }
    
}
