<div class="col-12 col-md-3 m-5">
    <div class="card card-custom">
        <div class="card-body">
            <h5 class="card-title accento fs-2 mb-2 text-uppercase">{{$article->title}}</h5>
            <h6 class="card-subtitle mb-2 accento">Venditore: {{$article->user()->get()->first()->name}}</h6>
            <p class="card-text accento text-end my-4">{{$article->description}}</p>
            <h6 class="card-subtitle accento my-2 fs-5">Prezzo: {{$article->price}} €</h6>
            <a href="{{ route('byCategory', ['category' => $article->category]) }}"><h6 class="card-subtitle mb-2 accento">Categoria: {{$article->category->name }}</h6> </a>
            <a class="btn btn-custom mt-1" href="{{ route('article.show', compact('article')) }}">Articolo completo</a>   
        </div>
    </div>
</div>