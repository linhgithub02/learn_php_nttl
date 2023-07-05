<!--su dung tieng Anh
    Bài tập Tạo lớp Hình chữ nhật:
    Tạo một lớp HìnhChuNhat với các thuộc tính chiều dài và chiều rộng.
    Tạo các phương thức để tính diện tích và chu vi của hình chữ nhật.
-->
<?php
class Rectangle {
    protected $length;
    protected $width;

    public function __construct ($length, $width)
    {
        $this->length= $length;
        $this->width= $width;
    }
    public function calArea()
    {
        return $this->length* $this->width;
    }
    public function calPerimeter()
    {
        return ($this->length + $this->width) *2;
    }
}
$length= 12;
$width= 6;
$rectangle= new Rectangle ($length, $width);
echo "Area of rectangle: " .$rectangle->calArea(). ";<br>";
echo " Area of perimeter: "  .$rectangle->calPerimeter(). ".";