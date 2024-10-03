<?php
$students=array(array("Vedanshi",88,88,69),
        array("Vedanshi",88,88,69),
        array("Vedanshi",88,88,69));

        foreach($students as $row)
        {
            foreach($row as $value)
            {
                echo "<br>$value<br>";
            }
            echo "<br>";
        }
?>