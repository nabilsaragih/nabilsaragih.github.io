<?php
require 'koneksi.php';

function addData($nama_ikan, $jenis_ikan, $harga_ikan, $gambar) {
    global $conn;

    $sql = "INSERT INTO fishes (nama_ikan, jenis_ikan, harga_ikan) VALUES ('$nama_ikan', '$jenis_ikan', '$harga_ikan', '$gambar')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header("Location: catalog.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

function deleteData($id) {
    global $conn;
    $sql = "DELETE FROM fishes WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        header("Location: catalog.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

function updateData($id, $nama_ikan, $jenis_ikan, $harga_ikan) {
    global $conn;
    $sql = "UPDATE fishes SET nama_ikan='$nama_ikan', jenis_ikan='$jenis_ikan', harga_ikan='$harga_ikan' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
        header("Location: catalog.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

if (isset($_POST['kirim'])) {
    $action = $_POST['kirim'];
    if ($action == 'add') {
        $nama_ikan = $_POST['nama_ikan'];
        $jenis_ikan = $_POST['jenis_ikan'];
        $harga_ikan = $_POST['harga_ikan'];
        $gambar = $_POST['gambar']['name'];
        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        date_default_timezone_set('Asia/Makassar');
        
        $gambar_baru = date('Y/m/d') . " " . $nama . "." . $ekstensi;
        $tmp = $_FILES['gambar']['tmp_name'];

        if (move_uploaded_file($tmp, '../../assets/img/' . $gambar_baru)) {
            addData($nama_ikan, $jenis_ikan, $harga_ikan, $gambar_baru);
            echo 'Berhasil upload gambar';
        } else {
            echo 'Gagal upload gambar';
        }
    } else if ($action == 'delete') {
        $id = $_POST['id'];
        deleteData($id);
    } else if ($action == 'update') {
        $id = $_POST['id'];
        $nama_ikan = $_POST['nama_ikan'];
        $jenis_ikan = $_POST['jenis_ikan'];
        $harga_ikan = $_POST['harga_ikan'];
        updateData($id, $nama_ikan, $jenis_ikan, $harga_ikan);
    }
}

mysqli_close($conn);
?>