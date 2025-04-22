<x-layout>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 my-5">
                <h1 class="text-center titolo font1 mt-5">Login</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label font1 fs-3 fw-bold">Indirizzo Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label font1 fs-3 fw-bold">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="d-flex justify-content-between align-items-end mt-4">
                    <button type="submit" class="btn btn-custom1 font1 fs-4">Login</button>
                    <p class="font1 fs-5 m-0 fw-bold">Hai già un account?</p>
                    <a href="{{route('register')}}" class="btn btn-custom1 font1 fs-4">Registrati</a>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</x-layout>