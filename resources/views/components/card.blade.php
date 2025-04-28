<div class="col-12 col-lg-3 col-md-5 m-lg-5 mx-0 my-2 p-1">
    <div class="card card-custom">
        <div class="card-body d-flex flex-column align-items-start justify-content-evenly overflow-hidden">
            <h5 class="card-title accento fs-3 my-1 text-uppercase"> <span class="cardTxt text-truncate">{{$article->title}}</span></h5>
            <div class="w-100 d-flex justify-content-center align-items-center">
            <img src="{{$article->images->isNotEmpty() ? Storage::url($article->images->first()->path) : '/media/placeholder.jpg'}}" alt="" class="img-custom mb-2">
            </div>
            <h6 class="card-subtitle mt-1 accento fs-5">{{__('ui.seller')}}: <span class="cardTxt">{{$article->user()->get()->first()->name}}</span></h6>
            <p class="card-text accento text-end mt-2 fs-6 text-truncate"><span class="cardTxt">{{$article->description}}</span></p>
            <h6 class="card-subtitle accento mt-2 fs-5">{{__('ui.price')}}: <span class="cardTxt font1">{{$article->price}}€</span></h6>
            <a href="{{ route('byCategory', ['category' => $article->category]) }}"><h6 class="card-subtitle mt-2 accento fs-5">{{__('ui.category')}}: <span class="cardLink">{{__("ui." . $article->category->name)}}</span> </h6> </a>
            <h6 class="card-subtitle accento mt-2 fs-5">{{__('ui.publishedOn')}}: <span class="cardTxt font1">{{$article->created_at->format('d/m/Y')}}</span></h6>
            <a class="btn-custom p-1 my-2 fw-bold fs-6" href="{{ route('article.show', compact('article')) }}">{{__('ui.adDetails')}}</a>   
        </div>
    </div>
</div>