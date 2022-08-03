<?php
//ABSTRACT MODIFIER
class fruits{
    protected $a1;
    public $a2;
    protected $a3;
    public $a4;
    private $private;
    function __construct($a="mango",$b="banana",$c="lichi",$d="anaspati",$private="private"){
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
        $this->groceries2="potato"."<br>"."tomato"."<br>"."chilli"."<br>"."guava"."<br>";
        echo $this->groceries2."<br>";
        $this->show();
    }
}
// ab yahan par class k baahar a1 and a3 ki value alter nahi kar sakte...
$obj=new groceries();
$obj->a2="santara";
$obj->a4="amrood";
// $obj->a1="jamun";
$obj->show2();

echo "<br>"."<br>". $obj->a2;
// echo $obj->private;                  cannot be done 



/*summary :-
public : can be used at any place 
protected : can be used in same class or it can be used in derived class but cannot be used outside the class
private : can only be used inside the same class itself*/ 
?>