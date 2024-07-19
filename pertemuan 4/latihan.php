<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Form Pemasaran
    </h1>

    <form action="" method="POST">
        <label for="Nama">Nama Pemesanan</label>
        <input type="text" name="namapemesan">
        <label for="Nohp">Nomor HP</label>
        <input type="text" name="nohp">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php

    if(isset($_POST['submit'])) {
    $namapemesan = $_POST['namapemesan'];
    $nohp = $_POST['nohp'];

    echo"Resume Pemesanan <br>";
    echo"Nama Pesanan: $namapemesan <br>";
    echo "No HP: $nohp";
    }

?>