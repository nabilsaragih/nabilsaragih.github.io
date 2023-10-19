<?php 
require '../scripts/php/koneksi.php';
require '../scripts/php/crudHandler.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/catalog.css">
    <title>Form</title>
</head>
<body>
    <form action="../scripts/php/crudHandler.php" method="post">
        <label for="nama">Nama Ikan:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="jenis">Jenis Ikan:</label><br>
        <input type="text" id="jenis" name="jenis" required><br><br>
        <label for="harga">Harga Ikan:</label><br>
        <input type="text" id="harga" name="harga" required><br><br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>


