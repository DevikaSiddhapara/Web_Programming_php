<?php
// Input year
$year=$_REQUEST['year'];
// You can replace this with any year

// Check if the year is divisible by 4 and either not divisible by 100 or divisible by 400
if ($year % 4 == 0) {
    if ($year % 100 == 0) {
        if ($year % 400 == 0) {
            echo "$year is a leap year.";
        } else {
            echo "$year is not a leap year.";
        }
    } else {
        echo "$year is a leap year.";
    }
} else {
    echo "$year is not a leap year.";
}
?>
