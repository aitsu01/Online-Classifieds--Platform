<x-layout>
    <div class="row mt-5">
        <div class="col-1 mt-5">
            <a href="{{route('homepage')}}"><i class="bi bi-arrow-left fw-bold fs-2"></i></a>
        </div>
      </div>

      @if (Auth::user()->is_revisor_request_sent)
      <div class="row my-5">
        <div class="col-12 mt-5 mt-lg-0">
            <h2 class="text-center mt-5 titolo font1 fw-bold fs-2">La tua richiesta è già stata inviata</h2>
            <h3 class="text-center mt-5 font1 fw-bold fs-3">Attendi che un ADMIN la esamini.</h3>
        </div>
      </div>
      @else
    
    <div class="row my-5">
        <div class="col-12 mt-5 mt-lg-0">
            <h2 class="text-center mt-5 titolo font1 fw-bold">Diventa moderatore</h2>
        </div>
    </div>
    
    <div class="row justify-content-center my-5">
        <div class="col-12 col-md-6 mb-5">
            <form action="{{route('become.revisor')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label font1 fs-3 fw-bold">Perchè desideri diventare moderatore?</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control @error ('message') is-invalid @enderror" placeholder="Raccontaci perchè desideri diventare moderatore.."></textarea>
                    @error('message')
                    <div class="text-danger">
                      {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-custom font1 fs-4 fw-bold">Invia</button>                
                
            </form>
        </div>
    </div>
    @endif
</x-layout>