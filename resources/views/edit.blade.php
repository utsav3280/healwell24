<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Add Product</title>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <form action="/shop/update" class="w-50" method="post" enctype="multipart/form-data">
            @csrf
            <h4 class="mt-4 mb-4">Update Existing Product</h4>
            <input type="hidden" name="id" value={{$product["id"]}}>
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingInput" value={{$product["name"]}}>
                <label for="floatingInput">Product Name</label>
            </div>
            <div class="form-floating">
                <input type="number" name="price" class="form-control" id="floatingInput" value={{$product["price"]}}>
                <label for="floatingInput">Product Price</label>
            </div>
            <p class="mt-4 mb-2">Set Category</p>
            <select class="form-select" name="category" aria-label="Default select example">
                <option selected>{{$product["category"]}}</option>
                <option value="Health">Health</option>
                <option value="Wellness">Wellness</option>
                <option value="Diabetes">Diabetes</option>
                <option value="Medical">Medical</option>
            </select>
            <p class="mt-3 mb-2">Select Image</p>
            <div class="form mb-4">
                <input type="file" name="image" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a class="btn btn-light" href="/">Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>