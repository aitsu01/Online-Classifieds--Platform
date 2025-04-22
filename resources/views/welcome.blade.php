<x-layout>
    
    <div class="row mt-5">
        
        <div class="col-12 my-5">
            <h1 class="text-center secondario">Presto project</h1>
        </div>
    </div>
    @auth
    <div class="row justify-content-center">
        <div class="col-12 col-md-3 text-center">
            <a class="btn btn-custom1" href="{{route('article.create')}}">Pubblica un articolo</a>
        </div>
    </div>
    @endauth
    
    <div class="row my-5">
        <div class="col-12">
            <h2 class="text-center">Articoli aggiunti di recente</h2>
        </div>
    </div>
    
    <div class="row justify-content-evenly">
        @forelse ($articles as $article)
        <x-card :article="$article"/>
        @empty
        
        <h3 class="text-center">Non sono ancora presenti articoli</h3>
        
        @endforelse
    </div>
     
</x-layout>
