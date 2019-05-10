
hehe 
<?php
ini_set('display_errors', 1); // Fejl finder.
echo "<br/>hello world <br/>";


$a = $_GET["a"];
$b = $_GET["b"];
$type = $_GET["type"];

if ($type == "plus"){
    $tallet = $a + $b;
    echo "<br/>Result: " . $tallet;
}

if ($type == "minus"){
    $tallet = $a - $b;
    echo "<br/>Result: " . $tallet;
}

if ($type == "multiply"){
    $tallet = $a * $b;
    echo "<br/>Result: " . $tallet;
}

if ($type == "divide"){
    $tallet = $a / $b;
    echo "<br/>Result: " . $tallet;
}



?>