<?php

require_once '../pdo.php';
require_once '../helper.php';

$cate = new QueryOfCategory();
$data= ['name' => $_POST['name']];
$cate->create($data);

//create(['name' => $_POST['name']]);

redirectCategoryHome();