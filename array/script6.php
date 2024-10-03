<?php
$Countries=array("China"=>"Beijing","Colombia"=>"Bogota","Comoros"=>"Moroni","Costa Rica"=>"San José","France"=>"Paris");

print_r($Countries);
 foreach($Countries as $key => $val)
{
    echo "$key=>$val<br>";
}
?>