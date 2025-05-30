<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? ""}}</title>
    <link rel="icon" type="image/png" href="{{ asset('media/logo.png') }}">
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Goudy+Bookletter+1911&display=swap" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>


<body>
    <x-navbar/>
    
    <div class="container-fluid pattern min-vh-100 mt-5">
        {{ $slot }}
    </div>
    
    <x-footer/>

    @if(session('success'))
    <script>
        window.sessionSuccess = true;
    </script>
    @else
    <script>
        window.sessionSuccess = false;
    </script>
    @endif
</body>
</html>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
