<?php
$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];
$num3=$_REQUEST['num3'];
if($num1 > $num2)
echo "Number 1 is largest";
else
 {
    if($num2 > $num3)
    echo "Number 2 is largest";
    else
    echo "Number 3 is largest";
 }


?>