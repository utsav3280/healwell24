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
      <a href="/"><button class="btn">Main Page</button></a>
        <a href="/shop/add"><button class="btn">Add Product</button></a>
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
    <form action="/shop/filter" class="d-flex w-100" role="search">
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
      <div class="col col-3">
        <h3 class="mb-3">Filter</h3>
        <hr>
        <!-- <form action="/">
        <button class="btn btn-danger pt-0 pb-0 mb-3">Remove Filters</button>
        </form> -->
        <form action="/shop/filter">
          <button class="btn btn-dark pt-0 pb-0 mb-3">Apply Filter</button>
          <p>Brands</p>
          <ul class="list-group">
            <li class="list-group-item">
              <input class="form-check-input me-1" type="checkbox" name="Brand[]" value="themis" id="themis">
              <label class="form-check-label" for="themis">themis</label>
            </li>
            <li class="list-group-item">
              <input class="form-check-input me-1" type="checkbox" name="Brand[]" value="probiotic" id="probiotic">
              <label class="form-check-label" for="probiotic">probiotic</label>
            </li>
            <li class="list-group-item">
              <input class="form-check-input me-1" type="checkbox" name="Brand[]" value="gsk" id="gsk">
              <label class="form-check-label" for="gsk">gsk</label>
            </li>
          </ul>
          <hr>
          <p>Category</p>
          <ul class="list-group">
            <li class="list-group-item">
              <input class="form-check-input me-1" type="checkbox" name="type[]" value="smartwatches" id="smartwatches">
              <label class="form-check-label" for="smartwatches">smartwatches</label>
            </li>
            <li class="list-group-item">
              <input class="form-check-input me-1" type="checkbox" name="type[]" value="thermometers" id="thermometers">
              <label class="form-check-label" for="thermometers">thermometers</label>
            </li>
            <li class="list-group-item">
              <input class="form-check-input me-1" type="checkbox" name="type[]" value="belts" id="belts">
              <label class="form-check-label" for="belts">belts</label>
            </li>
            <li class="list-group-item">
              <input class="form-check-input me-1" type="checkbox" name="type[]" value="brushes" id="brushes">
              <label class="form-check-label" for="brushes">brushes</label>
            </li>
          </ul>
          <hr>
          <p class="mb-3">Price</p>
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
        </form>
      </div>
      <!-- product-cards -->
      <!-- Splitting array into featured and non featured -->
      <?php
          $featuredProducts = [];
          $nonFeatured = [];
          for($i=0; $i<count($products);$i++){
            if($products[$i]->featured == "true"){
              array_push($featuredProducts, $products[$i]);
            }
            else{
              array_push($nonFeatured, $products[$i]);
            }
          }
      ?>
      <!-- products display section -->
      <div class="col col-9 mt-2">
        <!-- featured products section -->
        @if(count($featuredProducts) != 0)
        <p class="font-weight-bold text-danger">Featured Products</p>
        <div class="row row-cols-1 row-cols-md-3 g-4 featured-section mt-2 pb-2 rounded">
          @foreach($featuredProducts as $product)
          <div class="col product-card mt-3 mr-3">
            <div class="card h-100">
              <div class="d-flex justify-content-center h-50">
                <?php
                $images = json_decode($product->image, true);
                ?>
                <img src={{$images[0]}} class="card-img-top w-75 pt-3 mb-3" alt="product-image">
              </div>
              <div class="card-body pb-0">
                <p class="card-text price-tag">&#8377;&nbsp;{{$product->price}}</p>
                <a class="float-end text-body-secondary" href="#">Reviews</a>
                <h6 class="card-title mb-2">{{$product->name}}</h6>
                <!-- testing -->
                <p class="card-text brand-tag mb-1">{{$product->brand}}</p>
                <p class="card-text type-tag mb-1">{{$product->type}}</p>
                <!-- testing -->
                <button class="btn btn-warning w-100 mt-2 rounded-pill">Add to Cart</button>
                <div class="d-flex justify-content-between mt-2">
                  <a class="edit-delete-btn" href={{"/shop/edit/".$product->id}}> <img class="edit-delete-icon"
                      src="https://cdn-icons-png.flaticon.com/128/5251/5251816.png" alt="edit-icon"> </a>
                  <a class="edit-delete-btn" href={{"/shop/delete/".$product->id}}> <img class="edit-delete-icon"
                      src="https://cdn-icons-png.flaticon.com/128/3687/3687412.png" alt="delete-icon"> </a>
                </div>
                <div class="d-flex justify-content-center mt-2 mb-2">
                  <a href={{"/shop/product/".$product->id}}>View More</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        @endif
        <hr>
        <!-- non-featured products section -->
        @if(count($nonFeatured) != 0)
        <div class="row row-cols-1 row-cols-md-3 g-4">
          @foreach($nonFeatured as $product)
          <div class="col product-card">
            <div class="card h-100">
              <div class="d-flex justify-content-center h-50">
              <?php
                $images = json_decode($product->image, true);
                ?>
                <img src={{$images[0]}} class="card-img-top w-75 pt-3 mb-3" alt="product-image">
              </div>
              <div class="card-body pb-0">
                <p class="card-text price-tag">&#8377;&nbsp;{{$product->price}}</p>
                <a class="float-end text-body-secondary" href="#">Reviews</a>
                <h6 class="card-title mb-2">{{$product->name}}</h6>
                <!-- testing -->
                <p class="card-text brand-tag mb-1">{{$product->brand}}</p>
                <p class="card-text type-tag mb-1">{{$product->type}}</p>
                <!-- testing -->
                <button class="btn btn-warning w-100 mt-2 rounded-pill">Add to Cart</button>
                <div class="d-flex justify-content-between mt-2">
                  <a class="edit-delete-btn" href={{"/shop/edit/".$product->id}}> <img class="edit-delete-icon"
                      src="https://cdn-icons-png.flaticon.com/128/5251/5251816.png" alt="edit-icon"> </a>
                  <a class="edit-delete-btn" href={{"/shop/delete/".$product->id}}> <img class="edit-delete-icon"
                      src="https://cdn-icons-png.flaticon.com/128/3687/3687412.png" alt="delete-icon"> </a>
                </div>
                <div class="d-flex justify-content-center mt-2 mb-2">
                  <a href={{"/shop/product/".$product->id}}>View More</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        @endif
        <!-- no products available -->
        @if(count($products) == 0)
        <div>
          <p>No products available</p>
        </div>
        @endif
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