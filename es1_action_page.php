<?php

$user = $_POST["user"];
$password = $_POST["password"];

if ($user != "sus" || $password != "no") {
?>
<h4 style="color: red">Accesso negato. Username o password sbagliata.</h4>
<?php

}else{
    echo "Sei stato riconosciuto come " . $user . ". Fai quello che vuoi ora.";
}
?>
<!-- Button link to previous page -->
<form action="es1_main.html">
    <input type="submit" value="Ritorna Indietro" style="cursor: pointer">
</form>

<br>
<!-- Button link to index -->
<form action="index.html">
    <input type="submit" value="Ritorna nell'indice" style="cursor: pointer">
</form>
