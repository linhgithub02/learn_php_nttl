<?php
/*phạm vi truy cập bao gồm: public, protected (có thể trong lớp, lớp con kế thừa),
private(chỉ dùng trong lớp, lớp con kế thừa không thể dùng)
*/
abstract class Shape {
    abstract public function calculateArea();
}
class Circle extends Shape {
    protected $radius;

    public function __construct($radius)
    {
        $this->radius= $radius;
    }
    public function calculateArea()
    {
        return 3.14* pow($this->radius, 2);
    }
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
$circle = new Circle (3);
echo "Area of circle: " .$circle->calculateArea();
$rectangle = new Rectangle (6,5);
echo "Area of rectangle is: " .$rectangle->calculateArea();