<div>
            <form>
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" wire:model="title">
            
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control" id="description" wire:model="description">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" wire:model="price">
            </div>

            <div>
                <select class="form-control" id="category" wire:model="category">
                    <option label disable>Seleziona una categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
</div>
