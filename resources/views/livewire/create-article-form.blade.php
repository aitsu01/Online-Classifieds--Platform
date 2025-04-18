<div>
    <div class="row justify-content-around">

        <div class="col-12 col-md-6">

            <form wire:submit="save">

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error ('title') is-invalid @enderror" id="title" wire:model.live="title">
                @error('title')
                <div class=" text-danger">{{ $message }}</div>
                @enderror
            
            </div>
            

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control @error ('description') is-invalid @enderror" id="description" wire:model.live="description">
                @error('description')
                <div class=" text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control @error ('price') is-invalid @enderror" id="price" wire:model.live="price">
                @error('price')
                <div class=" text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <select class="form-control @error ('category') is-invalid @enderror" id="category" wire:model.live="category">
                    <option label disable>Seleziona una categoria</option>

                    @foreach ($this->categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach

                </select>
                @error('category')
                <div class=" text-danger">{{ $message }}</div>
                @enderror
            </div>
           


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="col-12 col-md-4">

            <div class="card"">
                <div class="card-body">

                  <h5 class="card-title">{{$this->title}}</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary"><strong>Venditore:</strong> {{auth()->user()->name}}</h6>
                  <p class="card-text">{{$this->description}}</p>
                  <h6 class="card-subtitle mb-2 text-body-secondary"><strong>Prezzo:</strong>${{$this->price}}</h6>
                  <h6 class="card-subtitle mb-2 text-body-secondary"><strong>Categoria: {{ optional ($this->categories->firstWhere('id', $this->category))->name }}</h6>
                  
                  
                  
                </div>
              </div>
        </div>

    </div>
</div>
