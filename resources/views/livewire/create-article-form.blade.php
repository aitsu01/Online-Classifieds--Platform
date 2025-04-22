<div>
    
    <div class="row justify-content-around">
        
        <div class="col-12 col-md-4">
            
            <form wire:submit="save">
                
                <div class="mb-3">
                    <label for="title" class="form-label font1 fs-4 fw-bold">Titolo</label>
                    <input type="text" class="form-control @error ('title') is-invalid @enderror" id="title" wire:model.live="title">
                    @error('title')
                    <div class=" text-danger">{{ $message }}</div>
                    @enderror
                    
                </div>
                
                
                <div class="mb-3">
                    <label for="description" class="form-label font1 fs-4 fw-bold">Descrizione</label>
                    <input type="text" class="form-control @error ('description') is-invalid @enderror" id="description" wire:model.live="description">
                    @error('description')
                    <div class=" text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                
                <div class="mb-3">
                    <label for="price" class="form-label font1 fs-4 fw-bold">Prezzo</label>
                    <input type="number" class="form-control @error ('price') is-invalid @enderror" id="price" wire:model.live="price">
                    @error('price')
                    <div class=" text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div>
                    <select class="form-control font1 fs-4 fw-bold mt-4 @error ('category') is-invalid @enderror" id="category" wire:model.live="category">
                        <option label disable>Seleziona una categoria</option>
                        
                        @foreach ($this->categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                        
                    </select>
                    @error('category')
                    <div class=" text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                
                <!-- Trigger modal -->
                <button type="submit" class="btn btn-custom1 mt-4 font1 fs-5 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Crea articolo
                </button>   
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-modal">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel">{{$this->title}}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="fs-5">Congratulazioni!!!</p>
                                <p class="fs-6">Hai caricato il tuo articolo correttamente</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
        
        <div class="col-12 col-md-3">
            
            <div class="card card-custom">
                <div class="card-body">
                    
                    <h5 class="card-title accento text-uppercase fs-2 mb-2">{{$this->title}}</h5>
                    <h6 class="card-subtitle mb-2 accento"><strong>Venditore:</strong> {{auth()->user()->name}}</h6>
                    <p class="card-text accento text-end my-4">{{$this->description}}</p>
                    <h6 class="card-subtitle my-2 fs-5 accento"><strong>Prezzo:</strong>{{$this->price}} €</h6>
                    <h6 class="card-subtitle mb-2 accento"><strong>Categoria: {{ optional ($this->categories->firstWhere('id', $this->category))->name }}</h6>
                        
                        
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    