<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
        if ($i == 60) {
            break;
        }
    }
}
?>
