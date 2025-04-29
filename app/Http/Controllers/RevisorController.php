<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(){
        $article_to_check = Article::where('is_accepted', null)->first();

        return view('revisor.index', compact('article_to_check'));
    }

    public function accept(Article $article){
        $article->setAccepted(true);
        return redirect()->back()->with('message', "Hai accettato l'articolo $article->title");
    }

    public function reject(Article $article){
        $article->setAccepted(false);
        return redirect()->back()->with('message', "Hai rifiutato l'articolo $article->title");
    }

    public function becomeRevisorForm(){
        return view('revisor.form');
    }

    public function becomeRevisor(Request $request){
        $validated = $request->validate([
            'message' => 'required|max:255|min:10'
        ]);

        $userMessage = $validated['message'];

        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user(), $userMessage));

        $user = Auth::user();
        $user->is_revisor_request_sent = true;
        $user->save();
        return redirect()->route('homepage')->with('success', "La tua richiesta di diventare revisore è stata presa in carico!");
    }

    public function makeRevisor(User $user){
        Artisan::call('app:make-user-revisor', ['email' => $user->email]);
        return redirect()->route('homepage')->with('success', "L'utente {$user->name} diventa ora revisore");
    }
}
