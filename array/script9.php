<?php
$Countries=array("China"=>"Beijing","Colombia"=>"Bogota","Comoros"=>"Moroni","Costa Rica"=>"San José","France"=>"Paris");

sort($Countries);

print_r($Countries);
 foreach($Countries as $key => $val)
{
    echo "<br>";
    echo "$key=>$val<br>";
}

rsort($Countries);

print_r($Countries);
 foreach($Countries as $val => $key)
{
    echo "<br>";
    echo "$val=>$key<br>";
}

?>