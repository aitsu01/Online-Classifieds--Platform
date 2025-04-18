<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller 
{
    public function index() {

        $articles=Article::orderBy('created_at', 'desc')->paginate('6');
        return view('welcome', compact('articles'));
    }
}
