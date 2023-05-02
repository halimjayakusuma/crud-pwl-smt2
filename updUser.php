<?php
include "koneksi.php";
include "uploadFoto.php";

$id = $_POST['tid'];
$username = $_POST['tusername'];
$password = $_POST['tpassword'];
$foto = $_POST['foto'];
$qry = true;
$flagFoto = true;
if (isset($_POST['ubah_foto'])) {
    if (upload_foto($_FILES["foto"], "user")) {
        $foto = $_FILES["foto"]["user"];
        $sql = "update user set nama='$username',password='$password',foto='$foto' where id='$id'";
    } else {
        $qry = false;
        echo "Foto gagal di Upload";
    }
} else {
    $sql = "update user set nama='$username',password='$password',foto='$foto' where id='$id'";
    $flagFoto = false;
}
if ($qry == true) {
    if ($conn->query($sql) === TRUE) {
        if (is_file("img/" . $foto) && ($flagFoto == true))
            unlink("img/" . $foto);
        $conn->close();
        header("location:listUser.php");
    } else {
        $conn->close();
        echo "New Records failed";
    }
}
