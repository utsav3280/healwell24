<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Healwell24: Shop by Category</title>
  <link rel="icon" href="https://www.healwell24.com/assets/new/img/favicon.png" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <!-- navbar -->
  <nav class="navbar bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="https://www.healwell24.com/">
        <img src="https://www.healwell24.com/assets/img/logo.png" alt="Logo" width="250" height="60"
          class="d-inline-block align-text-top">
      </a>
      <div>
        <button class="btn">Login</button>
        <a href="#">
          <img src="https://cdn-icons-png.flaticon.com/128/9485/9485943.png" alt="Logo" width="40" height="40"
            class="d-inline-block align-text-top">
        </a>
      </div>
    </div>
  </nav>
  <!-- carousal -->
  <div id="carouselExampleAutoplaying" class="carousel slide container w-100 mt-4" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://www.healwell24.com/assets/shop-img/healwell24-04.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.healwell24.com/assets/shop-img/healwell24-03.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.healwell24.com/assets/shop-img/healwell24-02.jpg" class="d-block w-100" alt="...">
      </div>
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
  <!-- main-section -->
  <div class="container w-100 mt-4 mb-4">
    <!-- Offer banner -->
    <hr>
    <?php
    $offer_banners = array("https://www.shutterstock.com/image-vector/winter-sale-horizontal-advertising-banner-260nw-536057692.jpg","https://medhajnews.in/img/ad3.jpg");
    $health_concerns = array("Health"=>"https://cdn-icons-png.flaticon.com/128/2382/2382533.png","Wellness"=>"https://cdn-icons-png.flaticon.com/128/3048/3048398.png","Diabetic"=>"https://cdn-icons-png.flaticon.com/128/3209/3209082.png","Medical"=>"https://cdn-icons-png.flaticon.com/128/2371/2371353.png");
    $brands = array("gsk"=>"https://seeklogo.com/images/G/gsk-logo-0E9C39AC73-seeklogo.com.png","themis"=>"https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco,dpr_1/rntaa6qcm6azv2t3t3et","probiotic"=>"https://media.istockphoto.com/id/1181243254/vector/prebiotic-icon.jpg?s=612x612&w=0&k=20&c=X4oarHzeS5dMJPeaAeuXMY04vn6vUCo2ljqx2HP89UY=");
    $type = array("smartwatches"=>"https://cdn-icons-png.flaticon.com/128/617/617690.png","thermometers"=>"https://cdn-icons-png.flaticon.com/128/2100/2100100.png","belts"=>"https://cdn-icons-png.flaticon.com/128/3563/3563747.png","brushes"=>"https://cdn-icons-png.flaticon.com/128/5997/5997389.png");
    ?>
    <div id="carouselExampleAutoplaying-offer" class="carousel slide container w-100 mt-4" data-bs-ride="carousel">
      <div class="carousel-inner">
        @foreach ($offer_banners as $key => $image)
        <div class="carousel-item @if ($key == 0) active @endif">
          <img class="d-block w-100 offerbanner" src="{{ $image }}" alt="Slide {{ $key }}">
        </div>
        @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying-offer"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying-offer"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <hr>
    <!-- Shop by Health Concerns -->
    <h5>Shop by health concerns</h5>
    <div class="d-flex justify-content-start bg-light mt-3 rounded">
      @foreach ($health_concerns as $key => $image)
      <a class="links" href="/concerns/{{$key}}">
      <div class="d-flex flex-column align-items-center health-box">
        <img class="main-icons mb-4" src="{{$image}}" alt="">
        <p class="m-0 p-0">{{$key}}</p>
      </div>
      </a>
      @endforeach
    </div>
    <hr>
    <!-- Shop by Category -->
    <h5>Shop by Category</h5>
    <div class="d-flex justify-content-start bg-light mt-3 rounded mb-3">
      @foreach ($type as $key => $image)
      <a class="links" href="/product-type/{{$key}}">
        <div class="d-flex flex-column align-items-center type-box">
          <img class="main-icons mb-4" src="{{$image}}" alt="">
          <p class="m-0 p-0">{{$key}}</p>
        </div>
      </a>
      @endforeach
    </div>
    <hr>
    <!-- Feature Brands -->
    <h5>Shop by Brands</h5>
    <div class="d-flex justify-content-start bg-light mt-3 rounded mb-5">
      @foreach ($brands as $key => $image)
      <a class="links" href="/brand/{{$key}}">
        <div class="d-flex flex-column align-items-center brand-box">
          <img class="main-icons mb-4" src="{{$image}}" alt="">
          <p class="m-0 p-0">{{$key}}</p>
        </div>
      </a>
      @endforeach
    </div>
    <div class="d-flex justify-content-center">
      <a href="/shop" class="btn bg-warning">View All Products</a>
    </div>
    <hr>
    <!-- footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        &#169; 2023 Copyright:
        <a class="text-reset fw-bold" href="https://www.healwell24.com/">HealWell24.com</a>
      </div>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>