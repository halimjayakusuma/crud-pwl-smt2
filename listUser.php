<?php
session_start();
if (isset($_SESSION["username"])) {
    $user = $_SESSION["username"];
} else {
    header("location:index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>List User</title>
</head>

<body>
    <nav class="nav nav-pills flex-sm-row bg-primary">
        <a class="flex-sm-fill text-sm-start nav-link text-light" href="dashboard.php">Dashboard</a>
        <a class="flex-sm-fill text-sm-start nav-link text-light" href="listbarang.php">List Barang</a>
        <span class="nav-link text-warning disabled" aria-current="page">List User</span>
        <a class="flex-sm-fill text-sm-end nav-link text-light" href="listMember.php">List Member</a>
        <a class="flex-sm-fill text-sm-end nav-link text-light disabled" href="#">User : <?= $user; ?></a>
        <a class="flex-sm-fill text-sm-end nav-link text-light" href="logout.php">Logout</a>
    </nav>

    <div class="container">
        <?php
        include "koneksi.php";
        $sql = "SELECT * from user ORDER BY id";
        $hasil = $conn->query($sql);
        echo "<a href='addUser.php' class='btn btn-success text-white'>Tambah Data</a>";
        if ($hasil !== false && $hasil->num_rows > 0) {
            echo "<table class='table table-striped'>
            <thead>
            <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Username</th>
            <th scope='col'>Password</th>
            <th scope='col'>Foto</th>
            <th scope='col'>Edit</th>
            <th scope='col'>Hapus</th>
            </tr>
            </thead>
            <tbody>";
            while ($row = $hasil->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>" . $row["password"] . "</td>";
                echo "<td><img src='img/" . $row["foto"] . "' style='width:100px;height:100px;'></img></td>";
                echo "<td><a href='editUser.php?id=" . $row["id"] . "'>Edit</a></td>";
                echo "<td><a href='delUser.php?id=" . $row["id"] . "'>Hapus</a></td>";
                echo "</tr>";
            }
            echo "</tbody>
                    </table>";
        } else {
            echo "<br>";
            echo "jml rec: 0";
        }
        $conn->close();
        ?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>