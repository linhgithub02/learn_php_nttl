<?php
//Bài 1: Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
echo"Bài 1: ";
function checkNumber($n){
    if ($n%2==0){
        echo $n. ": Đây là số chẵn <br>";
    }
    else{
        echo $n.": Đây là số lẻ <br>";
    }
}
echo checkNumber(10);
//Bài 2: Viết chương trình PHP để tính tổng của các số từ 1 đến n.
echo"Bài 2: ";
function sum( $a){
    $sum=0;
    for( $i=0; $i<= $a; $i ++){
        $sum=$sum+ $i;
    }
    return $sum;
}
echo"Tổng của dãy số là: ";
echo sum(6)."<br>";
//Bài 3: Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
echo"Bài 3: Bảng cửu chương:<br> ";
function multiplicationTable($a, $b){
    for($i=1; $i<= $a; $i++){
        for($j=1; $j<=$b; $j++){
            echo $i."x".$j . "=" . $i*$j."<br>";
        }
    }
}
echo multiplicationTable(10,10);
//Bài 4: Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
echo"Bài 4: ";
function checkString($string1, $character){
    if (strstr($string1, $character )==true){
        echo $string1. " có chứa ". $character;
    }
    else{
        echo $string1. "không có chứa ". $character."<br>";
    }
}
echo checkString("Nguyen Thuy Linh ","mmmm");
//Bài 5: Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
echo"Bài 5: ";
function maxArray($array){
    $max=0;
    for($i=0; $i<count($array); $i++){
        if($max < $array[$i]){
            $max = $array[$i];
        }
    }
    echo "Giá trị lớn nhất của mảng là: ".$max;
}
echo maxArray(array('10', '40', '30'))."<br>";
//Bài 6: Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
echo"Bài 6: Mảng đã được sắp xếp tăng dần là: ";
function arrange($array){
   $arrange= sort($array);
   return $array;
}
$array = [1,2,5,3,5];
$array = arrange($array);
foreach($array as $value)
    echo $value . " ";
echo "<br>";
//Bài 7: Viết chương trình PHP để tính giai thừa của một số nguyên dương.
echo "Bài 7: ";
function multiplication($integer){
    $multiplication =1;
    for($i=1; $i<=$integer; $i++){
        $multiplication= $multiplication * $i;
    }
    echo "Giai thừa của số nguyên dương ". $integer ." là: ". $multiplication. "<br>";
}
echo multiplication(5);
//Bài 9: Viết chương trình PHP để tính tổng của các số trong một mảng.
echo"Bài 9: ";
function sumArray($array){
    $sum=0;
    for($i=0; $i<count($array); $i++){
        $sum =$sum + $array[$i];
    }
    echo "Tổng của mảng là: ".$sum;
}
echo sumArray(array('10', '40', '30'))."<br>";
//Bài 15: Viết chương trình PHP để đảo ngược một chuỗi.
echo"Bài 15: ";
function reverseAString($string){
    $reverse= strrev($string);
    echo "Chuỗi đảo ngược của " .$string ." là: " .$reverse ."<br>";
}
echo reverseAString("Nguyen Thuy Linh");
//Bài 16: Viết chương trình PHP để tính số lượng phần tử trong một mảng
echo"Bài 16: ";
function countArray($array){
    $countArray= count($array);
    echo "Số phần tử của mảng là: ". $countArray. "<br>";
}
echo countArray(array('1', '2', '3', '6'));
//Bài 19: Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần
echo"Bài 19: Mảng đã được sắp xếp giảm dần là: ";
function reduce($array){
    $reduce= rsort($array);
    return $array;
 }
 $array = [1,2,5,3,5];
 $array = reduce($array);
 foreach($array as $value)
     echo $value . " ";
 echo "<br>";
 //Bài 22:Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương
 echo"Bài 22: ";
 function USCLN($a, $b) {
    if ($b == 0) return $a;
    return USCLN($b, $a % $b);
}
function BSCNN($a, $b) {
    return ($a * $b) / USCLN($a, $b);
}
$a = 50;
$b = 110;
echo ("USCLN của $a và $b là: " . USCLN($a, $b))."    ;";
echo ("BSCNN của $a và  $b là: " . BSCNN($a, $b)) ."<br>";
//Bài 24: Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng
echo"Bài 24: <br>";

//Bài 28: Tính tổng số lẻ từ 1-n:
echo"Bài 28: ";
function total($array){
    $total=0;
    for( $i=0; $i< count($array); $i ++){
        if($array[$i] % 2 != 0){
            $total= $total +$array[$i];
        }
   
    }
    echo"Tổng của dãy số là: ".$total;
}
echo total(array('1','2','3','4','5','13'))."<br>";
//Bài 30: Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không
echo"Bài 30: ";
function checkCharacter($string, $character){
    if (strstr($string, $character )==true){
        echo $character. " là chuỗi con của ". $string;
    }
    else{
        echo $character. "không là chuỗi con của ". $string."<br>";
    }
}
echo checkString("Nguyen Thuy Linh ","Thuy Linh");

