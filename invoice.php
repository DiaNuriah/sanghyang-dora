<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Sanghyang Dora
  </title>
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            font-family: Arial, sans-serif;
        }
        .navbar-nav .nav-link {
            font-size: 1.1rem;
            margin-right: 1rem;
        }
        .hero-section {
            position: relative;
            text-align: center;
            color: white;
        }
        .hero-section img {
            width: 100%;
            height: auto;
        }
        .hero-section .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .hero-section .hero-text h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .hero-section .hero-text p {
            font-size: 1.2rem;
        }
        .section-title {
            text-align: center;
            margin: 2rem 0;
            font-size: 2rem;
            font-weight: bold;
        }
        .card img {
            height: 200px;
            object-fit: cover;
        }
        .card-body {
            text-align: center;
        }
        .card-body h5 {
            font-size: 1.2rem;
            font-weight: bold;
        }
        .card-body p {
            font-size: 0.9rem;
        }
        .btn-read-more {
            background-color: black;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }
  </style>
 </head>
 <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light d-print-none">
   <div class="container">
    <a class="navbar-brand" href="#">
     <i class="fas fa-globe">
     </i>
    </a>
    <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
     <span class="navbar-toggler-icon">
     </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav ms-auto">
      <li class="nav-item">
       <a class="nav-link" href="#">
        Home
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="form.php">
        Pemesanan
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="">
        Our Package
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#">
        About Us
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#">
        Blog
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#">
        Contact
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="daftar.php">
        Daftar Pemesanan
       </a>
      </li>
     </ul>
    </div>
   </div>
  </nav>
    
    <?php
include 'lib/koneksi.php';

$id_pemesanan = htmlentities($_GET['id_pemesanan']);

$sql = "SELECT * FROM pemesanan where id_pemesanan = '$id_pemesanan' and is_deleted=0";

$query = mysqli_query($db,$sql);

if(mysqli_num_rows($query)==0)
{
    echo 'tidak ada'; exit;
}else{
    $detail = mysqli_fetch_row($query);
?>

<main class="flex-shrink-0">
    <div class="container">
      <form method="post" action="lib/proses.php">
  <div class="card mt-2">
    <div class="card-header bg-dark text-white">
    Detail Pemesanan Paket Wisata #<?=$detail[0]?>
    </div>
    <div class="card-body" style="text-align: left;">
      <div class="mb-3">
        <label for="nama_pemesanan" class="form-label">Nama Lengkap</label>
        <div><?=$detail[1]?></div>
      </div>
      <div class="mb-3">
        <label for="hp_pemesan" class="form-label">Nomor Handphone</label>
        <div><?=$detail[2]?></div>
      </div>
      <div class="mb-3">
        <label for="waktu_wisata" class="form-label">Waktu Mulai Perjalanan</label>
        <div><?=$detail[3]?></div>
      </div>
      <div class="mb-3">
        <label for="hari_wisata" class="form-label">Hari Wisata</label>
        <div><?=$detail[4]?></div>
      </div>
      <div class="mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="paket_inap" value="1" id="paket_inap" <?=($detail[5]==1)?'checked':''?> disabled>
            <label class="form-check-label" for="paket_inap">
              Camping (Rp. 15.000)
            </label>
          </div>
      </div>
      <div class="mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="paket_transport" value="1" id="paket_transport" <?=($detail[6]==1)?'checked':''?> disabled>
            <label class="form-check-label" for="paket_transport">
              Pendakian Pulang Pergi (Rp. 10.000)
            </label>
          </div>
      </div>
      <div class="mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="paket_makan" value="1" id="paket_makan" <?=($detail[7]==1)?'checked':''?> disabled>
            <label class="form-check-label" for="paket_makan">
              Sewa Tenda (Rp. 45.000)
            </label>
          </div>
      </div>
      <div class="mb-3">
        <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
        <div><?=$detail[8]?></div>
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label">Total Tagihan</label>
        <div><?=$detail[9]?></div>
      </div>
      <div class="mb-3">
        <label for="total" class="form-label">Tanggal Pemesanan</label>
        <div><?=$detail[11]?></div>
      </div>
    </div>
    <div class="card-footer">
    <a href="#" onclick="window.print()" class="btn btn-success">Cetak</a>
    </div>
  </div>

<?php } ?>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
 </body>
</html>
