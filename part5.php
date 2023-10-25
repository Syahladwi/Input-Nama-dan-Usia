<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];

    if ($usia < 18) {
        echo "Halo $nama, Anda masih anak-anak.";
    } elseif ($usia >= 18 && $usia < 60) {
        echo "Halo $nama, Anda adalah seorang dewasa.";
    } else {
        echo "Halo $nama, Anda adalah seorang senior.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Nama dan Usia</title>
</head>
<body>
    <form method="post">
        Masukkan nama Anda: <input type="text" name="nama"><br>
        Masukkan usia Anda: <input type="text" name="usia"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
