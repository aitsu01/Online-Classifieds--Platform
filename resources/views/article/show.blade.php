<x-layout>
    <div class="row mt-5">

        <div class="col-6 mt-5">
            
            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                
                <div class="carousel-inner">
                    
                    <div class="carousel-item active">

                        <img src="https://picsum.photos/1200/800" class="d-block w-100" alt="https://picsum.photos/200">

                    </div>

                    <div class="carousel-item">

                        <img src="https://picsum.photos/1200/801" class="d-block w-100" alt="https://picsum.photos/200">

                    </div>

                    <div class="carousel-item">

                        <img src="https://picsum.photos/1200/802" class="d-block w-100" alt="https://picsum.photos/200">

                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">

                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>

                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">

                    <span class="carousel-control-next-icon" aria-hidden="true"></span>

                    <span class="visually-hidden">Next</span>

                </button>
            </div>

        </div>

        <div class="col-4 mt-5">
            
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">{{$article->title}}</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <p>{{$article->description}}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <p>Prezzo: {{$article->price}}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <p>Categoria: {{$article->category->name}}</p>
                </div>
            </div>



            
        </div>
    
    

    {{-- <div class="row justify-content-center"> --}}
        
        
    {{-- </div> --}}
      
    
    
    <div class="row justify-content-center mt-3">

        <div class="col-1">

            

            

            

        </div>

    </div>  
</div>      
</x-layout>