<?php
// Bai 2: sqli_query
// ket noi den phpmyAdmin
$dbh= mysqli_connect('localhost', 'root', '');
if(!$dbh){
    die ("không thể kết nối: " .mysqli_error());
}
else {
    echo "Kết nối phpmyAdmin thành công!";
}
echo "<br>";
// tao database quan_ly_nhan_vien_va_ban_hang
/*
$sql_create_db = " CREATE DATABASE quan_ly_nhan_vien_va_ban_hang";
$result= mysqli_query($dbh, $sql_create_db);
if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Tao database quan_ly_nhan_vien_va_ban_hang thành công!";
*/
// ket noi den database quan_ly_nhan_vien_va_ban_hang
if(!mysqli_select_db($dbh, 'quan_ly_nhan_vien_va_ban_hang')){
    die ("khong the ket noi " .mysqli_error());
}
else{
    echo "ket noi den database quan_ly_nhan_vien_va_ban_hang thanh cong!";
}
echo "<br>";
// 2.1. Tạo các quan hệ và khai báo các khóa chính, khóa ngoại của quan hệ.
// chay all table, nen echo"<br>"; cho dep
// table KHACHHANG
/*
$khach_hang= "CREATE TABLE KHACHHANG (
    MAKH char(4) primary key,
    HOTEN varchar(40) not null,
    DCHI varchar(50) null,
    SODT varchar(20) null ,
    NGAYSINH datetime null ,
    NGDK datetime not null,
    DOANHSO varchar(20) not null
)";
$result1= mysqli_query($dbh, $khach_hang);
if(!$result1){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Tao table KHACHHANG thành công!";
}echo"<br>";

//TABLE NHANVIEN
$nhan_vien= "CREATE TABLE NHANVIEN (
    MANV char(4) primary key,
    HOTEN varchar(40) not null,
    SODT varchar(20) null ,
    NGVL datetime not null
)";
$result2= mysqli_query($dbh, $nhan_vien);
if(!$result2){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Tao table NHANVIEN thành công!";
}echo"<br>";
//TABLE SANPHAM
$san_pham= "CREATE TABLE SANPHAM (
    MASP char(4) primary key,
    TENSP varchar(40) null,
    DVT varchar(20) not null,
    NUOCSX varchar(40) null,
    GIA varchar(20) not null
)";
$result3= mysqli_query($dbh, $san_pham);
if(!$result3){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Tao table SANPHAM thành công!";
}echo"<br>";
//TABLE HOADON
$hoa_don= "CREATE TABLE HOADON (
    SOHD int primary key,
    NGHD datetime not null ,
    MAKH char(4) not null,
    MANV char(4) not null,
    TRIGIA varchar(20) not null
)";
$result4= mysqli_query($dbh, $hoa_don);
if(!$result4){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Tao table HOADON thành công!";
}echo"<br>";
//TABLE CTHD
$cthd= "CREATE TABLE CTHD (
    SOHD int not null,
    MASP char(4) not null,
    SL int not null
)";
$result5= mysqli_query($dbh, $cthd);
if(!$result5){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Tao table CTHD thành công!";
}
*/
Insert du lieu:
$insert_khach_hang= "INSERT INTO KHACHHANG (MAKH,HOTEN,DCHI,SODT,NGAYSINH,NGDK,DOANHSO)
 VALUES ('KH01','Nguyen Van A','731 Tran Hung Dao, Q5, TpHCM', '08823451','1960/10/22','2006/07/22', '13.060.000' ),
 ('KH02','Tran Ngoc Han','23/5 Nguyen Trai, Q5, TpHCM', '08823451','1974/10/22','2006/07/30' , '3.060.000' ),
 ('KH03','Nguyen Van A','731 Tran Hung Dao, Q5, TpHCM', '08823451','1960/10/22','2006/07/22' , '260.000'),
 ('KH04','Nguyen Van A','731 Tran Hung Dao, Q5, TpHCM', '08823451','1960/10/22','2006/07/22' , '13.060.000'),
 ('KH05','Nguyen Van A','731 Tran Hung Dao, Q5, TpHCM', '08823451','1960/10/22','2006/07/22' , '13.060.000' )
 ";
 $result= mysqli_query($dbh, $insert_khach_hang);
 if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Them moi 5 khach hang thành công!";
}

$insert_nhan_vien= "INSERT INTO NHANVIEN (MANV,HOTEN,SODT,NGVL)
 VALUES ('NV01','Nguyen Nhu Nhut', '08823451','2006/07/22'),
 ('NV02','Le Thi Phi Yen', '08823451','2006/07/22'),
 ('NV03','Nguyen Van B', '08823451','2006/07/22'),
 ('NV04','Ngo Thanh Tuan', '08823451','2006/07/22'),
 ('NV05','Nguyen Thi Truc Thanh', '08823451','2006/07/22')
 ";
 $result= mysqli_query($dbh, $insert_nhan_vien);
 if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Them moi 5 nhan vien thành công!";
}

