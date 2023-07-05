<!-- 
Bài tập Tạo lớp Sản phẩm:
Tạo một lớp SanPham với các thuộc tính tên, giá và mô tả.
Tạo phương thức để hiển thị thông tin chi tiết của sản phẩm.
 -->
<?php
class Product{
    protected $name;
    protected $price;
    protected $detail;

    public function __construct($name, $price, $detail)
    {
        $this->name=$name;
        $this->price=$price;
        $this->detail=$detail;
    }
    public function showName()
    {
        return $this->name;
    }
    public function showPrice()
    {
        return $this->price;
    }
    public function showDetail()
    {
        return $this->detail;
    }
}
$name= "Túi Sách";
$price= "250.000";
$detail= "Phù hợp phong cách học sinh, sinh viên!";
$product= new Product ($name, $price, $detail);
echo "Name: ".$product->showName(). ";<br>";
echo " Price: ".$product->showPrice(). ";<br>";
echo " Deatil: ".$product->showDetail();