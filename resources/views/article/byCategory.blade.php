
<x-layout :title="$category->name">
    <div class="row mt-5">
        <div class="col-1 mt-5">
            <a href="{{route('article.index')}}"><i class="bi bi-arrow-left fs-2 fw-bold"></i></a>
        </div>
      </div>
<div class="row mt-5 align-items-center">
        <div class="col-12">
            <h2 class="text-center mt-5 font1 fs-3 fw-bold titolo">{{__('ui.adsByCategory')}} {{__("ui.$category->name")}}</h2>
        </div>
    </div>
    
    <div class="row justify-content-evenly">
        @forelse ($articles as $article)
        <x-card :article="$article"/>
        @empty
        
        <h3 class="text-center">{{__('ui.noResults')}}</h3>
        
        @endforelse
    </div>
    
    
</x-layout>