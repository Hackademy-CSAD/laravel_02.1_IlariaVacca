<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/macchine">Macchine</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">About us</a>
          </li>
      </ul>

    </div>
  </div>
</nav>

<main>
    <div class="container">
        <div class="row">
        @foreach($data as $macchina)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{$macchina['img']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$macchina['nome']}}</h5>
                      <p class="card-text">{{$macchina['modello']}}</p>
                      <p class="card-text">{{$macchina['anno']}}</p>
                      <a href="{{route('macchina.show',['nome'=>$macchina['nome']])}}" class="btn btn-primary">Approfondisci</a>
                    </div>
                  </div>
            </div>

            @endforeach
        </div>
    </div>
    
    
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>