
<x-layout :title="$category->name">
<div class="row mt-5 align-items-center">
        <div class="col-12">
            <h2 class="text-center mt-5 font1 fs-3 fw-bold titolo">Annunci della categoria {{$category->name}}</h2>
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