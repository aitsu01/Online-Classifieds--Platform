<div class="col-12 col-md-3 m-5">
    <div class="card card-custom pe-3">
        <div class="card-body d-flex flex-column align-items-start justify-content-between overflow-hidden">
            <h5 class="card-title accento fs-2 mb-2 text-uppercase"> <span class="cardTxt">{{$article->title}}</span></h5>
            <h6 class="card-subtitle mb-2 accento fs-5">Venditore: <span class="cardTxt">{{$article->user()->get()->first()->name}}</span></h6>
            <p class="card-text accento text-end my-4 fs-6 text-truncate"><span class="cardTxt">{{$article->description}}</span></p>
            <h6 class="card-subtitle accento my-2 fs-5">Prezzo: <span class="cardTxt font1">{{$article->price}}€</span></h6>
            <a href="{{ route('byCategory', ['category' => $article->category]) }}"><h6 class="card-subtitle mb-2 accento fs-5">Categoria: <span class="cardLink">{{$article->category->name }}</span> </h6> </a>
            <a class="btn btn-custom mt-1 fw-bold fs-6" href="{{ route('article.show', compact('article')) }}">Articolo completo</a>   
        </div>
    </div>
</div>