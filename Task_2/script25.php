<?php 
$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];

$num1=$num1+$num2;
$num2=$num1-$num2;
$num1=$num1-$num2;

echo "After swapping:<br>Number 1=$num1<br>Number 2=$num2";
?>