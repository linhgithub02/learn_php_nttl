<?php
// ket noi den phpmyAdmin
$dbh= mysqli_connect('localhost', 'root', '');
if(!$dbh){
    die ("không thể kết nối: " .mysqli_error());
}
else {
    echo "Kết nối thành công!";
}
// tao database quan_ly_sinh_vien
/*
$sql_create_db = " CREATE DATABASE quan_ly_sinh_vien";
$result= mysqli_query($dbh, $sql_create_db);
if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Tao databese thành công!";
}
*/
// ket noi den database quan_ly_sinh_vien
if(!mysqli_select_db($dbh, 'quan_ly_sinh_vien')){
    die ("khong the ket noi " .mysqli_error());
}
else{
    echo "ket noi den database thanh cong!";
}
$sql_insert_into_danh_sach_san_pham= "
 INSERT INTO danh_sach_san_pham(ma_san_pham, ten_san_pham, gia_ban, so_luong_ton_kho)
  VALUES ('SP001','Dien thoai Samsung Galaxy A52','6.500.000', '20')
  ";
  $result= mysqli_query($dbh, $sql_insert_into_danh_sach_san_pham);
  if(!$result){
     die ("Không thể thực thi: " .mysqli_error());
 }else{
     echo "Them moi san pham Samsung Galaxy A52 thành công!";
 }
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
/*
if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Thành công!";
}
*/
?>