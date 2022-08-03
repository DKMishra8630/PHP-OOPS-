<?php

/* class-A :-
        (a) properties : variables  
        (b)methods : functions
 class-B :-
        (a)properties 
        (b)method
now if we want to use methods of class a in class b then we have to use "inheritance"
here
class-A : base class 
class-B : derived class
*/
class fruits{
    public $a="mango";
    public $b="jamun";
    public $c="amrood";
        function __construct($d,$e,$f){
            $this->a=$d;
            $this->b=$e;
            $this->c=$f;
            
        }
        function show1(){
            echo "<h1>YOUR FRUITS ARE :- </H1>"."<BR>";
            echo $this->a."<br>";
            echo $this->b."<br>";
            echo $this->c."<br>";


        }
}
class groceries extends fruits{
    public $vege_a;
    public $vege_b;
    public $vege_c;
    public $add3;
    public $add2;
    public $add1;

    function __construct($g,$h,$i){
        $this->vege_a=$g;
        $this->vege_b=$h;
        $this->vege_c=$i;
        $this->add1=$this->a;
        $this->add1=$this->b;
        $this->add1=$this->c;
            }
    function show(){
        echo "<h1>YOUR GROCERIES ARE :-</H1>"."<BR>";
        echo $this->a.'</br>';
        echo $this->b.'</br>';
        echo $this->c.'</br>';
        echo $this->vege_a."<br>";
        echo $this->vege_b."<br>";
        echo $this->vege_c."<br>";
    }
}

$obj_a= new fruits("apple","banana","lichi");
$obj_a->show1();

$obj_b=new groceries("cabbage","potato","tomato");
$obj_b->show();








?>