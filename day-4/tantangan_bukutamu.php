<?php
$fileName = "bukutamu.txt";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $pesan = $_POST['pesan'];

    $file = fopen($fileName, "a");
    fwrite($file, "$nama: $pesan\n");
    fclose($file);
}

// Baca isi file
$daftarPesan = [];
if (file_exists($fileName)) {
    $daftarPesan = file($fileName, FILE_IGNORE_NEW_LINES);
}
?>

<h2>Buku Tamu</h2>
<form method="post">
    Nama: <input type="text" name="nama" required><br>
    Pesan: <textarea name="pesan" required></textarea><br>
    <button type="submit">Kirim</button>
</form>

<hr>
<h3>Daftar Pesan:</h3>
<?php
if (count($daftarPesan) > 0) {
    foreach ($daftarPesan as $p) {
        echo "<p>" . htmlspecialchars($p) . "</p>";
    }
} else {
    echo "<p>Belum ada pesan.</p>";
}