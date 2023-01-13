<?php include("config.php")?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Registrasi User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  </head>
  <body>

     <nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img class="logo" src="./img/logo1.png" style="width: 50px; height: 50px; border-radius: 50%;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="website.php">Home</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <div class="container my-5 bg-light">
      <div class="card mt-5">
        <form action="aksi_user.php" method="POST">
          <!-- Card header -->
          <div class="card-header py-4 px-5 bg-light border-0">
            <h4 class="mb-0 fw-bold text-center">FORM REGISTRASI USER</h4>
          </div>

          <!-- Card body -->
          <div class="card-body px-5">
            <!-- Data diri -->
            <div class="row gx-xl-5">
              <div class="col-md-4">
                <h5>Data Penanggung Jawab</h5>
                <p class="text-muted">Mohon masukan data penanggung jawab lembaga yang sesuai dan lengkap</p>
              </div>
              <div class="col-md-8">
                <div class="mb-3">
                  <label for="nip" class="form-label">NIP</label>
                  <input type="number" class="form-control" id="nip" name="nip" style="max-width: 500px;"/>
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" style="max-width: 500px;"/>
                </div>
                <div class="mb-3">
                  <label for="kota" class="form-label">Kota Asal</label>
                  <input type="text" class="form-control" id="kota" name="kota" style="max-width: 500px;"/>
                </div>
              </div>
            </div>

           <!--  Akun Registrasi -->
            <hr class="my-5" />
            <div class="row gx-xl-5">
              <div class="col-md-4">
                <h5>Akun</h5>
                <p class="text-muted">Buat Akun</p>
              </div>
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" class="form-control" id="username" name="username"/>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <!-- <div class="mb-3">
                    <select class="form-select" name="jenis_ujian" id="jenis_ujian">
                        <option selected>Open this select menu</option>
                        <option value="ATC">ATC</option>
                        <option value="ACO">ACO</option>
                        <option value="TEKNIK">TEKNIK</option>
                    </select>
                  </div> -->
                </div>
               </div>
              </div>
            </div>
          </div>

              </div>
            </div>
          </div>

      <!-- Card footer -->
      <div class="card-footer text-end py-4 px-5 bg-light border-0">
        <button type="submit" name="submit" class="btn btn-primary btn-rounded">Submit</button>
      </div>
    </form>
  </div>
</div>
   






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>