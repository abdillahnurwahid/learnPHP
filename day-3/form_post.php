<?php
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$hobi = isset($_POST['hobi']) ? $_POST['hobi'] : '';
?>
<form method="post">
    Nama: <input type="text" name="nama"><br>
    hobi: <input type="text" name="hobi"><br>
    <button type="submit">kirim</button>
</form>

<?php
if ($nama && $hobi) {
    echo "halo, $nama! hobimu adalah $hobi.";
}