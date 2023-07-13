<?php
 /* Tạo một interface "Drawable" (Có thể vẽ) với phương thức "draw".
 Tạo một lớp "Circle" (Hình tròn) và một lớp "Square" (Hình vuông) kế thừa từ interface Drawable
 và triển khai phương thức draw cho mỗi hình.
 */
interface Drawable
{
    public function draw();
}
class Circle implements Drawable
{

}
class Square implements Drawable
{

}