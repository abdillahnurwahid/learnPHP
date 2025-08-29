<?php
$file = fopen("data.txt", "w");//"w" = tuli (overwrite)
fwrite($file, "Halo, ini baris pertama!\n");
fwrite($file, "Belajar PHP file Handling!\n");
fclose($file);

echo "File berhasil ditulis.";