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
    <div class="container d-flex flex-column align-items-center">
        <h4 class="mt-4 mb-4">Add new Product</h4>
        <form action="/add" class="w-50" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Product Name" required>
                <label for="floatingInput">Product Name</label>
            </div>
            <div class="form-floating mb-4">
                <input type="number" name="price" class="form-control" id="floatingInput" placeholder="Price" required>
                <label for="floatingInput">Price</label>
            </div>
            <p class="mb-2">Select Category</p>
            <select class="form-select" name="category" aria-label="Default select example" required>
                <!-- <option selected>Select Category</option> -->
                <option value="Health">Health</option>
                <option value="Wellness">Wellness</option>
                <option value="Diabetes">Diabetes</option>
                <option value="Medical">Medical</option>
            </select>
            <p class="mt-4 mb-2">Select Image</p>
            <div class="form mb-4">
                <input type="file" name="image" class="form-control" required>
            </div>
            <div class="float-end">
                <button type="submit" class="btn btn-primary">Add</button>
                <a class="btn btn-light" href="/">Back</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>