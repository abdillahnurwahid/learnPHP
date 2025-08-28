<?php
// $belanja = [
//     "indomie" => 3000,
//     "telur" => 2500,
//     "kopi" => 2000,
//     "gula" => 3000
// ];

// $total = 0;
// foreach ($belanja as $barang => $harga) {
//     echo "$barang: Rp" . number_format($total, 0, ',', '.') . "<br>";
// }

// echo "<hr>";
// echo "total belanja: Rp" . number_format($total, 0, ',', '.') . "<br>";

// if ($total > 100000) {
//     $diskon = $total * 0.10;
//     $total -= $diskon;
//     echo "$diskon 10%: Rp" . number_format($total, 0, ',', '.') . "<br>";
// }

// echo "<strong>total bayar: Rp" . number_format($total, 0, ',', '.') . "</strong>";

$belanja = [
    "indomie" => 3000,
    "telur" => 2500,
    "kopi" => 2000,
    "gula" => 3000,
    "daging" => 95000
];

$total = 0;
foreach ($belanja as $barang => $harga) {
    echo "$barang: Rp" . number_format($harga, 0, ',', '.') . "<br>";
    $total += $harga;
}

echo "<hr>";
echo "Total belanja: Rp" . number_format($total, 0, ',', '.') . "<br>";

if ($total > 100000) {
    $diskon = $total * 0.10;
    echo "Diskon 10%: Rp" . number_format($diskon, 0, ',', '.') . "<br>";
    $total -= $diskon;
}

echo "<strong>Total bayar: Rp" . number_format($total, 0, ',', '.') . "</strong>";
?>
