
<x-layout>
<div class="row my-5">
        <div class="col-12">
            <h2 class="text-center my-5">Annunci della categoria {{$category->name}}</h2>
        </div>
    </div>
    
    <div class="row justify-content-evenly">
        @forelse ($articles as $article)
        <x-card :article="$article"/>
        @empty
        
        <h3 class="text-center">Non sono ancora presenti annunci</h3>
        
        @endforelse
    </div>
    
    
</x-layout>