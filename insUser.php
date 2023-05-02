<?php
include "koneksi.php";
// Aku ga pake file mu ini "uploadFoto.php" buat validasi foto tapi tak taruh di sini
// include "uploadFoto.php";
$iduser = $_POST['tid'];
$username = $_POST['tusername'];
$password = $_POST['tpassword'];
$imgName = $_FILES['tfoto']['name'];

$upDir='./img/';
$target_file = $upDir.basename($_FILES['tfoto']['name']);
$imgSize = $_FILES['tfoto']['size'];

if(file_exists($target_file)){
  echo 'File already exists';
  $statusUp=0;
  }
else if($imgSize > 1000000){
    echo 'Image is too large';
    $statusUp=0;
    }
// Di tambahi lagi Validasinya yang type Image PNG or JPEG
else{
  move_uploaded_file($_FILES['tfoto']['tmp_name'],$target_file);
  $sql = "insert into user(id,username,password,foto) values ('$iduser','$username','$password','$imgName')";
  if($conn->query($sql)===true){
    $conn->close();
    header('location:listUser.php');
  echo 'Uploaded';
  }
  else {
    $conn->close();
    echo "New Records Failed";
    }
  }

// Ini kalau mau mbok hapus gapapa itu konsepnya gitu yang di atas dah bisa Tambah data 

// if (upload_foto($_FILES["tfoto"], "user")) {
//     $foto = $_FILES["foto"]["name"];
//     $sql = "insert into user(id,username,password,foto) values ('$id','$username','$password','$foto')";
//     if ($conn->query($sql) === TRUE) {
//         $conn->close();
//         header("location:listUser.php");
//     } else {
//         $conn->close();
//         echo "New Records Failed";
//     }
// } else {
//     echo "Sorry, there was an error uploading your file.";
// }