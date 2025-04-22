<x-layout>
  
  <div class="row my-5">
    <div class="col-12 my-5">
      <h1 class="text-center titolo font1 mt-5">Registrati</h1>
    </div>
  </div>
  <div class="row justify-content-center mt-3">
    <div class="col-12 col-md-4">
      <form method="POST" action="{{route('register')}}">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label fs-3 fw-bold font1">Nome</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label fs-3 fw-bold font1">Indirizzo Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label fs-3 fw-bold font1">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
          <label for="password_confirmation" class="form-label fs-3 fw-bold font1">Conferma Password</label>
          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>
        <div class="d-flex justify-content-between align-items-end mt-4">
          <button type="submit" class="btn btn-custom1 fs-4 font1 fw-bold">Registrati</button>
          <p class="font1 fw-bold fs-5 m-0">Hai già un account?</p>
          <a href="{{route('login')}}" class="btn btn-custom1 fs-4 font1 fw-bold">Login</a>
        </div>
      </form>
    </div>
  </div>
  
</x-layout>