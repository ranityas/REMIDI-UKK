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
    <!-- Navbar End -->

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

    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
      <div class="row align-items-center px-3">
        <div class="col-lg-6 text-center text-lg-left">
    <!-- Header End -->
        </div>
      </div>
    </div>
    <!-- Header End -->
    <body class="text-blue">
        <h1 class="text-center mt-5">PEMBAYARAN SPP</h1>
    <div class="container">
    
    <div class="row justify-content-center">
    <div class="col-9"> <br>
        <table class="table bg-light">
    <thead class="thead-dark">
        <tr>
        <th scope="col">No.</th>
        <th scope="col">Id Pembayaran</th>
        <th scope="col">Id Petugas</th>
        <th scope="col">NIS</th>
        <th scope="col">Tgl Bayar</th>
        <th scope="col">Jumlah Bayar</th>
        <th scope="col">Opsi</th>
    </tr>
    </thead>
    <form method="POST">
  <input type="text" name="textcari" placeholder="Cari "/>
  <input type="submit"  name="cari" value="cari"/>
  <a style="color: white" href="tabelpembayaran.php" class="btn btn-secondary">tampilkan semua</a>
    </form>
    
    <?php
    include 'koneksi.php';
    $input = mysqli_query($koneksi, "SELECT * from pembayaran");
    if (isset($_POST['cari'])) {
        $nama=$_POST["textcari"];
        $input=mysqli_query($koneksi,  "SELECT * from pembayaran WHERE id_pembayaran like '%$nama%' OR  id_petugas like '%$nama%' OR    NIS like '%$nama%' OR  tgl_bayar like '%$nama%' OR  jumlah_bayar like '%$nama%'" );
    }else{
$input=mysqli_query($koneksi, "SELECT * from pembayaran");
    }

    $no = 1;
    foreach ($input as $row) {
      echo "<tr>
      <td>$no</td>
      <td>$row[id_pembayaran] </td>
      <td>$row[id_petugas]  </td>
      <td>$row[NIS]  </td>
      <td>$row[tgl_bayar] </td>
      <td>$row[jumlah_bayar]  </td>
      <td>
      <a href='updatepembayaran.php?id_pembayaran=$row[id_pembayaran]'>
        <input type='button' class='btn btn-secondary' value='edit'></a>

        <a href='hapuspembayaran.php? id_pembayaran=$row[id_pembayaran]'>
       <input type='button' class='btn btn-danger' value='hapus'></a> </td></tr>";
      $no++;
    }
    ?>
			</div>
		</div>
	</div>
</table></div></div></html>