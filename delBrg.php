<?php
    include "koneksi.php";
    $id=$_GET['id'];

    $sql = "SELECT foto from barang where id='$id'";
    $hasil = $conn->query($sql);
    while ($row=$hasil->fetch_assoc()) {
        $foto=$row['foto'];
    }
    if ($foto!="") {
        unlink("img/".$foto);
    }
    $sql = "DELETE from barang where id='$id'";
    if ($conn->query($sql)===TRUE) {
        header("location:listbarang.php");
    }
    $conn->close();
    echo "New Records Failed";
?>