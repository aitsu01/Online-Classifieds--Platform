<x-layout>
    <div class="row v70 align-items-center">
        <div class="col-12 mt-5">
            <h2 class="text-center my-5 titolo font1">Tutti gli articoli</h2>
        </div>
    </div>
    
    <div class="row justify-content-evenly">
        @forelse ($articles as $article)
        <x-card :article="$article"/>
        @empty
        
        <h3 class="text-center">Non sono ancora presenti articoli</h3>
        
        @endforelse
    </div>
    
    <div class="row justify-content-center">
        <div class="col-1">
            {{ $articles->links() }}
        </div>
    </div>
</x-layout>