<?php

$random=(rand(1,10));
$num=$_REQUEST['num'];

if($random == $num)
{
    echo "Your number is $num";
}
else
{
    echo "Sorry!!! your number is wrong";
}

?>