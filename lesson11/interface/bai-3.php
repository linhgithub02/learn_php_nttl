<?php
 /* Tạo một interface "Drawable" (Có thể vẽ) với phương thức "draw".
 Tạo một lớp "Circle" (Hình tròn) và một lớp "Square" (Hình vuông) kế thừa từ interface Drawable
 và triển khai phương thức draw cho mỗi hình.
 */
interface Drawable
{
    public function draw($length, $color);
}
class Circle implements Drawable
{
    protected $radius;
    protected $color;
   
    public function draw($length, $color)
    {
        
    }
}
class Square implements Drawable
{
    protected $width;
    protected $height;
    public function draw($length, $color);
}

$circle = new Circle ();
