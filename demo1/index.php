<?php
echo "hello";


$cars = array
(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

echo "<br/>";
echo '<a href="page1.php">page1</a>';
echo "<br/>";

echo $cars[0][0];

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}

echo "<br/>";

date_default_timezone_set("Asia/Urumqi");

echo  "今天的日期是".date("y/m/d h:i:sa");