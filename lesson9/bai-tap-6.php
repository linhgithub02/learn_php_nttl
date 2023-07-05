<!-- Tạo một lớp XeHoi với các thuộc tính là hãng xe, màu sắc và năm sản xuất.
Tạo phương thức để hiển thị thông tin đầy đủ của xe. -->
<?php
class Car{
    protected $vehicle_make;
    protected $color;
    protected $year_of_manufacture;

    public function __construct($vehicle_make,$color,$year_of_manufacture )
    {
        $this->vehicle_make= $vehicle_make;
        $this->color= $color;
        $this->year_of_manufacture= $year_of_manufacture;
    }
    public function showCarVehicleMake()
    {
        return  $this->vehicle_make;
    }
    public function showCarColor()
    {
        return $this->color;
    }
    public function showCarYeaOfManufacture()
    {
        return $this->year_of_manufacture;
    }
}
$vehicle_make= "Vinfast";
$color= "black";
$year_of_manufacture= "2020 ";
$car = new Car($vehicle_make,$color,$year_of_manufacture);
echo "Vehicle make: ".$car->showCarVehicleMake(). ";<br>";
echo " Color: ".$car->showCarColor(). ";<br>";
echo " Year of manufacture: ".$car->showCarYeaOfManufacture() .".";