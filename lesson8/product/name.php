<?php
 require_once '../pdo.php';
 require_once '../helper.php';

 $pro = new QueryOfProduct();
 $id = ['id' =>$_GET['id']];
 $name = $_POST['name'];
 $price = $_POST['price'];
 $categories_id = $_POST['categories_id'];
 $data = [
    'id'=> $id,
    'name' =>$name,
    'price' =>$price,
    'categories_id' =>$categories_id
];
$pro->edit_product($data);
 /*
var_dump($data);

$id = $_GET['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$categories_id = $_POST['categories_id'];
$data = [
    'id'=> $id,
    'name' =>$name,
    'price' =>$price,
    'categories_id' =>$categories_id
];
edit_product($data);
*/
redirectCategoryHome();