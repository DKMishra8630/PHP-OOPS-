<?php
// INTERFERENCE
class fruits{
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
    public function show(){
        echo $this->a1."<br>";
        echo $this->a2."<br>";
        echo $this->a3."<br>";
        echo $this->a4."<br>";
    }
}
class groceries extends fruits{
    public $groceries2;
    function show2(){
        $this->groceries2="potato"."<br>"."tomato"."<br>"."chilli"."<br>"."guava"."br";
        echo $this->groceries2."<br>";
        $this->show();
    }
}

$obj=new groceries();
$obj->show2();


?>