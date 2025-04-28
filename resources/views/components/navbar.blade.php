
<nav class="row justify-content-between fixed-top bgNavbar">
  
  <div class="col-2 d-flex justify-content-center align-items-center mx-3">
    <a class="@if(Route::current()->getName() == 'homepage') activeNavBrand text-decoration-none @else navbar-brand @endif mx-auto my-2 m-lg-0" href="{{ route('homepage') }}"></a>
  </div>

  <div class="col-md-4 col-5 dropdown d-flex align-items-center justify-content-evenly">

    <div class="searchBox d-flex align-items-center justify-content-evenly">

    <a class="nav-link dropdown-toggle categoryBtn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('ui.categories')}}</a>

    {{-- form di ricerca --}}
    <form class="d-flex searchForm p-0 m-0" role="search" action="{{ route('article.search') }}" method="GET">
      <input class="form-control searchControl m-0 h-100 d-none d-md-block" id="searchBar" name="query" type="search" placeholder="{{__('ui.search')}}" aria-label="Search">
      <button class="btnSearch d-none d-md-block" type="submit">
        <i class="bi bi-search h-100 p-0 me-2"></i>
      </button>
    </form>
    
    {{-- BOTTONE VISIBILE SOLO SU MOBILE PER LA RICERCA --}}
    <button class="btnSearch d-md-none searchToggleBtn" id="searchToggleBtn">
      <i class="bi bi-search accento"></i>
    </button>
    

    {{-- dropdown filtro categorie --}}
    <ul class="dropdown-menu">
      @foreach ($categories as $category)
        <li>
          <a class="dropdown-item text-capitalize fs-6" href="{{ route('byCategory', ['category' => $category]) }}">{{ __("ui.$category->name") }}</a>
        </li>

        @if (!$loop->last)

          <hr class="dropdown-divider">

        @endif
      @endforeach
    </ul>

  </div>

    
  </div>


  <div class="col-md-4 col-2 d-flex flex-column justify-content-center align-items-end mx-4 pe-3">

    {{-- HAMBURGER PER MOBILE --}}
  <div class="position-relative">
    <button class="btnSearch menu-toggle accento" id="menu-toggle">☰</button>

    <ul class="menu" id="menu">
        
      @guest
      
        <li class="nav-item dropdown mx-4 py-1">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('ui.guest')}}</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item fs-6" href="{{ route('login') }}">{{__('ui.signIn')}}</a></li>
            <li><a class="dropdown-item fs-6" href="{{ route('register') }}">{{__('ui.signUp')}}</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <x-_locale lang='it'/>
              <x-_locale lang='en'/>
              <x-_locale lang='es'/>
            </li>
          </ul>
          
        </li>

      @endguest

      @auth
        <li class="nav-item dropdown mx-4 py-1">
          <a class="nav-link dropdown-toggle  active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
          
          <ul class="dropdown-menu">
            <li><a class="dropdown-item fs-6" href="{{ route('article.create') }}">{{__('ui.adPublish')}}</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item fs-6" href="#" onclick="event.preventDefault(); document.querySelector('#logout').submit();">{{__('ui.logout')}}</a></li>
            
            @if (Auth::user()->is_revisor)
              <li class="position-relative"><a class="dropdown-item fs-6" href="{{ route('revisor.index') }}">{{__('ui.revisorDashboard')}}<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill">{{\App\Models\Article::toBeRevisedCount()}}</span></a></li>
            @endif
          
            <form action="{{ route('logout') }}" method="POST" id="logout" class="d-none">@csrf</form>
            
            <li><hr class="dropdown-divider"></li>
            <li>
              <x-_locale lang='it'/>
              <x-_locale lang='en'/>
              <x-_locale lang='es'/>
            </li>

          </ul>
        </li>
        @endauth


      <li class="nav-item mx-4 py-1">
        <a class="nav-link @if(Route::current()->getName() == 'article.index') active @endif" href="{{ route('article.index') }}">{{__('ui.allAds')}}</a>
      </li>

    </ul>
  </div>
      
  </div>
  
</nav>
 