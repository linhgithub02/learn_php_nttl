<?php

require_once '../pdo.php';
require_once '../helper.php';

$pro = new QueryOfProduct();
$id = ['id' => $_POST['id']];
$pro->delete_product($id);

//delete_product(['id' => $_POST['id']]);

redirectCategoryHome();