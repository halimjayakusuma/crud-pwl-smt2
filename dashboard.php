<?php
session_start();
if (isset($_SESSION["username"])) {
    $user = $_SESSION["username"];
} else
    header("location:index.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Dashboard</title>
</head>

<body>
    <nav class="nav nav-pills flex-sm-row bg-primary">
        <a class="flex-sm-fill text-sm-start nav-link text-warning disabled" aria-current="page" href="#">Dashboard </a>
        <a class="flex-sm-fill text-sm-start nav-link text-light disabled" href="#">User : <?= $user; ?> </a>
        <a class="flex-sm-fill text-sm-end nav-link text-light" href="logout.php">Logout </a>
    </nav>
    <div class="container p-5">
        <div class="row row-cols-2">
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="listUser.php">
                            <img src="user.png" class="rounded mx-auto d-block" alt="..." style="150px;width:180px;">
                        </a>
                    </div>
                    <div class="card-footer text-muted">
                        User
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="listbarang.php">
                            <img src="barang.png" class="rounded mx-auto d-block" alt="..." style="150px;width:180px;">
                        </a>
                    </div>
                    <div class="card-footer text-muted">
                        Barang
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center mt-5">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="listOrder.php">
                                <img src="order.png" class="rounded mx-auto d-block" alt="..."
                                    style="150px;width:179px;">
                            </a>
                        </div>
                        <div class="card-footer text-muted">
                            Order
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center mt-5">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="listMember.php">
                                <img src="member.jpg" class="rounded mx-auto d-block" alt="..."
                                    style="150px;width:180px;">
                            </a>
                        </div>
                        <div class="card-footer text-muted">
                            Member
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEI1VSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>