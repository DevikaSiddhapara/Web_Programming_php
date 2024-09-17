<?php
$number = $_REQUEST['num'];
$temp = true;

if ($number < 2) 
{
    $temp = false;
} 
else 
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $temp = false;
            break;
        }
    }
}

if ($temp) 
{
    echo "$number is a prime number";
} else 
{
    echo "$number is not a prime number";
}
