<div class="col-12 col-md-3 m-5">
    <div class="card card-custom">
        <div class="card-body">
            <h5 class="card-title accento fs-2 mb-2 text-uppercase"> <span class="cardTxt">{{$article->title}}</span></h5>
            <h6 class="card-subtitle mb-2 accento">Venditore: <span class="cardTxt">{{$article->user()->get()->first()->name}}</span></h6>
            <p class="card-text accento text-end my-4"><span class="cardTxt">{{$article->description}}</span></p>
            <h6 class="card-subtitle accento my-2 fs-5">Prezzo: <span class="cardTxt">{{$article->price}}€</span></h6>
            <a href="{{ route('byCategory', ['category' => $article->category]) }}"><h6 class="card-subtitle mb-2 accento">Categoria: <span class="cardLink">{{$article->category->name }}</span> </h6> </a>
            <a class="btn btn-custom mt-1" href="{{ route('article.show', compact('article')) }}">Articolo completo</a>   
        </div>
    </div>
</div>