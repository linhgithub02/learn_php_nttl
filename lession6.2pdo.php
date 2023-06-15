<?php
// Bai 2: PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banhang";
try {
  $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*
  $sql = "INSERT INTO KHACHHANG (MAKH,HOTEN,DCHI,SODT,NGAYSINH,NGDK,DOANHSO)
    VALUES ('KH01','Nguyen Van A','731 Tran Hung Dao, Q5, TpHCM', '08823451','1960/10/22','2006/07/22', '13.060.000' ),
    ('KH02','Tran Ngoc Han','23/5 Nguyen Trai, Q5, TpHCM', '08823451','1974/10/22','2006/07/30' , '3.060.000' ),
    ('KH03','Nguyen Van A','731 Tran Hung Dao, Q5, TpHCM', '08823451','1960/10/22','2006/07/22' , '260.000'),
    ('KH04','Nguyen Van A','731 Tran Hung Dao, Q5, TpHCM', '08823451','1960/10/22','2006/07/22' , '13.060.000'),
    ('KH05','Nguyen Van A','731 Tran Hung Dao, Q5, TpHCM', '08823451','1960/10/22','2006/07/22' , '13.060.000' )";
  // use exec() because no results are returned: su dung ham exec vi khong tra ve ket qua nao
  $conn->exec($sql);
  echo "Them moi 5 khach hang thanhcong!<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$sql = "INSERT INTO NHANVIEN (MANV,HOTEN,SODT,NGVL)
  VALUES ('NV01','Nguyen Nhu Nhut', '08823451','2006/07/22'),
 ('NV02','Le Thi Phi Yen', '08823451','2006/07/22'),
   ('NV03','Nguyen Van B', '08823451','2006/07/22'),
  ('NV04','Ngo Thanh Tuan', '08823451','2006/07/22'),
  ('NV05','Nguyen Thi Truc Thanh', '08823451','2006/07/22')";
  // use exec() because no results are returned: su dung ham exec vi khong tra ve ket qua nao
  $conn->exec($sql);
  echo "Them moi 5 nhan vien thanhcong!<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$sql = "INSERT INTO HOADON ( SOHD, NGHD, MAKH, MANV, TRIGIA)
VALUES ('1001','2006/07/22', 'KH01', 'NV01', '320.000'),
('1002','2006/07/22', 'KH02', 'NV01', '320.000'),
('1003','2006/07/22', 'KH03', 'NV02', '320.000'),
('1004','2006/07/22', 'KH04', 'NV03', '320.000'),
('1005','2006/07/22', 'KH04', 'NV04', '320.000')";
  // use exec() because no results are returned: su dung ham exec vi khong tra ve ket qua nao
  $conn->exec($sql);
  echo "Them moi 5 hoa don thanhcong!<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$sql = "INSERT INTO SANPHAM ( MASP, TENSP, DVT, NUOCSX, GIA)
VALUES ('BC01','But chi', 'cay', 'Singapore', '3.000'),
('BC02','But chi', 'hop', 'Singapore', '35.000'),
('BB01','But bi', 'cay', 'Viet Nam', '5.000'),
('BB02','But bi', 'hop', 'Thai Lam ', '50.000'),
('TV01','Tap 100 giay ', 'quyen', 'Trung Quoc', '50.000')
";
  // use exec() because no results are returned: su dung ham exec vi khong tra ve ket qua nao
  $conn->exec($sql);
  echo "Them moi 5 san pham thanhcong!<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$sql = "INSERT INTO CTHD ( SOHD, MASP, SL)
VALUES ('1001','BB01', '10'),
('1002','BB02', '10'),
('1003','BC01', '10'),
('1004','BB01', '110'),
('1005','Tv01', '10')
";
  // use exec() because no results are returned: su dung ham exec vi khong tra ve ket qua nao
  $conn->exec($sql);
  echo "Them moi 5 chi tiet hoa don thanhcong!<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
// Thêm vào thuộc tính GHICHU có kiểu dữ liệu varchar(20) cho quan hệ SANPHAM.
$sql = "ALTER TABLE SANPHAM ADD GHICHU varchar(20) null ";
  // use exec() because no results are returned: su dung ham exec vi khong tra ve ket qua nao
  $conn->exec($sql);
  echo "Them moi thuoc tinh ghi chu thanhcong!<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
// Thêm vào thuộc tính LOAIKH có kiểu dữ liệu là tinyint cho quan hệ KHACHHANG.
$sql = "ALTER TABLE KHACHHANG ADD LOAIKH tinyint null ";
  // use exec() because no results are returned: su dung ham exec vi khong tra ve ket qua nao
  $conn->exec($sql);
  echo "Them moi thuoc tinh ghi chu thanhcong!<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
// Cập nhật tên “Nguyễn Văn B” cho dữ liệu Khách Hàng có mã là KH01
$sql = "UPDATE KHACHHANG SET HOTEN= 'Nguyen Van B' WHERE MAKH= 'KH01'";
  // use exec() because no results are returned: su dung ham exec vi khong tra ve ket qua nao
  $conn->exec($sql);
  echo "Cap nhat ho ten KH01 thanhcong!<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
// Cập nhật tên “Nguyễn Văn Hoan” cho dữ liệu Khách Hàng có mã là KH09 và năm đăng ký là 2007
//chuyen du lieu-> test
$sql = "UPDATE KHACHHANG SET HOTEN= 'Nguyen Van Hoan' WHERE MAKH= 'KH05' and year(NGDK) ='2006' ";
  // use exec() because no results are returned: su dung ham exec vi khong tra ve ket qua nao
  $conn->exec($sql);
  echo "Cap nhat ho ten KH05 thanhcong!<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
// Sửa kiểu dữ liệu của thuộc tính GHICHU trong quan hệ SANPHAM thành varchar(100).
$sql = "ALTER TABLE SANPHAM MODIFY GHICHU varchar(100) ";
  // use exec() because no results are returned: su dung ham exec vi khong tra ve ket qua nao
  $conn->exec($sql);
  echo "Thay kieu du lieu cua thuoc tinh ghi chu thanhcong!<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
// Xóa thuộc tính GHICHU trong quan hệ SANPHAM.
$sql = "ALTER TABLE SANPHAM DROP COLUMN GHICHU  ";
  // use exec() because no results are returned: su dung ham exec vi khong tra ve ket qua nao
  $conn->exec($sql);
  echo "Xoa thuoc tinh ghi chu thanhcong!<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
// Xoá tất cả dữ liệu khách hàng có năm sinh 1971
//chuyen dl -> test
$sql = "DELETE  FROM KHACHHANG  WHERE  year(NGAYSINH) ='1974' ";
  // use exec() because no results are returned: su dung ham exec vi khong tra ve ket qua nao
  $conn->exec($sql);
  echo "Xoa all khach hang sinh nam 1974 thanhcong!<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
// Xoá tất cả dữ liệu khách hàng có năm sinh 1971 và năm đăng ký 2006
$sql = "DELETE  FROM KHACHHANG  WHERE  year(NGAYSINH) ='1971' and year(NGDK)= '2006' ";
  // use exec() because no results are returned: su dung ham exec vi khong tra ve ket qua nao
  $conn->exec($sql);
  echo "Xoa all khach hang sinh nam 1974 va dang ki nam 2006 thanhcong!<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

*/
// Xoá tất hoá đơn có mã KH = KH01
$sql = "DELETE  FROM HOADON  WHERE  MAKH= 'KH01' ";
  // use exec() because no results are returned: su dung ham exec vi khong tra ve ket qua nao
  $conn->exec($sql);
  echo "Xoa all hoa don cua khach hang 01 thanhcong!<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>