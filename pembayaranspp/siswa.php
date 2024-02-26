<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>WEBSITE PEMBAYARAN SPP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
      <nav
        class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
      >
        <a
          href=""
          class="navbar-brand font-weight-bold text-secondary"
          style="font-size: 50px"
        >
          <i class="flaticon-043-teddy-bear"></i>
          <span class="text-primary">PEMBAYARAN SPP</span>
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between"
          id="navbarCollapse"
        >
          <div class="navbar-nav font-weight-bold mx-auto py-0">
            <a href="pembayaran.php" class="nav-item nav-link">PEMBAYARAN</a>
            <a href="siswa.php" class="nav-item nav-link">SISWA</a>
            <a href="kelas.php" class="nav-item nav-link">KELAS</a>
            <a href="logout.php" class="nav-item nav-link">LOGOUT</a>
      </nav>
    </div>
    <body class="text-black">
        <h3 class="text-center mt-5" style="color:#8acaff">FORM SISWA</h3>
    <div class="container">
         <?php
        include 'koneksi.php';
        if (isset($_POST["OK"])){
            $NIS = $_POST["NIS"];
            $nama = $_POST["nama"];
            $id_kelas = $_POST["id_kelas"];
           $input = mysqli_query($koneksi, "insert into siswa (NIS, nama, id_kelas)values('$NIS', '$nama', '$id_kelas')");
           echo "<div class='alert alert-success'>  SUKSES MENGINPUT!</div>";
        }
        ?>
    <div class="row justify-content-center">
        <div class="col-5">
        <form action="siswa.php" method="post">
    <div class="form-group">
        <label>NIS</label>
        <input type="number" class="form-control" placeholder="" name="NIS">
    </div>
    <div class="form-group">
        <label> nama</label>
        <input type="text" class="form-control" placeholder="" name="nama">
    </div>
    <div class="form-group">
        <label> id_kelas</label>
        <input type="text" class="form-control" placeholder="" name="id_kelas">
    <br>
    <center><button type="submit" class="btn btn-primary"name="OK">Submit</button></center>
    <br>
        <center><button type="reset" class="btn btn-primary">Cancel</button></center>
        <center><a style="color: blue;"  href="tabelsiswa.php" class="btn btn-link">Lihat Data Siswa</a></center>
    </form>
</div>
    </br>
</br>
</form>
</div>
                    </div>
                </div>
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <a href="" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>