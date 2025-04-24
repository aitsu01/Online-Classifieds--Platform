<nav class="navbar navbar-expand-lg bg-navbar fixed-top" data-bs-theme="dark">
    
  <div class="container-fluid">
      
    <a class=" @if(Route::current()->getName() == 'homepage') activeNavBrand text-decoration-none @else navbar-brand @endif p-0 mx-auto my-2 m-lg-0" href="{{ route('homepage') }}"></a>
      
      
        <ul class="navbar-nav mb-lg-0 w-100 h-100 d-flex flex-md-row flex-column justify-content-around align-items-center">
          
          <li class="nav-item dropdown d-flex searchBox">
            
            {{-- filtro per categorie  --}}
            <a class="nav-link dropdown-toggle navBtn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie</a>

            {{-- form di ricerca --}}
            <form class="d-flex" role="search" action="{{ route('article.search') }}" method="GET">
              <input class="form-control searchControl m-0 h-100" name="query" type="search" placeholder="Cerca su Presto..." aria-label="Search">
              <button class="btn h-100" type="submit"><i class="bi bi-search h-100 p-0 m-0 accento"></i></button>
            </form> 

            {{-- dropdown filtro categorie --}}
            <ul class="dropdown-menu">
            @foreach ($categories as $category)
            <li><a class="dropdown-item text-capitalize" 
             href="{{ route('byCategory', ['category' => $category]) }}">{{ $category->name }}</a>
           </li>
           @if (!$loop->last)
           <hr class="dropdown-divider">
           @endif
           @endforeach
            </ul>
            
          </li>

          <div class="col-12 col-md-6 d-flex justify-content-evenly">
          
          @guest

          <li class="nav-item dropdown">
            <a class="nav-link navLink dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ospite</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('login') }}">Effettua il login</a></li>
              <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
            </ul>
          </li>

          @endguest

          @auth
          <li class="nav-item dropdown ">
            <a class="activeNavLink nav-link navLink dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('article.create') }}">Crea annuncio</a></li>
              <li><a class="dropdown-item" href="" onclick="event.preventDefault(); document.querySelector('#logout').submit();">Logout</a>
                 <li><hr class="dropdown-divider"></li>
                 
                 
                 
                 @if (Auth::user()->is_revisor)
                 <li><a class="dropdown-item moderatore" href="{{ route('revisor.index') }}">Dashboard moderatore
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill">{{\App\Models\Article::toBeRevisedCount()}}</span></a></li>
                  @else
                  <li><a class="dropdown-item" href="{{route('become.revisor')}}">Diventa moderatore</a></li>
                 @endif 
              <form action="{{route('logout')}}" method="POST" id="logout">@csrf</form></li>
            </ul>
          </li>
          @endauth
        
          <li>
            <a class="@if(Route::current()->getName() == 'article.index') activeNavLink @endif nav-link navLink d-inline-block" href="{{ route('article.index') }}">Tutti gli annunci</a>
          </li>
       
        </div>
          
        </ul>

        

        
      
    </div>
  </nav>