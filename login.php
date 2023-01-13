<?php 
session_start();
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Peserta</title>
    <!-- Custom fonts for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
    <body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <!-- Card Body -->
                        <div class="row">
                         <div class="col-lg-12 d-none d-lg-block bg-login-image">
                            <div class="p-5">
                                <div class="text-center">
                                <img src="./img/logo1.png" style="width:100px;" alt="">
                                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>

                                    <form method="POST" action="aksi_login.php" >
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="username" placeholder="Masukan Username" name="username"><br>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Masukan Password" name="password"><br>
                                    </div>
                                    <div class="mb-3 col-12">
                                      <select class="form-select" name="level">
                                        <option >Pilih Level</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                      </select>
                                    </div>
                                <div class="form-group text-center">
                               
                                    <button href="index.php" name="login" id="" class="btn btn-primary btn-user btn-block">Login</button> </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <style type="text/css">
        body{
            background: url(./img/pesawat3.jpg);
            background-size: cover;
        }
    </style>

</body>

</html>