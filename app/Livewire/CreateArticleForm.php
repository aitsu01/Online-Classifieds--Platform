<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;


class CreateArticleForm extends Component
{
    use WithFileUploads;
    #[Validate('required|min:3')]
    public $title;
    #[Validate('required|min:8')]
    public $description;
    #[Validate('required|numeric|min:1')]
    public $price;
    #[Validate('required')]

    public $category;
    public $categories;
    public $validatedData;

    public $article;
    public $image= [];
    public $temporary_images;
    

    public function mount(){

        $categories = Category::all();
        $this->categories = $categories;
        
    }

    protected function cleanForm(){
        $this->title = '';
        $this->description = '';
        $this->price = '';
        $this->category = '';
        $this->image = [];
        
        
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
        if (count($this->image) > 0) {
            foreach ($this->image as $image) {
                $this->article->images()->create([
                    'path' => $image->store('images', 'public')
                ]);
            }
            
        }
     

        
        session()->flash('success', 'Articolo creato con successo');
        $this->cleanForm();

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

    public function updatedTemporaryImages(){
        if ($this->validate(['temporary_images.*' => 'image|max:1024',
        'temporary_images'=>'max:6'])) {
            foreach ($this->temporary_images as $image) {
                $this->image[] = $image;
            }
            
        }
    }

    public function removeImage($key){
        if (in_array($key, array_keys($this->image))) {
            unset($this->image[$key]);
        }
        
    }



    public function render()
    {
        return view('livewire.create-article-form');
    }



    


}
