<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateArticleForm extends Component
{
    #[Validate('required|min:3')]
    public $title;
    #[Validate('required|min:8')]
    public $description;
    #[Validate('required|numeric|min:1')]
    public $price;
    #[Validate('required')]
    public $category;
    public $categories;

    public $article;

    public function mount(){

        $categories = Category::all();
        $this->categories = $categories;
        
    }

    

    public function save(){
        
        $this->validate();
        $this->article = Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,

            'user_id' => Auth::id()
        ]);

        $this->reset();

        sleep(2);
        return redirect()->route('homepage', $this->article);

    }


    public function messages(){
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve avere almeno 3 caratteri',
            'description.required' => 'La descrizione è obbligatoria',
            'description.min' => 'La descrizione deve avere almeno 8 caratteri',
            'category.required' => 'La categoria è obbligatoria',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.min' => 'Il prezzo deve essere almeno 1'
        ];
    }

    public function render()
    {
        return view('livewire.create-article-form');
    }
}
