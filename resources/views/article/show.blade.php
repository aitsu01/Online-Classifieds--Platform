<x-layout :title="$article->title">
    <div class="row mt-5">
        <div class="col-1 mt-5">
            <a href="{{ url()->previous() }}"><i class="bi bi-arrow-left fs-2 fw-bold"></i></a>
        </div>
    </div>
    
    
    <div class="row mb-5">
        <div class="col-12 mt-5">
            <h1 class="text-center titolo fs-1 font1 my-5">{{$article->title}}</h1>
        </div>
    </div>
    
    <div class="bordoTotale w-md-75 mb-5 ">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex flex-column align-items-start justify-content-evenly bordo w-md-100 h-md-100">
                <div>
                    <p class="fs-4 accento">{{__('ui.description')}}: <span class="cardTxt">{{$article->description}}</span></p>
                </div>
                <div>
                    <p class="fs-5 accento">{{__('ui.price')}}: <span class="cardTxt font1">{{$article->price}} €</span></p>
                    <p class="fs-5 accento">{{__('ui.seller')}}: <span class="cardTxt">{{$article->user()->get()->first()->name}}</span></p>
                    <a href="{{ route('byCategory', ['category' => $article->category]) }}"><p class="fs-5 accento">{{__('ui.category')}}: <span class="cardLink">{{__("ui." . $article->category->name)}}</span></p></a>
                </div>
                <div>
                    <p class="fs-5 accento">{{__('ui.publishedOn')}}: <span class="cardTxt font1">{{$article->created_at->format('d/m/Y')}}</span></p>
                </div>
            </div>
            
            <div class="col-12 col-md-6 bordo">
                @if ($article->images->isNotEmpty())
                <!-- Swiper -->
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        @foreach ($article->images as $key => $image)
                        <div class="swiper-slide">
                            <img src="{{Storage::url($image->path)}}" />
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next text-black titolo"></div>
                    <div class="swiper-button-prev text-black titolo"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($article->images as $key => $image)
                        <div class="swiper-slide">
                            <img src="{{Storage::url($image->path)}}?t={{ \Illuminate\Support\Facades\File::lastModified(storage_path('app/public/' . $image->path)) }}" alt="" />
                        </div>
                        @endforeach
                    </div>
                </div>     
                @else
                   <img src="/media/placeholder.jpg" alt="" class="img-fluid w-100 rounded shadow"> 
                @endif
            </div>
        </div>
    </div>  
    
</x-layout>