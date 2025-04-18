<x-layout>

    @if(session('success'))
        {{-- <div class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">COngratulazioni!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="modal-body">
                        <p>{{session('success')}}</p>
                    
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                    
                </div>
        </div>
    </div> --}}
        
            <div class="alert alert-success mt-5">
                {{ session('success') }}
            </div>
        
      @endif
      
        <div class="row mt-5">

            <div class="col-12 my-5">
                <h1 class="text-center secondario">Presto project</h1>
            </div>
        </div>
        @auth
        <div class="row justify-content-center">
            <div class="col-12 col-md-1">
                <a class="btn btn-primary" href="{{route('article.create')}}">Pubblica un articolo</a>
            </div>
        </div>
        @endauth

        

</x-layout>
