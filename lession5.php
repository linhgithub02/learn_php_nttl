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
$sql_create_db = " CREATE DATABASE quan_ly_sinh_vien";
$result= mysqli_query($dbh, $sql_create_db);
if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Thành công!";
}

// ket noi den database quan_ly_sinh_vien
if(!mysqli_select_db($dbh, 'quan_ly_sinh_vien')){
    die ("khong the ket noi " .mysqli_error());
}
else{
    echo "ket noi den database thanh cong!";
}

//1.1 Tạo bảng danh sách sinh viên với các cột: mã sinh viên, họ tên, ngày sinh, lớp học, điểm trung bình.
$sql_create_table = "CREATE TABLE sinh_vien(
   ma_sinh_vien varchar(6) primary key,
   ho_ten varchar(50),
   ngay_sinh datetime,
   lop_hoc varchar(6) not null,
   diem_trung_binh float not null)
";
$result= mysqli_query($dbh, $sql_create_table);
if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Tao bang sinh_vien thành công!";
}
//1.2.  Thêm 5 sinh viên mới vào bảng danh sách đã tạo ở câu 1.
$sql_insert_into_sinh_vien= "
INSERT INTO sinh_vien(ma_sinh_vien, ho_ten, ngay_sinh, lop_hoc, diem_trung_binh)
 VALUES ('SV001','NguyenLinh','2002/01/02', 'K56SD1','9'),
 ('SV002','NguyenLinh','2002/01/02', 'K56SD1','9'),
 ('SV003','NguyenLinh','2002/01/02', 'K56SD1','9'),
 ('SV004','NguyenLinh','2002/01/02', 'K56SD1','9'),
 ('SV005','NguyenLinh','2002/01/02', 'K56SD1','9')
 ";
 $result= mysqli_query($dbh, $sql_insert_into_sinh_vien);
 if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Them moi 5 sinh vien thành công!";
}
//1.3. Cập nhật điểm trung bình của sinh viên có mã "SV001" thành 8.5.
$sql_update_into_sinh_vien = "
    UPDATE sinh_vien SET diem_trung_binh='8.5' WHERE ma_sinh_vien='SV001 '";
 $result= mysqli_query($dbh, $sql_update_into_sinh_vien);
    if(!$result){
       die ("Không thể thực thi: " .mysqli_error());
   }else{
       echo "Update SV001 thành công!";
   }
//1.4. Xoá thông tin của sinh viên có mã "SV003" khỏi bảng danh sách.
   $sql_detete_sinh_vien= "DELETE FROM sinh_vien WHERE ma_sinh_vien= 'SV003' ";
$result= mysqli_query($dbh, $sql_detete_sinh_vien);
if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Delete SV003 thành công!";
}
// 2.1. Tạo bảng lịch sử giao dịch với các cột: ngày giao dịch, loại giao dịch, số tiền, mô tả.
// ket noi den phpmyAdmin, ket noi den CSDL quan_ly_sinh_vien(hoac tao moi CSDL cung duoc), tao table lich_su_giao_dich
$sql_create_table_lsgd = "CREATE TABLE lich_su_giao_dich(
    ma_giao_dich varchar(6) primary key,
    ngay_giao_dich datetime,
    loai_giao_dich varchar(50),
    so_tien varchar(10),
    mo_ta varchar(100)  )
 ";
 $result= mysqli_query($dbh, $sql_create_table_lsgd);
 if(!$result){
     die ("Không thể thực thi: " .mysqli_error());
 }else{
     echo "Tao bang lich su giao dich thành công!";
 }
// 2.2. Thêm một giao dịch mới vào bảng lịch sử với thông tin: ngày giao dịch là 7/5/2023,
// loại giao dịch là "rút tiền", số tiền là 500, mô tả là "rút tiền ATM".
$sql_insert_into_lsgd= "
INSERT INTO lich_su_giao_dich(ma_giao_dich, ngay_giao_dich,loai_giao_dich,so_tien, mo_ta)
 VALUES ('1','NguyenLinh','2023/05/07', 'rut tien','500', 'rut tien ATM'),
 ('2','NguyenLinh','2023/05/07', 'rut tien','500', 'rut tien ATM'),
 ('3','NguyenLinh','2023/05/07', 'rut tien','500', 'rut tien ATM'),
 ('4','NguyenLinh','2023/05/07', 'rut tien','500', 'rut tien ATM'),
 ('5','NguyenLinh','2023/05/07', 'rut tien','500', 'rut tien ATM')
 ";
 $result= mysqli_query($dbh, $sql_insert_into_lsgd);
 if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Them moi 5 giao dich thành công!";
}
// 2.3. Cập nhật số tiền của giao dịch có số thứ tự 3 trong bảng lịch sử thành 1000.
$sql_update_into_lsgd = "
    UPDATE lich_su_giao_dich SET so_tien='1000' WHERE ma_giao_dich='3'";
 $result= mysqli_query($dbh, $sql_update_into_lsgd);
    if(!$result){
       die ("Không thể thực thi: " .mysqli_error());
   }else{
       echo "Update so tien cua giao dich 3 thành công!";
   }
// 2.4. Xoá thông tin của giao dịch có số thứ tự 5 khỏi bảng lịch sử.
$sql_detete_lsgd= "DELETE FROM lich_su_giao_dich WHERE ma_giao_dich= '5' ";
$result= mysqli_query($dbh, $sql_detete_lsgd);
if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Delete giao dich 5 thành công!";
}
//ket noi den phpmyAdmin, 
//ket noi den CSDL quan_ly_sinh_vien(hoac tao moi CSDL cung duoc), tao table danh_sach_san_pham
// 3.1. Tạo bảng danh sách sản phẩm với các cột: mã sản phẩm, tên sản phẩm, giá bán, 
//số lượng tồn kho.
$sql_create_table_danh_sach_san_pham = "CREATE TABLE danh_sach_san_pham(
    ma_san_pham varchar(6) primary key,
    ten_san_pham varchar(50),
    gia_ban varchar(20) not null,
    so_luong_ton_kho varchar(6) not null,
 ";
 $result= mysqli_query($dbh, $sql_create_table_danh_sach_san_pham);
 if(!$result){
     die ("Không thể thực thi: " .mysqli_error());
 }else{
     echo "Tao bang danh_sach_san_pham thành công!";
 }
 //3.2.  Thêm sản phẩm mới vào bảng danh sách sản phẩm với thông tin: mã sản phẩm là SP006,
 //tên sản phẩm là "Điện thoại Samsung Galaxy A52", giá bán là 6.500.000 đồng,
 //số lượng tồn kho là 20.
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
?>