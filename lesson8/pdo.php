<?php

$DB_TYPE = 'mysql';
$DB_HOST = 'localhost';
$DB_NAME = 'crud';
$DB_USER = 'root';
$DB_PASS = '';

try {
    $conn = new PDO("{$DB_TYPE}:host={$DB_HOST};dbname={$DB_NAME}", $DB_USER, $DB_PASS);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die('Connect error: ' . $e->getMessage());
}

function prepareSQL($sql)
{
    global $conn;
    return $conn->prepare($sql);
}

function getAll()
{
    $sql = "SELECT * FROM categories";
    $stmt = prepareSQL($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getAll1()
{
    $sql = "SELECT * FROM products";
    $stmt = prepareSQL($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

function create($data)
{
    $sql = "INSERT INTO categories (name) VALUES (:name)";
    $stmt = prepareSQL($sql);
    $stmt->execute($data);
}

function create_product($data)
{
    $sql = "INSERT INTO products (name,price, categories_id)
     VALUES (:name, :price, :categories_id)";
    $stmt = prepareSQL($sql);
    $stmt->execute($data);
}

function getID($data){
    $sql = "SELECT * FROM categories WHERE id=:id";
    $stmt = prepareSQL($sql);
    $stmt->execute($data);
    return $stmt-> fetch();
}
function getID_product($data){
    $sql = "SELECT * FROM products WHERE id=:id";
    $stmt = prepareSQL($sql);
    $stmt->execute($data);
    return $stmt-> fetch();
}
function delete($data)
{
    $sql = "DELETE FROM categories WHERE id=:id";
    $stmt = prepareSQL($sql);
    $stmt->execute($data);
}

function delete_product($data)
{
    $sql = "DELETE FROM products WHERE id=:id";
    $stmt = prepareSQL($sql);
    $stmt->execute($data);
}

function edit($data)
{
    $sql = "UPDATE categories SET name=:name WHERE id=:id";
    $stmt = prepareSQL($sql);
    $stmt->execute($data);
}
function edit_product($data)
{
    $sql = "UPDATE products SET name=:name, price=:price,
    categories_id=:categories_id WHERE id=:id";
    $stmt = prepareSQL($sql);
    $stmt->execute($data);
}