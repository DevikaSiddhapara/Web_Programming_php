<?php
$fruits=array("apple","banana","chickoo","orange","watermelon");

sort($fruits);

echo "Arrengement in ascending oreder:";
foreach($fruits as $nm)
{
    echo $nm."<br>";
}

// print_r(array_reverse($fruits));

rsort($fruits);

echo "Arrengement in Desending oreder:";
foreach($fruits as $nm)
{
    echo $nm."<br>";
}


?>