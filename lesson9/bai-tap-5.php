<!-- Tạo một lớp SinhVien với các thuộc tính mã số, họ và tên.
Tạo lớp DanhSachSinhVien với các phương thức thêm sinh viên mới và hiển thị danh sách sinh viên. -->
<?php

class Student {
    protected $id;
    protected $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getID() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }
}

class ListStudent {
    protected $students = [];
    public function addStudent(Student $student)
    {
        $this->students[] = $student;
    }

    public function displayStudentList()
    {
        foreach ($this->students as $student) {
            print "Mã số: " . $student->getID() . ", Họ và tên: " . $student->getName() .";<br>    ";
        }
    }
}
$studentList = new ListStudent();

$student1 = new Student('SV001', 'Nguyen Linh');
$studentList->addStudent($student1);

$student2 = new Student('SV002', 'ABC');
$studentList->addStudent($student2);

$studentList->displayStudentList();

?>