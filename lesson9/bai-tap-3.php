<!-- Tạo một lớp MangSoNguyen với thuộc tính là một mảng các số nguyên.
Tạo các phương thức để tính tổng, trung bình, và phần tử lớn nhất của mảng. -->
<?php
class IntegerArray {
    protected $array;

    public function __construct ($array)
    {
        $this->array=$array;
    }

    public function sumArray ()
    {
        return array_sum($this->array);
    }

    public function calAVG ()
    {
        $count= count($this->array);
        if($count === 0)
        {
            return 0;
        }
        return ($this->sumArray()) / $count;
    }

    public function findMax()
    {
        return max($this->array);
    }
}
$array= [1,2,3,4,5];
$intergerArray = new IntegerArray($array);
echo "Sum of array is: " .$intergerArray->sumArray(). ";<br>";
echo " AVG of array is: " .$intergerArray->calAVG() .  ";<br>";
echo " Max of array is: " .$intergerArray->findMax(). ".";