<x-layout>
    <div class="row mt-5">
        <div class="col-12">
            <h1 class="text-center mt-5">Dettagli dell'articolo {{$article->title}}</h1>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-12 col-md-4">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://picsum.photos/200" class="carosello d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/201" class="carosello d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/202" class="carosello d-block" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
    </div>
    </div>
    
    
    <div class="row justify-content-center mt-3">
        <div class="col-1">
            <p>{{$article->description}}</p>
            <p>Prezzo: {{$article->price}}</p>
            <p>Categoria: {{$article->category->name}}</p>
        </div>
    </div>        
</x-layout>