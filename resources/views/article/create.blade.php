
<x-layout :title="'Crea un nuovo annuncio'">
    <div class="row mt-5">
        <div class="col-1 mt-5">
            <a href="{{route('homepage')}}"><i class="bi bi-arrow-left fs-2 fw-bold"></i></a>
        </div>
      </div>
    
        <div class="row mt-5">
            <div class="col-12">
                <h1 class="text-center titolo font1 my-5">Crea un nuovo annuncio</h1>
            </div>
        </div>
                <livewire:create-article-form/>
   
</x-layout>

               
