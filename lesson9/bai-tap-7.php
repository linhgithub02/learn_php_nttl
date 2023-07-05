<!-- Tạo một lớp PhanSo với các thuộc tính tử số và mẫu số.
Tạo các phương thức để thực hiện các phép toán cộng, trừ, nhân và chia giữa các phân số.
 -->
<?php
class Fraction{
    protected $a;
    protected $b;

    public function __construct($a, $b)
    {
        $this->a= $a;
        $this->b= $b;
    }
    public function addFraction(Fraction $fraction2)
    {
        return ($this->a/$this->b) + ($fraction2->a/ $fraction2->b);
    }
    public function subFraction (Fraction $fraction2)
    {
        return ($this->a/$this->b) - ($fraction2->a/ $fraction2->b);
    }
    public function mulFraction(Fraction $fraction2)
    {
        return ($this->a/$this->b) * ($fraction2->a/ $fraction2->b);
    }
    public function divFraction(Fraction $fraction2)
    {
        return ($this->a/$this->b) / ($fraction2->a/ $fraction2->b);
    }
}
//add, subtract, multiply, divide
$a= 2;
$b= 5;
$fraction= new Fraction($a, $b);
$a1= 3;
$b1= 5;
$fraction2= new Fraction($a1, $b1);
echo "Add of fraction is: ". $fraction->addFraction($fraction2). ";<br> ";
echo "Subtract of fraction is: ". $fraction->subFraction($fraction2). ";<br> ";
echo "Multiply of fraction is: ". $fraction->mulFraction($fraction2). ";<br> ";
echo "Divide of fraction is: ". $fraction->divFraction($fraction2). ".";