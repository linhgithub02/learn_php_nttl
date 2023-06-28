<?php
 require_once '../pdo.php';
 require_once '../helper.php';
var_dump($data);

$id = $_GET['id'];
$name = $_POST['name'];
$data = [
    'id'=> $id,
    'name' =>$name
];
edit($data);
redirectCategoryHome();