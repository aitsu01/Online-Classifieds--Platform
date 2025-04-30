<div>
    <!-- Modal SEMPRE presente -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore>               
        <div class="modal-dialog">                    
            <div class="modal-content bg-modal">                        
                <div class="modal-header d-flex justify-content-center">                            
                    <h1 class="modal-title fw-bold fs-6 text-center font1" id="exampleModalLabel">{{__('ui.congrats')}}</h1>                                                     
                </div>
                <div class="modal-body text-center">                            
                    <p class="fs-5 font1" id="successMessage"></p>
                    <p class="fs-6 font1" id="">{{__('ui.waitForRevisor')}}</p>
                </div>
            </div>
        </div>
    </div>

    


    <div class="row justify-content-around">
        <div class="col-md-6 col-10">
            <form wire:submit="save">
                <div class="mb-3">
                    
                    <label for="title" class="form-label fs-4 fw-bold font1">{{__('ui.title')}}*</label>
                    
                    <input type="text" class="form-control @error ('title') is-invalid @enderror" id="title" wire:model.live="title">
                    @error('title')
                    
                    <div class="text-danger">{{ $message }}</div>

                    @enderror
                    
                </div>

                <div class="mb-3">

                    <label for="img" class="form-label fs-4 fw-bold font1">{{__('ui.img')}}</label>

                    <input type="file" id="img" wire:model="temporary_images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img/">

                    @error('temporary_images.*')

                    <p class="fst-italic text-danger">{{ $message }}</p>

                    @enderror

                    @error('temporary_images')

                    <p class="fst-italic text-danger">{{ $message }}</p>

                    @enderror

                    @if (!empty($images))
                    
                        
                            
                            <div class="row d-flex align-items-center justify-content-evenly">
                                
                                @foreach ($images as $key => $image)
                                
                                <div class="col-md-2 col-5 position-relative p-0 mt-3">
                                <div class="img-preview shadow rounded w-100" style="background-image: url({{$image->temporaryUrl()}});"></div>
                                
                                <button type="button" class="previewBtn p-0 font1 fs-2" wire:click="removeImage({{$key}})">X</button>
                                </div>
                                @endforeach
                                
                            </div>
                       
                
                    @endif
                
                </div>

                    <div class="mb-3">
                        
                    <label for="description" class="form-label fs-4 fw-bold font1">{{__('ui.description')}}*</label>
                        
                        <input type="text" class="form-control @error ('description') is-invalid @enderror" id="description" wire:model.live="description">
                        
                        @error('description')
                        
                        <div class=" text-danger">{{ $message }}</div>
                        
                        @enderror
                    </div>

                    <div class="mb-3">

                        <label for="price" class="form-label fs-4 fw-bold font1 me-3">{{__('ui.price')}}*</label>
                        
                        <input type="number" step="any" class="form-control @error ('price') is-invalid @enderror font1" id="price" wire:model.live="price">
                        
                        @error('price')
                        
                        <div class=" text-danger">{{ $message }}</div>
                        
                        @enderror

                    </div>

                    <div class="mb-3">

                        <select class="form-control @error ('category') is-invalid @enderror font1" id="category" wire:model.live="category">

                            <option label disable class="fs-4 fw-bold font1">{{__('ui.selectCategory')}}*</option>
                            
                            @foreach ($this->categories as $category)
                                <option class="fs-5" value="{{$category->id}}">{{__('ui.'.$category->name)}}</option>
                            
                                @if (!$loop->last)
                                    <hr class="dropdown-divider">
                                @endif
                            
                            @endforeach
                            
                        </select>

                        @error('category')
                        
                        <div class=" text-danger">{{ $message }}</div>
                        
                        @enderror
                    
                    </div>

                    <button type="submit" class="btn btn-custom1 mt-4">{{__('ui.create')}}</button>
            </form>
 
            <p class="fs-5 mt-2">{{__('ui.requiredFields')}}</p>
        </div>

        <div class="col-md-5 col-8">
        <div class="row justify-content-center">
            <div class="col-12 text-center d-flex justify-content-center">
                <p class="form-label fs-4 fw-bold font1 me-3 text-center mt-2 w-100">{{__('ui.preview')}}</p>
            </div>
            <div class="col-12">
                <div class="card card-custom">
                
                    <div class="card-body d-flex flex-column align-items-start justify-content-between overflow-hidden">
                        
                        <h5 class="card-title text-uppercase fs-2 mb-2 accento">{{$this->title ? : 'Titolo'}}</h5>
                        
                        @if (!empty($images) && isset($images[0]))
                            <div class="w-100 d-flex justify-content-center align-items-center">
                            <img src="{{ $images[0]->temporaryUrl() }}" alt="Anteprima immagine" class="img-fluid img-custom rounded mb-3">
                            </div>
                        @else
                        <div class="w-100 d-flex justify-content-center align-items-center">
                            <img src="/media/placeholder.jpg" alt="placeholder Picture" class="img-custom mb-3">
                            </div>
                            
                        @endif

                        <h6 class="card-subtitle mb-2 accento"><strong>{{__('ui.seller')}}:</strong> <span class="cardTxt">{{auth()->user()->name}}</span></h6>
                        
                        <p class="card-text accento text-end fs-6 text-truncate"><span class="cardTxt">{{$this->description ? : 'Descrizione'}}</span></p>
                        
                        <h6 class="card-subtitle my-2 fs-5 accento font1"><strong>{{__('ui.price')}}:</strong><span class="cardTxt font1"> €{{$this->price}}</span></h6>
                        
                        <h6 class="card-subtitle mb-2 accento"><strong>{{__('ui.category')}}:<span class="cardLink"> {{ optional ($this->categories->firstWhere('id', $this->category))->name }} </span></h6>
                            
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

</div>
        