<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$product->name}}</title>
  <link rel="icon" href="https://www.healwell24.com/assets/new/img/favicon.png" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <div class="col product-card mt-3 mr-3 p-5 pt-1">
    <div class="d-flex justify-content-between mb-4 mt-4">
        <h4>Preview</h4>
        <form action="/shop" method="get">
            <button type="submit" class="btn btn-warning">Go to Home Page</button>
        </form>
    </div>
    <div class="card h-100">
      <?php
      $images = json_decode($product->image, true);
      ?>
      <div id="carouselExampleAutoplaying" class="carousel slide container w-25 h-25 mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
          @foreach ($images as $key => $image)
          <div class="carousel-item @if ($key == 0) active @endif">
            <img class="d-block w-100" src="{{ $image }}" alt="Slide {{ $key }}">
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <hr>
      <div class="product-view-page p-4 pt-2">
        <div class="dflex card-body p-0 w-50">
          <p class="card-text price-tag">&#8377;&nbsp;{{$product->price}}</p>
          <h4 class="card-title">{{$product->name}}</h4>
          <p class="card-text brand-tag mb-1">{{$product->brand}}</p>
          <p class="card-text type-tag mb-1">{{$product->type}}</p>
          <p class="w-75 mt-3">{{$product->description}}</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>