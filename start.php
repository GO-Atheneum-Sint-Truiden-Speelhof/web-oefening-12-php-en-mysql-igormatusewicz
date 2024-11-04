<!doctype html>
<html lang=nl>
<?php

// cookie plaatsen met een datum

$c_naam = 'cco_cookie';

$c_waarde = date("j/m/Y").' om '.date("G:i");

$c_verloopt = time() + 60 * 60 * 24 * 90;

setcookie($c_naam, $c_waarde, $c_verloopt);

?>
</body>

</html>