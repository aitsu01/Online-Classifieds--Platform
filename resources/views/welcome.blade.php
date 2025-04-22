<x-layout>
    
    <div class="row align-items-center v70">
        
        <div class="col-12 my-5">
            <h1 class="text-center secondario font1 titolo">Presto</h1>
        </div>
    </div>
    
    
    <div class="row mt-5 justify-content-evenly">
        <div class="col-6">
            <h2 class="text-center font1 fs-2 fw-bold">Articoli aggiunti di recente</h2>
        </div>

        <div class="col-6 col-md-3 text-center">
            <a class="btn btn-custom" href="{{route('article.create')}}">Pubblica un articolo</a>
        </div>
    </div>


    
    {{-- @auth
    <div class="row justify-content-center">
        <div class="col-12 col-md-3 text-center">
            <a class="btn btn-custom" href="{{route('article.create')}}">Pubblica un articolo</a>
        </div>
    </div>
    @endauth --}}

    <div class="row justify-content-evenly">
        @forelse ($articles as $article)
        <x-card :article="$article"/>
        @empty
        
        <h3 class="text-center">Non sono ancora presenti articoli</h3>
        
        @endforelse
    </div>
     
</x-layout>
