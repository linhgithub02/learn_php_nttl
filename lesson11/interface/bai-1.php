<?php
/* Tạo một interface "Resizable" (Có thể điều chỉnh kích thước) với một phương thức là "resize". 
Tạo một lớp "Rectangle" (Hình chữ nhật) và triển khai interface Resizable 
để thay đổi kích thước của hình chữ nhật.
*/
interface Resizable
{
    public function resize($Rectangle);
}
class Rectangle implements Resizable
{
    protected $width;
    protected $height;

    public function resize(Rectangle $Rectangle)
    {
    
    }
}
$retangle= new Rectangle();
