<x-layout>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h1 class="text-center mt-5">Login</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Indirizzo Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="{{route('register')}}" class="btn btn-primary">Registrati</a>
                  </form>
            </div>
        </div>
    </div>
</x-layout>