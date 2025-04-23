<x-layout :title="'Risultati per la ricerca'">
<div class="row mt-5 align-items-center">
        <div class="col-12">
            <h2 class="text-center mt-5 font1 fs-3 fw-bold titolo">Risultati per la ricerca {{$query}}</h2>
        </div>
    </div>
    
    <div class="row justify-content-evenly">
        @forelse ($articles as $article)
        <x-card :article="$article"/>
        @empty
        
        <h3 class="text-center">Nessun annuncio corrispondente alla tua ricerca</h3>
        
        @endforelse
    </div>

    <div class="row justify-content-center">
        <div class="col-auto">
            {{ $articles->links() }}
        </div>
    </div>
    
    
</x-layout>
