<?php
//class abstract
abstract class fruits{
    public $a1;
    public $a2;
    public $a3;
    public $a4;
    function __construct($a="mango",$b="banana",$c="lichi",$d="anaspati"){
        $this->a1=$a;
        $this->a2=$b;
        $this->a3=$c;
        $this->a4=$d;
    }
    public function show1(){
        echo $this->a1."<br>";
        echo $this->a2."<br>";
        echo $this->a3."<br>";
        echo $this->a4."<br>";
    }
}
class groceries extends fruits{
    public $groceries2;
    public function show(){
        $this->groceries2="potato"."<br>"."tomato"."<br>"."chilli"."<br>"."guava"."br";
        echo $this->groceries2."<br>";
        echo $this->show1()."<br>"; // here we are getting files from the abstract class
    }
} 
// $obj1=new fruits();
// echo "<h1>fruits waali class ka show bina overwrite hue chalega.....</h1>"."<br>";                          /* inko ab hum nahi chalaa sakte
                                                                                                                // dierectly object k andar leke  
// $obj1->show();   
// echo "<br>";

$obj2=new groceries();
echo "<h1>groceries waali class ka show overwrite hokar chalega.....</h1>"."<br>";
$obj2->show();

?>