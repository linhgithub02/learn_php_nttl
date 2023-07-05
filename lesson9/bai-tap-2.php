<!--su dung tieng Anh
    Bài tập Tạo lớp Điểm 2D:
    Tạo một lớp Diem2D với các thuộc tính x và y.
    Tạo phương thức để tính khoảng cách từ điểm hiện tại tới một điểm khác.
-->
<?php
class Point2D {
    protected $x;
    protected $y;

    public function __construct ($x,$y)
    {
        $this->x=$x;
        $this->y=$y;
    }

    public function calculateDistance(Point2D $point2D)
    {
        return sqrt(pow($this->x - $point2D->x, 2) + pow($this->y- $point2D->y, 2) );
    }
}
$x= 5;
$y = 7;
$point2d= new Point2D ($x,$y);
$x1= 3;
$y1= 5;
$point2D = new Point2D($x1, $y1);
echo "Calculate Distance is: " .$point2d->calculateDistance($point2D);
