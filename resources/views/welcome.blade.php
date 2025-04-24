<x-layout :title="'Presto'">
    
    @if (session()->has('errorMessage'))
    <div class="alert alert-danger text-center shadow rounded mt-5">
        {{session('errorMessage')}}
    </div>
    @endif
    
    
    @if (session('success'))
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">               
        <div class="modal-dialog">                    
            <div class="modal-content bg-modal">                        
                <div class="modal-header d-flex justify-content-center">                            
                    <h1 class="modal-title fw-bold fs-6 text-center font1" id="exampleModalLabel">Congratulazioni!<h1>                                                       
                </div>
                <div class="modal-body text-center">                            
                    <p class="fs-5 font1">Annuncio creato con successo</p>
                </div>
            </div>
        </div>
    </div>
    @endif
    
    <div class="row align-items-center v70">

        @if (session()->has('message'))
        <div class="alert alert-success text-center shadow rounded mt-5">
            {{session('message')}}
        </div>
        @endif
        
        <div class="col-12 my-5">
            <h1 class="text-center secondario font1 titolo">Presto</h1>
        </div>
    </div>
    
    
    <div class="row mt-5 justify-content-evenly">
        <div class="col-6">
            <h2 class="text-center font1 fs-2 fw-bold">Ultimi annunci</h2>
        </div>
        
        <div class="col-6 col-md-3 text-center d-flex align-items-center">
            <a class="btn btn-custom" href="{{route('article.create')}}">Pubblica un annuncio</a>
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
