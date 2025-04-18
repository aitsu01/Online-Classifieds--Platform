<div class="col-12 col-md-3 m-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$article->title}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Venditore: {{$article->user()->get()->first()->name}}</h6>
            <p class="card-text">{{$article->description}}</p>
            <h6 class="card-subtitle mb-2 text-body-secondary">Prezzo: {{$article->price}} €</h6>
            <h6 class="card-subtitle mb-2 text-body-secondary">Categoria: {{$article->category->name }}</h6> 
            <a class="btn btn-primary" href="{{ route('article.show', compact('article')) }}">Articolo completo</a>   
        </div>
    </div>
</div>