<?php

function cubaOfAnInteger($input){
    return $input =$input*$input*$input;
}
echo cubaOfAnInteger(4);
// Câu 1: đếm số ký tự trong một chuỗi sử dụng hàm strlen()
echo "<br>";
function countTheNumberOfCharacters($string){
    return strlen($string);
}
echo "Câu 1:";
echo countTheNumberOfCharacters("Nguyen Thuy Linh");
// Câu 2:
echo "<br>";
function countTheNumberOfWords($string){
    return str_word_count($string);
}
echo "Câu 2:";
echo countTheNumberOfWords("Nguyen Thuy Linh");
//Câu 3: reverseAString ; return strrev($string) -đảo ngược một chuỗi
echo "<br>";
function reverseAString($string){
    return strrev($string);
}
echo "Câu 3:";
echo reverseAString("Nguyen Thuy Linh");
//Câu 4: searchForASubstringInAString ; return strpos() - tìm kiếm một chuỗi con
echo "<br>";
function searchForASubstringInAString($string1, $string2){
    return strpos($string1, $string2);
}
echo "Câu 4:";
echo searchForASubstringInAString( "Nguyen Thuy Linh", " ");
//Câu 5:  thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác
echo "<br>";
function replaceASubstringInOneString($string1,$string2,$string3){
    return str_replace($string1, $string2, $string3);
}
echo "Câu 5:";
echo replaceASubstringInOneString("Thuy","Thi","Nguyen Thuy Linh");
//Câu 6: kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp()
/*Hàm strncmp() sẽ so sánh hai chuỗi phân biệt chữ hoa chữ thường, hàm trả về số âm nếu chuỗi 
thứ nhất nhỏ hơn chuỗi thứ 2, trả về 0 nếu hai chuỗi bằng nhau và trả về số dương nếu chuỗi thứ nhất lớn hơn chuỗi thứ 2.*/ 
echo "<br>";
function checkTheFirstOfString1IsString2($string1, $string2, $len){
     return strncmp($string1, $string2, $len);
}
echo "Câu 6:";
echo checkTheFirstOfString1IsString2("mmmNguyen ","mmm",4);
// Câu 7: strtoupper() - một chuỗi thành chữ hoa
echo "<br>";
function countTheNumberOfWordsb($string){
    return strtoupper($string);
}
echo "Câu 7:";
echo countTheNumberOfWordsb("Nguyen Thuy Linh");
// Câu 8: strtolower() - một chuỗi thành chữ thường
echo "<br>";
function countTheNumberOfWordsa($string){
    return strtolower($string);
}
echo "Câu 8:";
echo countTheNumberOfWordsa("Nguyen Thuy Linh");
// Câu 9: ucwords() - một chuỗi thành chuỗi in hoa chữ cái đầu tiên
echo "<br>";
function convertTheFirst($string){
    return ucwords($string);
}
echo "Câu 9:";
echo convertTheFirst("nguyen thuy linh");
// Câu 10: loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim()
echo "<br>";
function deleteWhite($string){
    return trim($string);
}
echo "Câu 10:";
echo deleteWhite("   LinhNguyen   ");
// Câu 11: loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim()
echo "<br>";
function deleteTheFirst($string, $character){
    return ltrim($string, $character);
}
echo "Câu 11:";
echo deleteTheFirst("    mNguyen Linh", "m ");

// Câu 12: loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim()
echo "<br>";
function deleteTheLast($string1, $character){
    return rtrim($string1, $character);
}
echo "Câu 12:";
echo deleteTheLast("Nguyenm","m");
//Câu 13: tách một chuỗi thành một mảng các phần tử sử dụng hàm explode()
echo"<br>";
function stringToArray($string){
  print_r (explode(" ", $string));
}
echo "Câu 13:";
echo stringToArray("Nguyễn Thị Thùy Linh");
//Câu 14: nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode()
echo"<br>";
function arrayToString($array){
   $string = implode(",", $array);
   echo $string;
}
echo "Câu 14:";
echo arrayToString(array('Nguyễn', 'Thùy', 'Linh!'));
//Câu 15: thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad()
echo "<br>";
function insetOneString($string1,$length, $string2){
    return str_pad($string1,$length, $string2);
}
echo "Câu 15:";
echo insetOneString("Nguyen",12," Linh");
//Câu 16: kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr()
echo "<br>";
function checkString1IsString2($string1, $character){
    return strrchr($string1, $character);
}
echo "Câu 16:";
echo checkString1IsString2("Nguyenmmm ","ye");
//Câu 17: kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr()
echo "<br>";
function checkString($string1, $character){
    return strstr($string1, $character);
}
echo "Câu 17:";
echo checkString("Nguyen Thuy Linh ","Thuy Linh");
//Câu 18: thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace()
echo "<br>";
function replaceString ( $string1, $string2,){
    return preg_replace("<^A-Za-z0-9>", $string1, $string2);
}
echo"Câu 18:";
echo replaceString("/@/ "," Linh  ","Nguyễn Thùy @");
//Câu 19:  kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int()
echo "<br>";
function checkStringIsInt($string){
    if (is_int($string)){
        echo"Số nguyên";
    }
    else{
        echo"Không phải số nguyên";
    }
}
echo "Câu 19:";
echo checkStringIsInt(1234);
//Câu 20:kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var()
echo "<br>";
function checkEmail($string){
    $check= filter_var($string, FILTER_VALIDATE_EMAIL);
    if ($check ==true){
        echo" Là Email ";
    }
    else{
        echo"Không phải Email";
    }
}
echo "Câu 20:";
echo checkEmail("linh12gmail.com");
?>