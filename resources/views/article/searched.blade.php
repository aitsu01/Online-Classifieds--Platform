<x-layout :title="'Risultati per la ricerca'">
    <div class="row mt-5">
        <div class="col-1 mt-5">
            <a href="{{route('homepage')}}"><i class="bi bi-arrow-left fs-2 fw-bold"></i></a>
        </div>
      </div>
<div class="row mt-5 align-items-center">
        <div class="col-12 mt-5">
            <h2 class="text-center mt-5 font1 fw-bold titolo">{{__('ui.searchResults')}} {{$query}}</h2>
        </div>
    </div>
    
    <div class="row justify-content-evenly">
        @forelse ($articles as $article)
        <x-card :article="$article"/>
        @empty
        
        <h3 class="text-center">{{__("ui.noResults")}}</h3>
        
        @endforelse
    </div>

    <div class="row justify-content-center">
        <div class="col-auto">
            {{ $articles->links() }}
        </div>
    </div>
    
    
</x-layout>
