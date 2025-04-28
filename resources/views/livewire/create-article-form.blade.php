<div>
    
    
    <div class="row justify-content-around">
        
        <div class="col-12 col-md-4">
            
            <form wire:submit="save">
                
                <div class="mb-3">
                    <label for="title" class="form-label fs-4 fw-bold font1">Titolo</label>
                    <input type="text" class="form-control @error ('title') is-invalid @enderror" id="title" wire:model.live="title">
                    @error('title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    
                </div>
                
                <div class="mb-3">
                    <input type="file" wire:model.live="temporary_images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img/" >
                    @error('temporary_images.*')
                    <p class="fst-italic text-danger">{{ $message }}</p>
                    @enderror
                    @error('temporary_images')
                    <p class="fst-italic text-danger">{{ $message }}</p>
                    @enderror
                </div>
                @if (!empty($images))
                <div class="row">
                    <div class="col-12">
                        <p> foto preview: </p>
                        <div class="row border border-4 border-success rounded shadow py-4">
                            @foreach ($images as $key => $image)
                            <div class="col-4 d-flex flex-column align-items-center my-3">
                                <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}});"></div>
                            </div>
                            <button type="button" class="btn mt-1 btn-danger" wire:click="removeImage({{$key}})">Rimuovi</button>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
                
                
                
                
                
                <div class="mb-3">
                    <label for="description" class="form-label fs-4 fw-bold font1">Descrizione</label>
                    <input type="text" class="form-control @error ('description') is-invalid @enderror" id="description" wire:model.live="description">
                    @error('description')
                    <div class=" text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                
                <div class="mb-3">
                    <label for="price" class="form-label fs-4 fw-bold font1 me-3">Prezzo</label>
                    <input type="number" step="any" class="form-control @error ('price') is-invalid @enderror font1" id="price" wire:model.live="price">
                    @error('price')
                    <div class=" text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div>
                    <select class="form-control @error ('category') is-invalid @enderror font1" id="category" wire:model.live="category">
                        <option label disable class="fs-4 fw-bold font1">Seleziona una categoria</option>
                        
                        @foreach ($this->categories as $category)
                        <option class="fs-5" value="{{$category->id}}">{{$category->name}}</option>
                        
                        @if (!$loop->last)
                        <hr class="dropdown-divider">
                        @endif
                        
                        @endforeach
                        
                    </select>
                    @error('category')
                    <div class=" text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                
                <!-- Trigger modal -->
                
                <button type="submit" class="btn btn-custom1 mt-4"  data-bs-toggle="modal" data-bs-target="#exampleModal" >
                    Crea annuncio
                </button>
                
                
                <!-- Modal -->
                
                {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">               
                    <div class="modal-dialog">                    
                        <div class="modal-content bg-modal">                        
                            <div class="modal-header">                            
                                <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel">{{$this->title}}</h1>                                
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>                                
                            </div>
                            <div class="modal-body text-center">                            
                                <p class="fs-3">Congratulazioni!!!</p>
                                <p class="fs-4">Articolo creato con successo</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                
                
                
                
                
            </form>
        </div>
        
        <div class="col-12 col-md-3">
            
            <p class="form-label fs-4 fw-bold font1 me-3 text-center mt-2">Anteprima</p>
            <div class="card card-custom pe-3">
                
                <div class="card-body d-flex flex-column align-items-start justify-content-between overflow-hidden">
                    
                    <h5 class="card-title text-uppercase fs-2 mb-2 accento">{{$this->title}}</h5>
                    <h6 class="card-subtitle mb-2 accento"><strong>Venditore:</strong> <span class="cardTxt">{{auth()->user()->name}}</span></h6>
                    <p class="card-text accento text-end my-4 fs-6 text-truncate"><span class="cardTxt">{{$this->description}}</span></p>
                    <h6 class="card-subtitle my-2 fs-5 accento font1"><strong>Prezzo:</strong><span class="cardTxt font1">{{$this->price}}€</span></h6>
                    <h6 class="card-subtitle mb-2 accento"><strong>Categoria:<span class="cardLink"> {{ optional ($this->categories->firstWhere('id', $this->category))->name }} </span></h6>
                        
                    </div>
                </div>
                
            </div>
        </div>
        