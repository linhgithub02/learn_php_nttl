<!-- 
Bài tập Tạo lớp Người:
Tạo một lớp Nguoi với các thuộc tính tên, tuổi và địa chỉ.
Tạo phương thức để hiển thị thông tin người.
 -->
<?php
class Person{
    protected $name;
    protected $age;
    protected $add;

    public function __construct ($name, $age, $add)
    {
        $this->name= $name;
        $this->age= $age;
        $this->add= $add;
    }
    public function showName()
    {
        return $this->name;
    }
    public function showAge()
    {
        return $this->age;
    }
    public function showAdd()
    {
        return $this->add;
    }
}
$name= "Nguyễn Thị Thùy Linh";
$age= "21";
$add= "Thanh Hóa";
$person = new Person($name, $age, $add);
echo "Name: ".$person->showName(). ";<br>";
echo " Age: ".$person->showAge(). ";<br>";
echo " Address: ".$person->showAdd(). ".";