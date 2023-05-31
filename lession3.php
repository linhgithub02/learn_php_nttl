<?php
//Bài 1: Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
echo"Bài 1: ";
function checkNumber($n){
    if ($n%2==0){
        return true;
    }
    else{
        return false;
    }
}
$n =15;
$result = checkNumber($n);
if($result == true){
    echo "$n Đây là số chẵn <br>";
}
if($result == false){
    echo "$n Đây là số lẻ <br>";
}
//Bài 2: Viết chương trình PHP để tính tổng của các số từ 1 đến n.
echo"Bài 2: ";
function sum($a){
    $sum=0;
    for( $i=0; $i<= $a; $i ++){
        $sum=$sum+ $i;
    }
    return $sum;
}
$a = 10;
$result = sum(10);
echo"Tổng của dãy số từ 1 đến $a là: $result <br>";
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
        return true;
    }
    else{
        return false;
    }
}
$string = "Nguyen Thuy Linh";
$character = "Thuy Linh"; 
$result = checkString($string, $character);
if($result == true){
    echo " Chuỗi $string có chứa từ $character <br>";
}
if($result == false){
    echo " Chuỗi $string không có chứa từ $character <br>";
}
//Bài 5: Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
echo"Bài 5: ";
function findMax($array){
    $max = max($array);
   return $max;
}
$result1 = findMax(array('10', '40', '30'))."<br>";
echo "Giá trị bé nhất của mảng là: " .$result1;
function findMin($array){
    $min = min($array);
   return $min;
}
$result2 = findMin(array('10', '40', '30'))."<br>";
echo "Giá trị lớn nhất của mảng là: " .$result2;
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
    return $multiplication;
}
$integer = 6;
$result = multiplication($integer);
echo "Giai thừa của số nguyên dương ". $integer ." là: ". $result ."<br>";
//Bài 8: Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
echo "Bài 8: ";
function stringPrimeNumber($min, $max){
    for($i=$min; $i <= sqrt($max); $i++){
            if($max % $i != 0){
                return $i;
            }
    }
}
$min=1;
$max =10;
$result = stringPrimeNumber($min, $max);
//Bài 9: Viết chương trình PHP để tính tổng của các số trong một mảng.
echo"<br>Bài 9: ";
function sumArray($array){
    $sum=0;
    for($i=0; $i<count($array); $i++){
        $sum =$sum + $array[$i];
    }
   return $sum;
}
$array = [10, 30, 50];
$result =  sumArray($array);
echo "Tổng của mảng là: $result <br>";
//Bài 10: Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.

//Bài 11: Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.

//Bài 12: Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
echo "Bài 12: ";
function insertElement($array, $element, $positive){

}
//Bài 13: Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
// Bài 14: Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
// Bài 15: //Bài 15: Viết chương trình PHP để đảo ngược một chuỗi.
echo "<br>Bài 15:";
function reverseString ($string){
    $reverse = strrev($string);
    return $reverse;
}
$string = "Linh";
$result = reverseString("Linh");
echo " Chuỗi đảo ngược của $string là: ". $result;
echo "<br>";
//Bài 16: Viết chương trình PHP để tính số lượng phần tử trong một mảng
echo "Bài 16: ";
function countElenmentArray($array){
    $count= count($array);
    return $count;
}
$array = [1,2];
$result = countElenmentArray($array);
echo " Số phần tử của mảng là: ". $result. "<br>";
//Bài 17: Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
echo"Bài 17: ";
function checkStringPalindrome($string){
    if($string == strrev($string)){
        return true;
    }
    else{
        return false;
    }
}
$string = "nguyungbn";
$result=checkStringPalindrome("$string");
if($result==true){
    echo "$string là chuỗi Palidrome<br>";
}
if($result==false){
    echo "$string không là chuỗi Palidrome<br>";
}
//Bài 18: Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.

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
 //Bài 20: Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
//Bài 21: Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
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
//Bài 23: Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
echo "Bài 23:";
function checkPefectNumber($num){
    $sum = 0;
    for($i=1; $i<= $num/2; $i++){
        if($num % $i == 0){
            $sum= $sum +$i;
        }
    }
    return $sum;
}
$num =9;
$result = checkPefectNumber($num);
if($result == $num){
    echo " $num là số hoàn hảo";
}
if($result != $num){
    echo " $num không là số hoàn hảo";
}
//Bài 24: Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng
echo"<br>Bài 24:";
function maxOddArray($array){
    $max=0;
    for($i=0; $i<count($array); $i++){
        if($array[$i]%2 !=0){
            if($max < $array[$i]){
                $max = $array[$i];
            }
        }     
    }
    return $max;
}
$array = [-50, 10, 40, 35];
$result = maxOddArray($array);
echo " Số lẻ lớn nhất của mảng là: $result"."<br>";
//Bài 25: Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
echo "Bài 25: ";
function findPrime($input){
        for($i=2; $i<= sqrt($input) ; $i++){
            if($input % $i !=0){
                return true;
            }
            else{
                return false;
            }
        }
}
$input = 7;
$result = findPrime($input);
if($result == true){
    echo "$input là số nguyên tố.";
}
if($result == false){
    echo "$input không là số nguyên tố.";
}
//Bài 26: Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
echo"<br>Bài 26: ";
function maxPositiveArray($array){
    $max=0;
    for($i=0; $i<count($array); $i++){
        if($array[$i]>0){
            if($max < $array[$i]){
                $max = $array[$i];
            }
        }     
    }
   return $max;
}
$array = [-50, 10, 40, 35];
$result = maxPositiveArray($array);
echo " Số dương lớn nhất của mảng là: $result"."<br>";
//Bài 27: Viết chương trình PHP để tìm số âm lớn nhất trong một mảng
echo"Bài 27: ";
function maxNegativeArray($array){
    $max=0;
    for($i=0; $i<count($array); $i++){
        if($array[$i]<0){
            if($max < abs($array[$i])){
                $max = $array[$i];
            }
        }     
    }
    return $max;
}
$array = [-50, 10, 40, 35];
$result = maxNegativeArray($array);
echo " Số âm lớn nhất của mảng là: $result"."<br>";
//Bài 28: Tính tổng số lẻ từ 1-n:
echo"Bài 28: ";
function total($oddnum){
    $total=0;
    for( $i=1; $i<= $oddnum; $i ++){
        if($i % 2 != 0){
            $total= $total + $i;
        }
    }
   return $total;
}
$oddnum = 17;
$result = total($oddnum);
echo "Tổng số lẻ từ 1 đến $oddnum là: $result"."<br>";
//Bài 29: Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
//Bài 30: Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không
echo"Bài 30: ";
function checkCharacter($string, $character){
    if (strstr($string, $character )==true){
        return true;
    }
    else{
        return false;
    }
}
$string = "Nguyen Thuy Linh";
$character = "Thuy linh";
$result = checkCharacter($string, $character);
if($result==true){
    echo "$character là chuỗi con của $string <br>";
}
if($result==false){
    echo "$character không là chuỗi con của $string <br>";
}

