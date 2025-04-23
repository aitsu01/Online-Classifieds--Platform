<x-layout :title="'Login'">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 my-5">
                <h1 class="text-center titolo font1 mt-5">Login</h1>
            </div>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col-12 col-md-6 mb-5">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label font1 fs-3 fw-bold">Indirizzo Email</label>
                      <input type="email" class="form-control @error ('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                      @error('email')
                      <div class="text-danger">
                        {{$message}}
                      </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label font1 fs-3 fw-bold">Password</label>
                      <input type="password" class="form-control @error ('password') is-invalid @enderror" id="password" name="password">
                      @error('password')
                      <div class="text-danger">
                        {{$message}}
                      </div>
                      @enderror
                    </div>
                    <div class="d-flex justify-content-between align-items-end my-4">
                    <button type="submit" class="btn btn-custom font1 fs-4 fw-bold">Login</button>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                    <p class="font1 fs-md-5 fs-6 m-0 fw-bold">Hai già un account?</p>
                    <a href="{{route('register')}}" class="btn btn-custom font1 fs-4 fw-bold">Registrati</a>
                </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</x-layout>