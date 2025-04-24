<x-layout>
    <div class="row my-5">
        <div class="col-12 mt-5 mt-lg-0">
            <h2 class="text-center mt-5 titolo font1 fw-bold">Diventa moderatore</h2>
        </div>
    </div>
    
    <div class="row justify-content-center my-5">
        <div class="col-12 col-md-6 mb-5">
            <form action="{{route('become.revisor')}}" method="GET">
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label font1 fs-3 fw-bold">Perchè desideri diventare moderatore</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Raccontaci perchè desideri diventare moderatore.."></textarea>
                </div>
                <button type="submit" class="btn btn-custom font1 fs-4 fw-bold">Invia</button>                
                
            </form>
        </div>
    </div>
</x-layout>