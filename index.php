<?php
echo "Hello!";
//Ở đây ghi chú=)))
// Bắt đầu phần biến
$totalVolume = 30;
echo "<br>"; // Xuống dòng 
echo $totalVolume; //Quy tắc camelCase
echo "<br>";
//Đây là hàm
function myTest(){
    static $x =0;
    echo $x;
    $x ++;
}
myTest(); echo "<br>";
myTest(); echo "<br>";
myTest();
echo "<br>";
echo strpos("hello world", "world");
?>