<?php
$hasil = '';
if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
    $a = (float)$_POST['a'];
    $b = (float)$_POST['b'];
    $op = $_POST['op'];

    switch ($op) {
        case 'tambah':
            $hasil = $a + $b;
            break;
        case 'kurang':
            $hasil = $a - $b;
            break;
        case 'kali':
            $hasil = $a * $b;
            break;
        case 'bagi':
            $hasil = $b != 0 ? $a / $b : "Error: Pembagian dengan 0!";
            break;
    }
}
?>
<form method="post">
    Angka 1: <input type="number" name="a" step="any" required><br>
    Angka 2: <input type="number" name="b" step="any" required><br>
    Oprasi:
    <select name="op">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">*</option>
        <option value="bagi">/</option>
    </select><br>
    <button type="submut">Hitung</button>
</form>
<?php
if ($hasil !== ''){
    echo "<h3>Hasil: $hasil</h3>";
}

