<?php

$input=$_REQUEST['num'];
$fac=1;

for ($i=$input; $i>=1 ;$i--)
{
    $fac=$fac*$i;
}

echo "The factorial is $fac ";


?>