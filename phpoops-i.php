<?php
//late static binding 
// idhar hum function toh chalaaayenge parent class ka but hum chaahenge ki value aaye derived class se 
//ye specific kaam self:: ki jagah static:: ka use karke kiya jaayega 
echo "<b> yahaan par hum function call karenge parent class ka but variable ki value uth k aayegi derived class se using static:: in parent class se </b>"."<br>";

class parent_class{
    public static $name="yahoo";
    public static function show1(){
        echo self::$name."<br>";
    }
}
class derived extends parent_class{
    public static $name="baba";
    
} 
echo "yahaan wo parent_class k andar jo value thi name ki bas usi ko print karegaa kyunki humne parent class ko hi call kiya hai "."<br>";
parent_class::show1();
echo "yahaan par humne object banaaya hai derived class ka but kyunki function parent_class se uth k aa rahaa hai and wahaan self ka prayog hua hai that`s why wo parent class se hi value ko uthaayegaa "."<br>";
derived::show1();
echo "<br>"."<br>"."<br>"."<br>"."<br>";
echo "<b>agar hum chahte hai ki yadi hum derived class ko hi object banaaye and function parent class ka ho but value fir bhi derived class se uth k aaye na ki parent class se then we have to use static:: instead of self:: in parent class "."<br>";
class parent_class2{
    public static $name2="yahoo";
    public static function show2(){
        echo static::$name2."<br>";
    }
}
class derived2 extends parent_class2{
    public static $name2="baba";
    
} 
derived2::show2();

?> 

