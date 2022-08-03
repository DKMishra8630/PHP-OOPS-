<?php
//constructor : we don't need to use object again and again
//defining a class
class arithmetic_operations{

    public $a,$b,$c;

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

$obj_b = new arithmetic_operations();
$obj_b->a=20;
$obj_b->b=10;
echo "your sum is : ".$obj_b->sum().'</br>';


// humein baar baar proerties ki value nahi deni padegi.........................
// what constructor do 
// it's called automatically when we import the class under certain object
class arithmetic_operation_b{
    public $a,$b,$c;
    function __construct($d,$e){
        $this->a=$d;
        $this->b=$e;
    
    }

    function sum(){
        $this->c=$this->a+$this->b;
        return $this->c;
    }

    function sub(){
        $this->c=$this->a-$this->b;
        return $this->c;
    }

    function multiply(){
        $this->c=$this->a*$this->b;
        return $this->c;
    }

    function division(){
        $this->c= $this->a / $this->b;
        return $this->c;
    }


}
$obj_b=new arithmetic_operation_b(10,2);//these are the value of d,e 
echo "your sum is : ".$obj_b->sum().'</br>';
echo "your subtraction  is : ".$obj_b->sub().'</br>';
echo "your multiplication  is : ".$obj_b->multiply().'</br>';
echo "your division  is : ".$obj_b->division().'</br>';

$obj_c= new arithmetic_operation_b(100,10);
echo "your sum  is : ".$obj_b->sum().'</br>';
echo "your subtraction  is : ".$obj_b->sub().'</br>';
echo "your multiplication  is : ".$obj_b->multiply().'</br>';
echo "your division  is : ".$obj_b->division().'</br>';







?>