<x-layout>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h1 class="text-center mt-5">Registrati</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Indirizzo Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                      </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>