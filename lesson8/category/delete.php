<?php

require_once '../pdo.php';
require_once '../helper.php';

$cate = new QueryOfCategory();
$id = ['id ' => $_POST ['id']];
$cate->delete($id);
//delete(['id' => $_POST['id']]);

redirectCategoryHome();