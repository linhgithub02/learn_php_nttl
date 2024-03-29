<?php
    require_once 'pdo.php';

    $cate = new QueryOfCategory();
    $categories = $cate->getAll();

    $pro = new QueryOfProduct();
    $products = $pro->getAll1();

    //$categories = getAll();
    //$products = getAll1();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Lesson 8!</title>
</head>
<body>
<div class="container pt-4">
    <h1>List category</h1>
    <a href="./category/create.php" class="btn btn-success">Create</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($categories as $category): ?>
        <tr>
            <th scope="row"><?= $category['id'] ?></th>
            <td><?= $category['name'] ?></td>
            <td>
                <form id="category_<?= $category['id'] ?>" action="./category/delete.php" method="POST">
                    <input type="hidden" value="<?= $category['id'] ?>" name="id">
                    <a href="./category/edit.php?id=<?= $category['id'] ?>" class="btn btn-success">Edit</a> 
                    <button type="button" class="btn btn-danger" onclick="deleteCategory(<?= $category['id'] ?>)">Delete</button>
                </form> 
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="container pt-4">
    <h1>List Product</h1>
    <a href="./product/create.php" class="btn btn-success">Create</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Category_ID</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product): ?>
        <tr>
            <th scope="row"><?= $product['id'] ?></th>
            <td><?= $product['name'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><?= $product['categories_id'] ?></td>
            <td>
                <form id="product_<?= $product['id'] ?>" action="./product/delete.php" method="POST">
                    <input type="hidden" value="<?= $product['id'] ?>" name="id">
                    <a href="./product/edit.php?id=<?= $product['id'] ?>" class="btn btn-success">Edit</a> 
                    <button type="button" class="btn btn-danger" onclick="deleteProduct(<?= $product['id'] ?>)">Delete</button>
                </form> 
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    function deleteCategory(id) {
        if (confirm('Are you sure?')) {
            document.getElementById(`category_${id}`).submit();
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 <script>
    function deleteProduct(id) {
        if (confirm('Are you sure?')) {
            document.getElementById(`product_${id}`).submit();
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>