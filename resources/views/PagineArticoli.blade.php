<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Progetto Presto</title>
    <!-- CUSTOM FONTS -->

    <!--BOOTSTRAP + BSICONS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>


    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="{{route('homePage')}}">MediaMondo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active fw-semibold" aria-current="page" href="{{route('chiSiamoPage')}}">Chi siamo ?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-semibold" href="{{route('serviziPage')}}">Servizi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-semibold" href="{{route('paginaArticoliPage')}}">Articoli</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    
    <h1 class="m-5 fw-bold"> Articoli in Risalto </h1>

    <div class="container-fluid">
        <div class="row justify-content-around">
                @foreach ($arrayArticles as $article)
                <div class="card col-12 col-md-3 m-4">
                    <img src="{{$article['image']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$article['name']}}</h5>
                      <p>-{{$article['brand']}}</p>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga quibusdam similique quisquam iste </p>
                      <div class="d-flex">
                        <a href="{{route('paginaDettagliPage', ['id'=>$article['id']])}}" class="btn btn-primary me-4">Esplora</a>
                        <p>{{$article['value']}}</p>
                      </div>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>



    <!-- BOOTSTRAP JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- JAVASCRIPT -->
    <script src="/js/script.js"></script>
</body>
</html>