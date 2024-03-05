<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>CRUD</title>
  </head>
  <body>
    <nav class="navbar navbar-expand" style="background-color: #69abda;">
        <div>
          
            <a href="/" class="navbar-brand text-light">The Shoe Spot</a>
            <i class="bi bi-browser-edge text-light"></i>
        </div>   

    </nav>

    <div class="container mt-5">
        <div class="row">
          @if ($message=Session::get('success'))
            <div class="alert alert-warning alert-dismissible fade show">
              <strong>Success</strong> {{$message}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>

          @endif
            @yield('main')
        </div>
    </div>

    
    

    
  </body>
</html>