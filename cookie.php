

<form action="cookie.php" method="POST">
<input type="text" name="navn" value="Slik mig">
<input type="submit">
</form>

<?php

$navn = $_POST["navn"];
    echo "<br>\nNavnet er <b>" . $navn . "</b>";

    setcookie("brugernavn", $navn, time() + (86400 * 30), "/"); // 86400 = 1 day

    echo "<br/><br/>For at tjekke cookie, skrives dette i console: 'document.cookie'";
    ?>

