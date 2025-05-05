<x-layout>
    
    <div class="row mt-5">
        <div class="col-1 mt-5">
            <a href="{{route('homepage')}}"><i class="bi bi-arrow-left fs-2 fw-bold"></i></a>
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-12 mt-5">
            <h2 class="text-center my-5 titolo font1 fs-1 fw-bold">{{__('ui.revisorDashboard')}}</h2>
        </div>
        <div class="col-12">
            <form action="{{route('undo')}}" method="POST">
                @csrf
                <button class="btn btn-outline-danger py-2 px-5 fw-bold mb-4">{{__('ui.undoRevision')}}</button>
            </form>
        </div>
    </div>
    
    @if (session()->has('message'))
    <div class="row justify-content-center align-items-center">
        <div class="col-4 text-center shadow rounded alert alert-success fs-5 font1">
            {{session('message')}}
        </div>
    </div>
    @endif
    
    @if ($article_to_check)
    <div class="row justify-content-evenly pt-5">
        <div class="col-md-8">
            <div class="row justify-content-center">
                @if($article_to_check->images->isNotEmpty())
                @foreach ($article_to_check->images as $key => $image)
                <div class="bord rounded shadow mb-4 d-flex p-2">
                    <div class="col-4 col-md-3 mb-4 mx-2 p-0">
                        <img src="{{$image->getUrl(300,300)}}" class="img-fluid w-75 rounded shadow" alt="Immagine {{$key + 1}} dell'articolo {{$article_to_check->title}}">
                    </div>
                    <div class="col-md-5 ps-3">
                        <div class="card-body">
                            <h5>Labels</h5>
                            @if ($image->labels)
                            @foreach ($image->labels as $label)
                            #{{$label}},
                            @endforeach
                            @else
                            <p class="fst-italic">No Lables</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3 ps-3">
                        <div class="card-body">
                            <h5>Ratings</h5>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <div class="text-center mx-auto {{$image->adult}}">
                                    </div>
                                </div>
                                <div class="col-10">Adult</div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <div class="text-center mx-auto {{$image->violence}}">
                                    </div>
                                </div>
                                <div class="col-10">Violence</div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <div class="text-center mx-auto {{$image->spoof}}">
                                    </div>
                                </div>
                                <div class="col-10">Spoof</div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <div class="text-center mx-auto {{$image->racy}}">
                                    </div>
                                </div>
                                <div class="col-10">Racy</div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <div class="text-center mx-auto {{$image->medical}}">
                                    </div>
                                </div>
                                <div class="col-10">Medical</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <img src="/media/placeholder.jpg" alt="" class="img-fluid w-50 rounded shadow">
                @endif
            </div>
        </div>
        <div class="col-md-3 col-8 p-0 d-flex flex-column justify-content-between">
            <div>
                <h2 class="fs-5"><span class="form-label fs-4">{{__('ui.title')}}</span> {{$article_to_check->title}}</h2>
                <h3 class="fs-5"> <span class="form-label fs-4">{{__('ui.seller')}}:</span> {{$article_to_check->user->name}}</h3>
                <h4 class="fs-5"> <span class="form-label fs-4">{{__('ui.price')}}:</span> €<span class="font1">{{$article_to_check->price}}</span></h4>
                <h4 class="fs-5"><span class="form-label fs-4">{{__('ui.category')}}:</span> {{__('ui.'.$article_to_check->category->name)}}</h4>
                <p class="fs-5"><span class="form-label fs-4">{{__('ui.description')}}</span> {{$article_to_check->description}}</p>
            </div>
            
            <div class="d-flex pb-4 justify-content-around">
                <form action="{{route('reject', ['article' => $article_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-danger py-2 px-5 fw-bold">{{__('ui.reject')}}</button>
                </form>
                <form action="{{route('accept', ['article' => $article_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-success py-2 px-5 fw-bold">{{__('ui.accept')}}</button>
                </form>
            </div>
        </div>
    </div>
    @else
    <div class="row justify-content-center align-items-center height-custom text">
        <div class="col-12 mx-auto">
            <h1 class="font1 fw-bold fs-1 text-center">{{__('ui.noAdsToRevise')}}</h1>
        </div>
    </div>
    @endif
</div>
</x-layout>












