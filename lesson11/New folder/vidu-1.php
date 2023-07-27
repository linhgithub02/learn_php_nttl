<?php
//tạo 2 file test1, test2, sau đó gọi địa chỉ 2 file vào file index.php à chạy 2 dòng code cuối!
namespace Test;
class User
{
    public  static function sayHello()
    {
        return "Heloo";
    }
}
namespace Test2;
class User
{
    public  static function sayHello()
    {
        return "Heloo";
    }
}
$a = new Test\User();
echo $a->sayHello();