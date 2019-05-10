

<form action="navn.php" method="POST">
<input type="text" name="navn" value="Slik mig">
<input type="submit">
</form>

<?php
ini_set('display_errors', 1); // Fejl finder.
$navn = $_POST["navn"];
    echo "<br>\nNavnet er <b>" . $navn . "</b>";

    ?>