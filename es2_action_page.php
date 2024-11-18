<?php

$char1 = $_POST["c1"];
$char2 = $_POST["c2"];
$char3 = $_POST["c3"];

$chars = array("$char1", "$char2", "$char3");

foreach ($chars as $x) {
    echo "$x <br>";
}
?>

<!-- Button link to previous page -->
<form action="es2_main.html">
    <input type="submit" value="Ritorna Indietro" style="cursor: pointer">
</form>

<br>
<!-- Button link to index -->
<form action="index.html">
    <input type="submit" value="Ritorna nell'indice" style="cursor: pointer">
</form>
