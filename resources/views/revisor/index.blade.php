<x-layout>

<div class="row my-5">
        <div class="col-12">
            <h2 class="text-center mt-5 titolo font1 fw-bold">Dashboard del moderatore</h2>
        </div>
    </div>
    @if ($article_to_check)
        <div class="row justify-content-center pt-5">
            <div class="col-md-8">
                <div class="row justify-content-center">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-6 col-md-4 mb-4 text-center">
                            <img src="https://picsum.photos/300" class="img-fluid rounded shadow" alt="immagine segnaposto">
                        </div>
                    @endfor
                </div>
                </div>
                <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
                    <div>
                        <h1>{{$article_to_check->title}}</h1>
                        <h3>Autore: {{$article_to_check->user->name}}</h3>
                        <h4>{{$article_to_check->price}}</h4>
                        <h4 class="fst-italic text-muted">#{{$article_to_check->category->name}}</h4>
                        <p class="h6">{{$article_to_check->description}}</p>
                    </div>

                    <div class="d-flex pb-4 justify-content-around">
                        <form action="" method="POST">
                            @csrf
                            <button class="btn btn-danger py-2 px-5 fw-bold">Rifiuta</button>
                        </form>
                        

                    </div>


               
            


</x-layout>