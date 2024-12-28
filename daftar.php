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

$sql = "SELECT * FROM pemesanan where is_deleted = 0 order by created_at desc";

$query = mysqli_query($db,$sql);

if(mysqli_num_rows($query)==0)
{
    echo 'tidak ada'; exit;
}else{
    $detail = mysqli_fetch_row($query);
?>
<h1 class="text-center py-3">Daftar Pemesanan</h1>
<table class="table container">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Pemesan</th>
      <th scope="col">Nomor HP</th>
      <th scope="col">Tanggal Berangkat</th>
      <th scope="col">Total Tagihan</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $co = 1;
      while($detail = mysqli_fetch_assoc($query)){
      ?>
    <tr>
      <th scope="row"><?=$co?></th>
      <td><?=$detail['nama_pemesanan']?></td>
      <td><?=$detail['hp_pemesan']?></td>
      <td><?=$detail['waktu_wisata']?></td>
      <td><?=$detail['total_tagihan']?></td>
      <td><a class="text-warning" href="invoice.php?id_pemesanan=<?=$detail['id_pemesanan']?>">Invoice</a> 
      <a href="">Edit</a> 
      <a class="text-danger" href="hapus.php?id_pemesanan=<?=$detail['id_pemesanan']?>">Hapus</a></td>
    </tr>
        <?php
        $co++;
        }
        ?>
  </tbody>
</table>
<?php
} 
?>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
 </body>
</html>
