<form action="{{route('setLocale', $lang)}}" method="POST" class="d-inline">
    @csrf
    <button type="submit" class="btn">
        <img src="{{asset('vendor/blade-flags/language-' . $lang . '.svg')}}" width="24" height="30"/>
    </button>
</form>