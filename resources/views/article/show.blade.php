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
                    <p class="fs-4 accento">Descrizione: <span class="cardTxt">{{$article->description}}</span></p>
                </div>
                <div>
                    <p class="fs-5 accento">Prezzo: <span class="cardTxt font1">{{$article->price}} €</span></p>
                    <p class="fs-5 accento">Venditore: <span class="cardTxt">{{$article->user()->get()->first()->name}}</span></p>
                    <a href="{{ route('byCategory', ['category' => $article->category]) }}"><p class="fs-5 accento">Categoria: <span class="cardLink">{{$article->category->name}}</span></p></a>
                </div>
                <div>
                    <p class="fs-5 accento">Pubblicato il: <span class="cardTxt font1">{{$article->created_at->format('d/m/Y')}}</span></p>
                </div>
            </div>
            
            <div class="col-12 col-md-6 bordo">
                <!-- Swiper -->
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 rounded">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  

</x-layout>