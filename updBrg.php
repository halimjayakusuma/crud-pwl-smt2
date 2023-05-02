<?php
    include "koneksi.php";
    include "uploadFoto.php";
    
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $hrg=$_POST['hrg'];
    $ket=$_POST['keterangan'];
    $jml=$_POST['jml'];
    $foto_lama=$_POST['foto_lama'];
    $qry=true;
    $flagFoto=true;
    if (isset($_POST['ubah_foto'])) {
        if (upload_foto($_FILES["foto"], "barang")) {
            $foto=$_FILES["foto"]["name"];
            $sql="update barang set nama='$nama',hrg='$hrg',jml='$jml',keterangan='$ket',foto='$foto' where id='$id'";
        }
        else {
            $qry = false;
            echo "Foto gagal di Upload";
        }
    } else {
        $sql="update barang set nama='$nama',hrg='$hrg',jml='$jml',keterangan='$ket',foto='$foto' where id='$id'";
        $flagFoto=false;
    }
    if ($qry==true) {
        if ($conn->query($sql)===TRUE) {
            if (is_file("img/".$foto_lama) && ($flagFoto==true))
                unlink("img/".$foto_lama);
            $conn->close();
            header("location:listbarang.php");
            }
        else {
            $conn->close();
            echo"New Records failed";}
    }
