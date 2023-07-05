<!-- 
Bài tập Tạo lớp Đặt phòng khách sạn:
Tạo một lớp DatPhong voi các thuộc tính tên, ngày đến và số đêm ở lại.
Tạo phương thức để tính tổng số tiền cần thanh toán dựa trên giá phòng. -->
<?php
class Booking{
    protected $name;
    protected $date_in;
    protected $number_day;
    protected $price;

    public function __construct($name, $date_in, $number_day, $price)
    {
        $this->name= $name;
        $this->date_in= $date_in;
        $this->number_day= $number_day;
        $this->price= $price;
    }
    public function showName()
    {
        return $this->name;
    }
    public function showDate()
    {
        return $this->date_in;
    }
    public function showNumberDay()
    {
        return $this->number_day;
    }
    public function showPrice()
    {
        return $this->price;
    }
    public function calMoney()
    {
        return $this->number_day * $this->price;
    }
}
$name= "Nguyễn Thị Thùy Linh";
$date_in= "20/12/2022";
$number_day= 6;
$price= 150.000;
$booking= new Booking ($name, $date_in,$number_day,$price);
echo "Name: " .$booking->showName(). ";   <br>  ";
echo " Date in: " .$booking->showDate(). "; <br>    ";
echo " Number of days is: " .$booking->showNumberDay(). ";  <br>   ";
echo " Price of a day is: " .$booking->showPrice(). ";  <br>   ";
echo " Total money is: " .$booking->calMoney(). ".";