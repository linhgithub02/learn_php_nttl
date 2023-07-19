<?php

require_once '../pdo.php';
require_once '../helper.php';

$pro = new QueryOfProduct();
$data= ['name' => $_POST['name'], 'price' => $_POST['price'], 
'categories_id' => $_POST['categories_id']];
$pro->create_product($data);

/*create_product(array('name' => $_POST['name'], 'price' => $_POST['price'], 
'categories_id' => $_POST['categories_id'] ));
*/
redirectCategoryHome();