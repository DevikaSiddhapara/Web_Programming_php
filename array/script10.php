<?php
$country=array(array("Tokyo"=>"Japan","37,274,000"),
        array("Delhi"=>"India","29,000,000"),
        array("Shanghai"=>"China","10,000"));

        foreach($country as $row)
        {
            foreach($row as $value)
            {
                echo "<br>$value<br>";
            }
            echo "<br>";

            
        }


        


?>