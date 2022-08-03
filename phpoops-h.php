<?php
// static variable and static function
class fruits{
    public static $a1;
    public static $a2;
    public static $a3;
    public static $a4;
    
    public static function show1(){
        echo self::$a1="lichi"."<br>";
        echo self::$a2="guava"."<br>";
        echo self::$a3="banana"."<br>";
        echo self::$a4="apple"."<br>";
        
    }
}
class groceries extends fruits{
    public static $groceries2;
    public static function show(){
        self::$groceries2="potato"."<br>"."tomato"."<br>"."chilli"."<br>"."guava"."br";
        echo self::$groceries2."<br>";
        parent::show1();
    }
}
echo "<h1>fruits waali class ka show1 chalegaa.....</h1>"."<br>";
fruits::show1();
echo "<h1>groceries waali class ka show chalegaa</h1>";
groceries::show();
echo"<h1> ab hum fruits waali class ka static value ko change karne waale hai </h1>"."<br>";
fruits::$a1="mango";
fruits::show1(); 
echo "<br>"."print groceries"."<br>";
groceries::show();




?>