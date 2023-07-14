<?php
 /* Tạo một interface "Drawable" (Có thể vẽ) với phương thức "draw".
 Tạo một lớp "Circle" (Hình tròn) và một lớp "Square" (Hình vuông) kế thừa từ interface Drawable
 và triển khai phương thức draw cho mỗi hình.
 */
interface Logger
{
    public function logInfo();
    public function logWarning();
    public function logError();
}
class FileLogger implements Drawable
{

}
class DatabaseLogger implements Drawable
{

}