<?php
// Bài 15: //Bài 15: Viết chương trình PHP để đảo ngược một chuỗi.
echo "Bài 15:";
function reverseString ($string){
    $reverse = strrev($string);
    return $reverse;
}
$result = reverseString("Linh");
echo " Chuỗi đảo ngược là: ". $result;
echo "<br>";
//Bài 16: Viết chương trình PHP để tính số lượng phần tử trong một mảng
echo "Bài 16: ";
function countElenmentArray($array){
    $count= count($array);
    return $count;
}
$result = countElenmentArray(array('1','2'));
echo " Số phần tử của mảng là: ". $result;
?>