$insert_hoa_don= "INSERT INTO HOADON ( SOHD, NGHD, MAKH, MANV, TRIGIA)
 VALUES ('1001','2006/07/22', 'KH01', 'NV01', '320.000'),
 ('1002','2006/07/22', 'KH02', 'NV01', '320.000'),
 ('1003','2006/07/22', 'KH03', 'NV02', '320.000'),
 ('1004','2006/07/22', 'KH04', 'NV03', '320.000'),
 ('1005','2006/07/22', 'KH04', 'NV04', '320.000')
 ";
 $result= mysqli_query($dbh, $insert_hoa_don);
 if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Them moi 5 hoa don thành công!";
}
$sql = "INSERT INTO SANPHAM ( MASP, TENSP, DVT, NUOCSX, GIA)
VALUES ('BC01','But chi', 'cay', 'Singapore', '3.000'),
('BC02','But chi', 'hop', 'Singapore', '35.000'),
('BB01','But bi', 'cay', 'Viet Nam', '5.000'),
('BB02','But bi', 'hop', 'Thai Lam ', '50.000'),
('TV01','Tap 100 giay ', 'quyen', 'Trung Quoc', '50.000')
";
$result= mysqli_query($dbh, $sql);
 if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Them moi 5 san pham thành công!";
}
$insert_cthd= "INSERT INTO CTHD ( SOHD, MASP, SL)
VALUES ('1001','BB01', '10'),
('1002','BB02', '10'),
('1003','BC01', '10'),
('1004','BB01', '110'),
('1005','TV01', '10')
 ";
 $result= mysqli_query($dbh, $insert_cthd);
 if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Them moi 5 chi tiet hoa don thành công!";
}
//--Thêm vào thuộc tính GHICHU có kiểu dữ liệu varchar(20) cho quan hệ SANPHAM.
$sql = "ALTER TABLE SANPHAM ADD GHICHU varchar(20) null ";
 $result= mysqli_query($dbh, $sql);
 if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Them thuoc tinh ghi chu vao table san pham thành công!";
}
//--Thêm vào thuộc tính LOAIKH có kiểu dữ liệu là tinyint cho quan hệ KHACHHANG.
$sql = "ALTER TABLE KHACHHANG ADD LOAIKH tinyint null ";
 $result= mysqli_query($dbh, $sql);
 if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Them thuoc tinh loai kh vao table khachang thành công!";
}
//--Cập nhật tên “Nguyễn Văn B” cho dữ liệu Khách Hàng có mã là KH01
$sql = "UPDATE KHACHHANG SET HOTEN= 'Nguyen Van B' WHERE MAKH= 'KH01'";
 $result= mysqli_query($dbh, $sql);
 if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Cap nhat ho ten KH01 thành công!";
}
// Cập nhật tên “Nguyễn Văn Hoan” cho dữ liệu Khách Hàng có mã là KH09 và năm đăng ký là 2007
$sql = "UPDATE KHACHHANG SET HOTEN= 'Nguyen Van Hoan' WHERE MAKH= 'KH05' and year(NGDK) ='2006'";
 $result= mysqli_query($dbh, $sql);
 if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Cap nhat ho ten KH05 thành công!";
}
// Sửa kiểu dữ liệu của thuộc tính GHICHU trong quan hệ SANPHAM thành varchar(100).
$sql = "ALTER TABLE SANPHAM MODIFY GHICHU varchar(100) ";
 $result= mysqli_query($dbh, $sql);
 if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Thay kieu du lieu cua thuoc tinh ghi chu thành công!";
}
// Xóa thuộc tính GHICHU trong quan hệ SANPHAM.
$sql = "ALTER TABLE SANPHAM DROP COLUMN GHICHU  ";
 $result= mysqli_query($dbh, $sql);
 if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Xoa thuoc tinh ghi chu thành công!";
}
// Xoá tất cả dữ liệu khách hàng có năm sinh 1971
$sql ="DELETE  FROM KHACHHANG  WHERE  year(NGAYSINH) ='1974' ";
 $result= mysqli_query($dbh, $sql);
 if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Xoá tất cả dữ liệu khách hàng có năm sinh 1971 thành công!";
}
// Xoá tất cả dữ liệu khách hàng có năm sinh 1971 và năm đăng ký 2006
$sql = "DELETE  FROM KHACHHANG  WHERE  year(NGAYSINH) ='1971' and year(NGDK)= '2006' ";
 $result= mysqli_query($dbh, $sql);
 if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Xoá tất cả dữ liệu khách hàng có năm sinh 1971 và năm đăng ký 2006 thành công!";
}
// Xoá tất hoá đơn có mã KH = KH01
$sql = "DELETE  FROM HOADON  WHERE  MAKH= 'KH01' ";
 $result= mysqli_query($dbh, $sql);
 if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Xoá tất hoá đơn có mã KH = KH01 thành công!";
}
?>