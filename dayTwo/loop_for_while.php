<?php

for($i = 1; $i <= 7; $i++) {
    echo "perulangan ke-$i <br>";
}

echo "<hr>";

//looping dengan while
$j = 1;
while ($j <= 3) {
    echo "ini while ke-$j <br>";
    $j++;
}

echo "<hr>";

//foreach array
$buah = ["Apel", "Jeruk", "Mangga"];
foreach ($buah as $item) {
    echo "saya suka $item <br>";
} 