<x-layout :title="'Registrati'">
  <div class="row mt-5">
    <div class="col-1 mt-5">
        <a href="{{route('homepage')}}"><i class="bi bi-arrow-left fs-2 fw-bold"></i></a>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12 my-5">
      <h1 class="text-center titolo font1 mt-5">{{__('ui.signUp')}}</h1>
    </div>
  </div>
  <div class="row justify-content-center my-5">
    <div class="col-12 col-md-5">
      <form method="POST" action="{{route('register')}}">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label fs-3 fw-bold font1">{{__('ui.name')}}</label>
          <input type="text" class="form-control @error ('name') is-invalid @enderror" id="name" name="name">
          @error('name')
            <div class="text-danger">
              {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label fs-3 fw-bold font1">Email</label>
          <input type="email" class="form-control @error ('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          @error('email')
                      <div class="text-danger">
                        {{$message}}
                      </div>
                      @enderror
        </div>
        <div class="mb-3">
          <label for="password" class="form-label fs-3 fw-bold font1">Password</label>
          <input type="password" class="form-control @error ('password') is-invalid @enderror" id="password" name="password">
          @error('password')
                      <div class="text-danger">
                        {{$message}}
                      </div>
                      @enderror
        </div>
        <div class="mb-3">
          <label for="password_confirmation" class="form-label fs-3 fw-bold font1">{{__('ui.repeat')}} Password</label>
          <input type="password" class="form-control @error ('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation">
          @error('password_confirmation')
                      <div class="text-danger">
                        {{$message}}
                      </div>
                      @enderror
        </div>
        <div class="d-flex justify-content-between align-items-end my-4">
          <button type="submit" class="btn btn-custom fs-4 font1 fw-bold">{{__('ui.signUp')}}</button>
          <div class="d-flex flex-column align-items-center justify-content-center">
          <p class="font1 text-center fw-bold fs-md-5 fs-6 m-0">{{__('ui.alreadyAccount')}}</p>
          <a href="{{route('login')}}" class="btn btn-custom fs-4 font1 fw-bold">{{__('ui.signIn')}}</a>
          </div>
        </div>
      </form>
    </div>
  </div>
  
</x-layout>