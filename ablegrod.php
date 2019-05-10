
grødmælk 

<?php
ini_set('display_errors', 1); // Fejl finder.
echo "<br/>hello world <br/>";


$a = $_GET["a"];

$antalAbler = $a * 8;
$antalSukker = $a * 4;
$antalmaelk = $a * 2;

echo "Du skal bruge: " . $antalAbler . " stk æbler. " . $antalSukker . " gram sukker " . $antalmaelk . " dl mælk" . " for at lave " . $a . " æblrgrød"





?>