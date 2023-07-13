<!--Bai 1 y 2:-->
<?php
abstract class Shape {
    abstract public function calculateArea();
}
class Rectangle extends Shape{
    protected $width;
    protected $height;

    public function __construct($width, $height)
    {
        $this->width =$width;
        $this->height= $height;
    }
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}
$rectangle = new Rectangle (6,5);
echo "Area of rectangle is: " .$rectangle->calculateArea();