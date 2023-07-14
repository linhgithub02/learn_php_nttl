<?php
/* Tạo một interface "Resizable" (Có thể điều chỉnh kích thước) với một phương thức là "resize". 
Tạo một lớp "Rectangle" (Hình chữ nhật) và triển khai interface Resizable 
để thay đổi kích thước của hình chữ nhật.
*/
interface Resizable
{
    public function resize($length);
}
class Rectangle implements Resizable
{
    protected $width;
    protected $height;

    public function __construct($width, $height)
    {
        $this->width= $width;
        $this->height= $height;
    }
    public function resize($length)
    {
        $this->width =  $this->width + $length;
        $this->height =  $this->height + $length;
    }
    public function getWidth()
    {
        return $this->width;
    }
    public function getHeight()
    {
        return $this->height;
    }
}
$rectangle= new Rectangle(20,5);
echo "The firt of size: width= " .$rectangle->getWidth(). "     , height: " .$rectangle->getHeight();
$rectangle->resize(50);
echo "<br>The next of size: width= " .$rectangle->getWidth(). "     , height: " .$rectangle->getHeight();
