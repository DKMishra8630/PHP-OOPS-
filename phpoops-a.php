<?php
//defining a class
class arithmetic_operations{

    public $a=15,$b=3,$c;  // taking default values

    function sum(){
        // calling variables inside php class-> function ->$_COOKIE
        $this->c = $this->a + $this->b;
        return $this-> c;
    }

    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c ;
    }

    function multiply(){
        $this->c = $this->a  * $this->b;
        return $this->c ;
    }

    function division(){
        $this->c = $this->a / $this->b;
        return $this->c;
    }

}
//calling function
$obj_a = new arithmetic_operations() ;
$obj_a -> a=10;
$obj_a-> b=2;
echo "your sum is : ".$obj_a->sum().'</br>';
echo "your subtration  is : ".$obj_a->sub().'</br>';
echo "your sum is : ".$obj_a->multiply().'</br>';
echo "your sum is : ".$obj_a->division().'</br>';


obj_b= new 

?>