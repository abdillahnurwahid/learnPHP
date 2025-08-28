<?php
$globalVar = 10;

function tesScope()
{
    $localVar = 5;
    //globalVar tidak bisa langsung diakses
    global $globalVar;
    echo "local: $localVar <br>";
    echo "global (diakses via global): $globalVar <br>";
}

tesScope();