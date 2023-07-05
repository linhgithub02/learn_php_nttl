<!-- Tạo một lớp DongHo với các thuộc tính giờ, phút và giây.
Tạo phương thức để hiển thị thời gian dưới định dạng "HH:MM:SS" và diễn tả chức năng tăng giây. -->
<?php
class Watch{
    protected $hour;
    protected $minute;
    protected $second;
 public function __construct($hour, $minute, $second){
    $this -> hour = $hour;
    $this -> minute = $minute;
    $this -> second = $second;

 }
 public function showTheTime(){
    $hour= str_pad($this->hour,2,'0', STR_PAD_LEFT);
    $minute= str_pad($this->minute,2,'0', STR_PAD_LEFT);
    $second = str_pad($this->second,2,'0', STR_PAD_LEFT);
    print "{$hour}:{$minute}:{$second}\n";

 }
 public function increaseSeconds(){
    $this ->second++;
    if($this ->second >=60){
        $this->second = 0;
        $this -> minute++; 

         if ($this -> minute >=60){
             $this -> minute = 0;
             $this -> hour++;   
               
             if ($this -> hour >=24){
                 $this ->hour=0;
             }
          }
    }
 }
}
$watch=new watch(22,60,60);
$watch->increaseSeconds();
$watch->showTheTime();
?>
