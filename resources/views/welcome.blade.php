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
        <a href="/add"><button class="btn">Add Product</button></a>
        <button class="btn">Login</button>
        <a href="#">
          <img src="https://cdn-icons-png.flaticon.com/128/9485/9485943.png" alt="Logo" width="40" height="40"
            class="d-inline-block align-text-top">
        </a>
      </div>
    </div>
  </nav>
  <!-- search bar -->
  <div class="container mt-3 mb-3 d-flex justify-content-center">
    <form action="" class="d-flex w-100" role="search">
      <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
  <!-- carousal -->
  <div id="carouselExampleAutoplaying" class="carousel slide container w-100" data-bs-ride="carousel">
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
    <div class="row">
      <!-- sort-filter-section -->
      <div class="col col-3">
        <h3 class="mb-3">Categories</h3>
        <form action="">
          <ul class="list-group">
            <li class="list-group-item">
              <input class="form-check-input me-1" type="radio" name="filter" value="All" id="All" checked>
              <label class="form-check-label" for="All">All</label>
            </li>
            <li class="list-group-item">
              <input class="form-check-input me-1" type="radio" name="filter" value="Health" id="Health">
              <label class="form-check-label" for="Health">Health</label>
            </li>
            <li class="list-group-item">
              <input class="form-check-input me-1" type="radio" name="filter" value="Wellness" id="Wellness">
              <label class="form-check-label" for="Wellness">Wellness</label>
            </li>
            <li class="list-group-item">
              <input class="form-check-input me-1" type="radio" name="filter" value="Diabetes" id="Diabetes">
              <label class="form-check-label" for="Diabetes">Diabetes</label>
            </li>
            <li class="list-group-item">
              <input class="form-check-input me-1" type="radio" name="filter" value="Medical" id="Medical">
              <label class="form-check-label" for="Medical">Medical</label>
            </li>
          </ul>
          <button class="btn btn-dark pt-0 pb-0 mt-2 mb-4">Filter</button>
        </form>
        <hr>
        <h3 class="mb-3">Price</h3>
        <form action="/">
          <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="sort" id="flexRadioDefault2" value="newproducts" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              New Launches
            </label>
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="sort" value="ascending" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              Low to high
            </label>
          </div>
          <div class="form-check mb-2">
            <input class="form-check-input" type="radio" name="sort" value="descending" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
              high to low
            </label>
          </div>
          <button class="btn btn-dark pt-0 pb-0">Sort</button>
        </form>
      </div>
      <!-- product-cards -->
      <div class="col col-9 mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          @foreach($products as $product)
          <div class="col product-card">
            <div class="card h-100">
              <div class="d-flex justify-content-center h-50">
                <img src="images/{{$product["image"]}}" class="card-img-top w-75 pt-3 mb-3" alt="product-image">
              </div>
              <div class="card-body pb-0">
                <p class="card-text price-tag">&#8377;&nbsp;{{$product["price"]}}</p>
                <a class="float-end text-body-secondary" href="#">Reviews</a>
                <h6 class="card-title mb-2">{{$product["name"]}}</h6>
                <p class="card-text category-tag mb-1">{{$product["category"]}}</p>
                <button class="btn btn-warning w-100 mt-2 rounded-pill">Add to Cart</button>
                <div class="d-flex justify-content-between mt-2">
                  <a class="edit-delete-btn" href={{"/edit/".$product["id"]}}> <img class="edit-delete-icon"
                      src="https://cdn-icons-png.flaticon.com/128/5251/5251816.png" alt="edit-icon"> </a>
                  <a class="edit-delete-btn" href={{"/delete/".$product["id"]}}> <img class="edit-delete-icon"
                      src="https://cdn-icons-png.flaticon.com/128/3687/3687412.png" alt="delete-icon"> </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <footer class="text-center text-lg-start bg-light text-muted">
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      &#169; 2023 Copyright:
      <a class="text-reset fw-bold" href="https://www.healwell24.com/">HealWell24.com</a>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>