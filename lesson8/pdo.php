<?php
abstract class Connection
{
    protected $connection, $host, $dbname, $username, $password;
    public function __construct ()
    {
        $this->host = 'localhost';
        $this->dbname = 'crud';
        $this->username = 'root';
        $this->password = '';
        $this->connection = $this->connect();
    }
    public function connect ()
    {
        try
        {
            $connection = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username, $this->password);
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $connection;
        }
        catch (Exception $e) 
        {
            die($e->getMessage());     
        }
    }
    public function prepareSQL($sql)
    {
        return $this->connection->prepare($sql);
    }
}
class QueryOfCategory extends Connection 
{
    public function getAll()
    {
        $sql = "SELECT * FROM categories";
        $stmt = $this->prepareSQL($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function create($data)
    {
        $sql = "INSERT INTO categories (name) VALUES (:name)";
        $stmt = $this->prepareSQL($sql);
        $stmt->execute($data);
    }
    public function getID($data)
    {
        $sql = "SELECT * FROM categories WHERE id=:id";
        $stmt = $this->prepareSQL($sql);
        $stmt->execute($data);
        return $stmt-> fetch();
    }
    public function delete($data)
    {
        $sql = "DELETE FROM categories WHERE id=:id";
        $stmt =$this->prepareSQL($sql);
        $stmt->execute($data);
    }
    public function edit($data)
    {
        $sql = "UPDATE categories SET name=:name WHERE id=:id";
        $stmt = $this->prepareSQL($sql);
        $stmt->execute($data);
    }
}
class QueryOfProduct extends Connection
{
    public function getAll1()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->prepareSQL($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function create_product($data)
    {
        $sql = "INSERT INTO products (name,price, categories_id)
             VALUES (:name, :price, :categories_id)";
        $stmt =$this->prepareSQL($sql);
        $stmt->execute($data);
    }
    public function getID_product($data)
    {
        $sql = "SELECT * FROM products WHERE id=:id";
        $stmt = $this->prepareSQL($sql);
        $stmt->execute($data);
        return $stmt-> fetch();
    }
    public function delete_product($data)
    {
        $sql = "DELETE FROM products WHERE id=:id";
        $stmt =$this-> prepareSQL($sql);
        $stmt->execute($data);
    }
    public function edit_product($data)
    {
        $sql = "UPDATE products SET name=:name, price=:price,
        categories_id=:categories_id WHERE id=:id";
        $stmt = $this->prepareSQL($sql);
        $stmt->execute($data);
    }
}