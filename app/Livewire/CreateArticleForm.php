<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Spatie\Image\Enums\Unit;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;




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

    public $images= [];
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
        $this->images = [];
        
        
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
        
        if (count($this->images) > 0) {
            foreach ($this->images as $image) {
                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create(['path'=> $image->store($newFileName, 'public')]);
                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 300, 300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);

            }
            File::deleteDirectory(storage_path('app/livewire-tmp'));
            
        }
     

        
        $this->dispatch('article-created', __('messages.uploadedAd', ['title' => $this->title]));
        $this->cleanForm();

    }


    public function messages(){
        return [
            'title.required' => __('validation.titleRequired' , ['min' => 3]),
            'title.min' => __('validation.titleMin'),
            'description.required' => __('validation.descriptionRequired' , ['min' => 8]),
            'description.min' => __('validation.descriptionMin'),
            'category.required' => __('validation.categoryRequired'),
            'price.required' => __('validation.priceRequired'),
            'price.min' => __('validation.priceMin', ['min' => 1])
        ];
    }

    public function updatedTemporaryImages(){
        if ($this->validate(['temporary_images.*' => 'image|max:4096',
        'temporary_images'=>'max:6'])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
            
        }
    }

    public function removeImage($key){
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
        
    }



    public function render()
    {
        return view('livewire.create-article-form');
    }



    


}
