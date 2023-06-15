<?php
//Bài 1:
// ket noi den phpmyAdmin
$dbh= mysqli_connect('localhost', 'root', '');
if(!$dbh){
    die ("không thể kết nối: " .mysqli_error());
}
else {
    echo "Kết nối phpmyAdmin thành công!";
}
echo "<br>";
// tao database quan_ly_ban_hang
$sql_create_db = " CREATE DATABASE quan_ly_ban_hang";
$result= mysqli_query($dbh, $sql_create_db);
if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Tao database quan_ly_ban_hang thành công!";
}

// ket noi den database quan_ly_ban_hang
if(!mysqli_select_db($dbh, 'quan_ly_ban_hang')){
    die ("khong the ket noi " .mysqli_error());
}
else{
    echo "ket noi den database quan_ly_ban_hang thanh cong!";
}
echo "<br>";
//1.1.  Tạo bảng "customers", gồm các trường id, name, email và phone.
$sql_create_table_customers = "CREATE TABLE customers(
    customers_id varchar(6) primary key,
    customers_name varchar(50) null,
    customers_email varchar(20) null,
    customers_phone varchar(10)  null)
 ";
 $result= mysqli_query($dbh, $sql_create_table_customers);
 if(!$result){
     die ("Không thể thực thi: " .mysqli_error());
 }else{
     echo "Tao bang customers thành công!";
 }
//1.2.  Thêm 5 khách hàng mới vào bảng "customers".
$sql_insert_into_customers= "
INSERT INTO customers(customers_id, customers_name, customers_email, customers_phone)
 VALUES ('1','NguyenLinh','linh123@gmail.com', '0123456789'),
 ('2','NguyenLinh','example@gmail.com', '0123456789'),
 ('3','NguyenLinh','example@gmail.com', '0123456789'),
 ('4','NguyenLinh','example@gmail.com', '0123456789'),
 ('5','NguyenLinh','example@gmail.com', '0123456789')
 ";
 $result= mysqli_query($dbh, $sql_insert_into_customers);
 if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Them moi 5 customers thành công!";
}
//1.3.  Sửa thông tin của một khách hàng có id là 1.
$sql_update_into_customers = "
    UPDATE customers SET customers_name='Nguyen Thuy Linh' WHERE customers_id='1 '";
 $result= mysqli_query($dbh, $sql_update_into_customers);
    if(!$result){
       die ("Không thể thực thi: " .mysqli_error());
   }else{
       echo "Update customer 1 thành công!";
   }
//1.4.  Xoá một khách hàng có id là 5.
$sql_detete_customers= "DELETE FROM customers WHERE customers_id= '5' ";
$result= mysqli_query($dbh, $sql_detete_customers);
if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Delete customer 5 thành công!";
}
//1.5.  Lấy tất cả các khách hàng có email là "example@gmail.com".
$sql_select_customers= "SELECT * FROM customers WHERE customers_email= 'example@gmail.com'";
$result= mysqli_query($dbh, $sql_select_customers);
if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Select customer co email la:example@gmail.com thành công!";
}
//1.6.1  Tạo bảng "orders", gồm các trường id, customer_id, total_amount và order_date. 
$sql_create_table_orders = "CREATE TABLE orders(
    orders_id varchar(6) primary key,
    customers_id varchar(6) not null,
    total_amount varchar(20) not null,
    order_date date not null)
 ";
 $result= mysqli_query($dbh, $sql_create_table_orders);
 if(!$result){
     die ("Không thể thực thi: " .mysqli_error());
 }else{
     echo "Tao bang orders thành công!";
 }
//1.6.2  (Thêm ràng buộc cho khoá ngoại delete cascade)
$sql_references_orders= "ALTER TABLE orders ADD FOREIGN KEY (customers_id) REFERENCES customers(customers_id)";
$result= mysqli_query($dbh, $sql_references_orders);
if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Tao rang buoc khoa ngoai thành công!";
}
//1.7.  Thêm một đơn hàng mới vào bảng "orders" cho khách hàng có id là 3.
$sql_insert_into_orders= " INSERT INTO orders (orders_id, customers_id, total_amount, order_date)
VALUES  ('1', '1', '500', '2023/05/06'),
 ('2', '2', '500', '2023/05/06'),
 ('3', '3', '500', '2023/05/06'),
 ('4', '3', '500', '2023/05/06'),
 ('5', '3', '500', '2023/05/06'),
 ('6', '3', '500', '2023/05/06'),
 ('7', '3', '500', '2023/05/06')
";
$result= mysqli_query($dbh, $sql_insert_into_orders);
if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Them moi 7 don hang thành công!";
}
//1.8.  Lấy tất cả các đơn hàng của khách hàng có id là 3.
$sql_select_orders= " SELECT * FROM orders WHERE customers_id= '3' ";
$result= mysqli_query($dbh, $sql_select_orders);
if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Lấy tất cả các đơn hàng của khách hàng có id là 3";
}
//1.9.  Lấy danh sách khách hàng và đơn hàng của họ, sử dụng câu lệnh JOIN.
$sql_select_customers= " SELECT orders_id,customers.customers_id,customers_name,customers_email, customers_phone 
FROM customers join orders on customers.customers_id= orders.customers_id
WHERE customers.customers_id= orders.customers_id; ";
$result= mysqli_query($dbh, $sql_select_customers);
if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Lấy danh sách khách hàng và đơn hàng của họ";
}
//1.10.  Lấy danh sách email của khách hàng, sử dụng hàm DISTINCT.
$sql_select_customers_email= " SELECT DISTINCT(customers_email)
FROM customers ";
$result= mysqli_query($dbh, $sql_select_customers_email);
if(!$result){
    die ("Không thể thực thi: " .mysqli_error());
}else{
    echo "Lấy danh sách email của khách hàng";
}
?>