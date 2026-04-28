<?php
    include 'db.php';
    $nama_ikan = $_POST["nama_ikan"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    $kategori = $_POST["kategori"];
    $sql = "insert into data_ikan (nama_ikan, harga, stok, kategori) values ('$nama_ikan', '$harga', '$stok', '$kategori')";
    $conn->query($sql);
    $conn->close();
    header("location: index.php");
?>