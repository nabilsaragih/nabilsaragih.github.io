<?php
require '../scripts/php/koneksi.php';
require '../scripts/php/crudHandler.php';

$sql = "SELECT * FROM fishes";
$result = mysqli_query($conn, $sql);
date_default_timezone_set('Asia/Makassar');

if (mysqli_num_rows($result) > 0) {
    echo "<h5>date('l') . date('Y/m/d') . 'WITA'</h5>";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nama Ikan</th>";
    echo "<th>Jenis Ikan</th>";
    echo "<th>Harga Ikan</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id_barang'] . "</td>";
        echo "<td>" . $row['nama_ikan'] . "</td>";
        echo "<td>" . $row['jenis_ikan'] . "</td>";
        echo "<td>" . $row['harga_ikan'] . "</td>";
        echo "<td>";
        echo "<form method='post' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>";
        echo "<input type='hidden' name='action' value='delete'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<input type='submit' value='Delete'>";
        echo "</form>";
        echo "<form method='post' action='update.php'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<input type='submit' value='Update'>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>