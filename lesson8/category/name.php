<?php
 require_once '../pdo.php';
 require_once '../helper.php';

 $cate = new QueryOfCategory();
 $id = ['id' =>$_GET['id']];
 $name = $_POST['name'];
 $data = [  'id'=> $id,'name' =>$name ];
 $cate->edit($data);
 /*
var_dump($data);

$id = $_GET['id'];
$name = $_POST['name'];
$data = [
    'id'=> $id,
    'name' =>$name
];
edit($data);
*/
redirectCategoryHome();