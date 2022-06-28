<?php
include "koneksi.php";
ob_start();

session_start();
error_reporting(0);
if (isset($_SESSION["login"])) {
    header('location: home.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- new -->
    <div class="container mt-5">
        <div class="card bg-success">
            <div class="card-header text-center">
                Haloo Admin..
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">Silahkan Login!!!</h5>
                <form role="form" method="POST" action="ceklogin.php">
                    <br />
                    <div class="form-group input-group mt-3">
                        <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                        <input type="text" name="username" class="form-control" placeholder="Masukan Username " />
                    </div>
                    <div class="form-group input-group mt-3">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Masukan password" />
                    </div>
                    <input type="submit" name="login" value="LOGIN" class="btn btn-primary mt-3">
                    <input type="reset" value="BATAL" name="batal" class="btn btn-danger mt-3">
            </div>
        </div>
    </div>
    </div>
   

</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>