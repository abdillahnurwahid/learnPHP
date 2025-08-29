<?php
$file = fopen("data.txt", "r");//"r" = baca
while (!feof($file)) {
    $line = fgets($file);
    echo $line . "<br>";
}
fclose($file);