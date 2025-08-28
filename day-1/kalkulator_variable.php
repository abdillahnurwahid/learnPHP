<?php

$angka1 = 27;
$angka2 = 12;
$oprasi = "tambah"; //opsi: "tambah" atau "kurang"

if ($oprasi === "tambah") {
    $hasil = $angka1 + $angka2;
    echo "hasil: $angka1 + $angka2 = $hasil";
} elseif ($oprasi === "kurang") {
    $hasil = $angka1 - $angka2;
    echo "hasil: $angka1 - $angka2 = $hasil";
} else {
    echo "Operasi tidak dikenal. Gunakan 'tambah' atau 'kurang'.";
}
