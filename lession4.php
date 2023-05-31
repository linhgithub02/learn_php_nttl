<?php
//Bài 1: Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?
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
    echo "$n,  đây là số chẵn <br>";
}
if($result == false){
    echo "$n, đây là số lẻ <br>";
}
//Bài 2: Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.
 /*   Công thức tính điểm trung bình = (điểm giữa kỳ * 30%) + (điểm cuối kỳ * 70%)
    Điểm trung bình >= 9.0 in ra là hạng "Xuất sắc".
    Điểm trung bình >= 7.0 và < 9.0 in ra là hạng "Giỏi"
    Điểm trung bình >= 5.0 và < 7.0 in ra là hạng "Khá"
    Điểm trung bình < 5.0 in ra là hạng "Trung bình - Yếu"
 */
echo "Bài 2: ";
function totalPoint($midPoint, $lastPoint){
    $totalPoint = $midPoint *0.3 + $lastPoint * 0.7;
    if($totalPoint>=9.0 and $totalPoint <=10.0){
        echo "Hạng Xuất sắc";
    }
    if($totalPoint>=7.0 and $totalPoint <9.0){
        echo "Hạng Giỏi";
    }
    if($totalPoint>=5.0 and $totalPoint <7.0){
        echo "Hạng Khá";
    }
    if($totalPoint>=0.0 and $totalPoint <5.0){
        echo "Hạng Trung bình - Yếu";
    }
}
$midPoint = 8;
$lastPoint = 5;
echo "Học lực của học sinh $midPoint điểm thi giữa kỳ và $lastPoint điểm thi cuối kỳ là: ";
$result = totalPoint($midPoint, $lastPoint);
//Bài 3: Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.
echo "<br>Bài 3:";
function checkYear($year){
    if($year % 2 == 0){
        return true;
    }
    else{
        return false;
    }
}
$year = 2023;
$result = checkYear($year);
if($result == true){
    echo " Năm $year là năm chẵn";
}
if($result == false){
    echo " Năm $year là năm lẻ";
}
//Bài 4: Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
echo "<br>Bài 4: ";
for($i= 1; $i<= 100; $i++){
    echo $i. "  ";
}
//Bài 5: Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4….., 100 .Hướng dẫn: Sử dụng vòng lặp for,
// 1 biến đếm i, toán tử %.
echo "<br>Bài 5:";
for($i= 1; $i<= 100; $i++){
    if($i %2 == 0){
        echo "<b>$i </b>";
    }
    else{
        echo " $i". "  ";
    }
}
//Bài 6: Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:
  //$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
  echo "<br>Bài 6: ";
  $nam =[1990, 1991, 1992, 1993, 1994, 1995];
  foreach($nam as $value){
    echo $value. ", ";
  }
?>
