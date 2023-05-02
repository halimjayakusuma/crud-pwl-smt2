<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "select * from barang where id='$id'";
$hasil = $conn->query($sql);
while ($row = $hasil->fetch_assoc()) {
    $nama = $row['nama'];
    $hrg = $row['hrg'];
    $jml = $row['jml'];
    $keterangan = $row['keterangan'];
    $foto = $row['foto'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-FCx6JOMG6dOJ1yx0fT9N8NtW+0v19wtnQJ3qA3sGdWFLzj+GmOkg1ZJY8QBQjJd+" crossorigin="anonymous">

    <title>Registrasi</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h1>Form Edit Barang</h1>
                <form action="updBrg.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="11" class="form-label">ID</label>
                        <input type="text" id="id" name="tid" class="form-control" value="<?= $id; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="12" class="form-label">Nama Barang</label>
                        <input type="text" id="nama" name="tnama" class="form-control" value="<?= $nama; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="13" class="form-label">Harga</label>
                        <input type="text" id="hrg" name="thrg" class="form-control" value="<?= $hrg; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="14" class="form-label">Jml Stok</label>
                        <input type="text" id="jml" name="tjml" class="form-control" value="<?= $jml; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="15" class="form-label">Keterangan</label>
                        <input type="text" id="ket" name="tket" class="form-control" value="<?= $keterangan; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="16" class="form-label">Gambar</label>
                        <input type="file" id="foto" name="foto" class="form-control">
                        <input type='hidden' name='foto_lama' value="<?= $foto; ?>">
                        <img src="img/<?php echo $foto; ?>" width="150px" height="120px" />
                        <input type="checkbox" name="ubah_foto" value="true">Ceklis jika ingin mengubah foto<br>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- Bundle is required for certain plugins to work -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-RRMHx0vkm0cd2Qq3osDqu8XTbyiwy0+dcpz0RyAgN/hNzWd0x16iVc44ICkB59Xu" crossorigin="anonymous">
    </script>
</body>

</html>