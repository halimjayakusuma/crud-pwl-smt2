<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
    <style>
    .center {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 600px;
    }

    .item {
        width: 40%;
        padding: 20px;
        border: 3px solid grey;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="center">
            <div class="item">
                <h2 class="text-center">Login Administrator</h2>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="mb-3">
                        <label class="form-label">User</label>
                        <input type="text" class="form-control" name="tuser" placeholder="user">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="tpass" placeholder="password">
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div>
                </form>

                <?php
                session_start();
                include "koneksi.php";
                $username="";
                $password="";
                if(isset($_POST["tuser"])) {
                    $user=$_POST["tuser"];
                    $pass=$_POST["tpass"];
                    $sql="select * from user where username='$user' and password = '$pass'";
                    $hasil=$conn->query($sql);
                    while ($rec=$hasil->fetch_assoc()) {
                        $iduser=$rec["iduser"];
                        $username=$rec["username"];
                        $password=$rec["password"];
                    }
                    if ($user==$username && $pass==$password) {
                        $_SESSION["iduser"]=$iduser;
                        $_SESSION["username"]=$username;
                        header("location:dashboard.php");
                    } else {
                        if ($user!="")
                        echo "<div style='text-align:center;'>User tidak valid... </div>";
                    }
                }
            ?>
            </div>
        </div>
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