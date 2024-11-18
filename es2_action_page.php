<?php

$char1 = $_POST["c1"];
$char2 = $_POST["c2"];
$char3 = $_POST["c3"];

$chars = array("$char1", "$char2", "$char3");

foreach ($chars as $x) {
    echo "$x <br>";
}

?>