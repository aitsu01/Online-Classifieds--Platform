<footer class="bgFooter container-fluid py-3 mt-5">
  <div class="row justify-content-evenly">

    <!-- Colonna CONTATTACI -->
    <div class="col-4 d-flex flex-column align-items-center">
      <h3 class="footerTitle text-center">{{__('ui.contactUs')}}</h3>
      <ul class="d-flex flex-column align-items-center p-0 m-0">
        <li class="footerItem"><strong>{{__('ui.address')}}:</strong> Via dei Matti, 0</li>
        <li class="footerItem"><strong>E-Mail:</strong> presto@tardi.com</li>
        <li class="footerItem"><strong>{{__('ui.phone')}}:</strong> 333 333333</li>
      </ul>
    </div>

    @auth
    @if (Auth::user()->is_revisor == false)
    
    <!-- Colonna LAVORA CON NOI -->
    <div class="col-4 d-flex flex-column align-items-center">
      <h3 class="footerTitle text-center">{{__('ui.workWithUs')}}</h3>
      <ul class="d-flex flex-column align-items-center p-0 m-0">
        <li class="footerItem">
          <a href="{{route('become.revisor.form')}}" class="footerItem">{{__('ui.becomeRevisor')}}</a>
        </li>
      </ul>
    </div>

    @endif
    @endauth

    <!-- Colonna SEGUICI -->
    <div class="col-4 d-flex flex-column align-items-center">
      <h3 class="footerTitle text-center">{{__('ui.followUs')}}</h3>
      <ul class="d-flex justify-content-center align-items-center flex-wrap p-0 m-0">
        <li class="footerItem mx-2 p-0">
          <a href="" class="footerLink"><i class="bi bi-instagram fs-3 p-0"></i></a>
        </li>
        <li class="footerItem mx-2 p-0">
          <a href="" class="footerLink"><i class="bi bi-facebook fs-3 p-0"></i></a>
        </li>
        <li class="footerItem mx-2 p-0">
          <a href="" class="footerLink"><i class="bi bi-twitter fs-3 p-0"></i></a>
        </li>
        <li class="footerItem mx-2 p-0">
          <a href="" class="footerLink"><i class="bi bi-whatsapp fs-3 p-0"></i></a>
        </li>
      </ul>
    </div>

  </div>
</footer>
