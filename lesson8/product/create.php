<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container pt-4">
    <h1>Create product</h1>
    <a href="../index.php" class="btn btn-primary">Back</a>
    <form method="POST" action="./store.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter name ...">
            <label for="exampleInputEmail1" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Enter price ...">
            <label for="exampleInputEmail1" class="form-label">Category_ID</label>
            <input type="text" name="categories_id" class="form-control" placeholder="Enter category_id ...">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>