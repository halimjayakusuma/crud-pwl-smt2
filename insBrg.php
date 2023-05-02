<?php
include "koneksi.php";
include "uploadFoto.php";
$id = $_POST['tid'];
$nama = $_POST['tnama'];
$hrg = $_POST['thrg'];
$jml = $_POST['tjml'];
$keterangan = $_POST['tket'];

if (upload_foto($_FILES["foto"], "barang")) {
    $foto = $_FILES["foto"]["name"];
    $sql = "insert into barang(id,nama,hrg,jml,keterangan,foto) values ('$id','$nama','$hrg','$jml','$keterangan','$foto')";
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("location:listbarang.php");
    } else {
        $conn->close();
        echo "New Records Failed";
    }
} else {
    echo "Sorry, there was an error uploading your file.";
}
