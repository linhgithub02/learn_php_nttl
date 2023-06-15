<?php

$dbh= mysqli_connect('localhost', 'root', '');
if(!$dbh)
die ("không thể kết nối: " .mysqli_error());
if(!mysqli_select_db($dbh, 'ban_hang'))
die ("Unable to select database: " .mysqli_error());

$sql_insert= "
INSERT INTO customer( `name`, `email`, `phone`)
 VALUES ('Nguyen Linh','nguyenb@gmaul.com','012345678')";
 $result= mysqli_query($dbh, $sql_insert);

/* sửa khách hàng id =1
$sql_update= "UPDATE `customer` SET
 `name`='Nguyen D',`email`='[value-3]',`phone`='123456789' WHERE `customer_id`='1'";
$result= mysqli_query($dbh, $sql_update);
*/
    // Xóa khách hàng có id=5, đã xóa
    /*
$sql_detete= "DELETE FROM `customer` WHERE `customer_id`='9' ";
$result= mysqli_query($dbh, $sql_detete);
*/

// Lấy tất cả các khách hàng có email là "example@gmail.com".
/*
$sql_select = " SELECT `name`, `phone` FROM customer
WHERE `email`='example@gmail.com' ";
$result= mysqli_query($dbh, $sql_select);
/*
$sql_inset_khach_hang= "INSERT INTO `khachhang`(`MAKH`, `HOTEN`, `DCHI`, `NGSINH`, `NGDK`, `DOANHSO`, `SODT`) 
VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')";
$result= mysqli_query($dbh, $sql_insert_khachhang);
*/
if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Thành công!";
}

?>