<?php
$n = isset($_GET['n']) ? intval($_GET['n']) : 1;

for ($i = 1; $i <= 12; $i++) {
    echo "$n x $i = " . ($i * $n) . "<br>";
}
?>
