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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
         <a class="nav-link" href="index.php">
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
       </ul>
      </div>
     </div>
    </nav>
    <div class="hero-section">
     <img alt="Mountain landscape with text 'Sanghyang Dora'" height="600" src="assets/images/gambar 1.jpg" width="1920"/>
     <div class="hero-text">
      <h1>
       Journey To The Unexpected, Exploring The Hidden Beauty Of Sanghyang Dora
      </h1>
     </div>
    </div>

<main class="flex-shrink-0">
    <div class="container">
      <form method="post" action="lib/proses.php">
  <div class="card mt-2">
    <div class="card-header bg-dark text-white">
      Form Pemesanan Paket Wisata
    </div>
    <div class="card-body" style="text-align: left;">
      <div class="mb-3">
        <label for="nama_pemesanan" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama_pemesanan" name="nama_pemesanan" placeholder="Nama Lengkap Sesuai Tanda Pengenal" required>
      </div>
      <div class="mb-3">
        <label for="hp_pemesan" class="form-label">Nomor Handphone</label>
        <input type="text" class="form-control" id="hp_pemesan" name="hp_pemesan" placeholder="Nomor Handphone 08..." required>
      </div>
      <div class="mb-3">
        <label for="waktu_wisata" class="form-label">Waktu Mulai Perjalanan</label>
        <input type="date" class="form-control" id="waktu_wisata" name="waktu_wisata" placeholder="Waktu Mulai Perjalanan" required>
      </div>
      <div class="mb-3">
        <label for="hari_wisata" class="form-label">Hari Wisata</label>
        <input type="number" class="form-control" id="hari_wisata" value="1" name="hari_wisata" placeholder="Jumlah Hari Perjalanan" required>
      </div>
      <div class="mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="paket_inap" value="1" id="paket_inap">
            <label class="form-check-label" for="paket_inap">
              Camping (Rp. 15.000)
            </label>
          </div>
      </div>
      <div class="mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="paket_transport" value="1" id="paket_transport">
            <label class="form-check-label" for="paket_transport">
              Pendakian Pulang Pergi (Rp. 10.000)
            </label>
          </div>
      </div>
      <div class="mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="paket_makan" value="1" id="paket_makan">
            <label class="form-check-label" for="paket_makan">
              Sewa Tenda (Rp. 45.000)
            </label>
          </div>
      </div>
      <div class="mb-3">
        <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
        <input type="number" class="form-control" id="jumlah_peserta" value="1" name="jumlah_peserta" placeholder="Jumlah Hari Perjalanan" required>
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label">Harga Paket</label>
        <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Paket Perjalanan" readonly>
      </div>
      <div class="mb-3">
        <label for="total" class="form-label">Total Tagihan</label>
        <input type="number" class="form-control" id="total" name="total" placeholder="Total Paket Perjalanan" readonly>
      </div>
    </div>
    <div class="card-footer">
      <input type="submit" class="btn btn-primary" value="Simpan">
      <input type="reset" class="btn btn-danger" value="Ulangi">
    </div>
  </div>
  <script>
  //tentukan konstanta biaya masing-masing
  const paket_inap = 15000;
  const paket_transport = 10000;
  const paket_makan = 45000;
  
  function updateTotalCost()
  {
      //inisisi harga paket 0
      let totalCost = 0;
      
      //referensi dari checkbox
      const inapCheckbox = document.getElementById('paket_inap');
      const transportCheckbox = document.getElementById('paket_transport');
      const makanCheckbox = document.getElementById('paket_makan');
      
      //jika inap checkbox ter-check
      if(inapCheckbox.checked)
      {
          totalCost+=paket_inap;
      }
      
      //jika transport checkbox ter-check
      if(transportCheckbox.checked)
      {
          totalCost+=paket_transport;
      }
      
      //jika makan checkbox ter-check
      if(makanCheckbox.checked)
      {
          totalCost+=paket_makan;
      }
      
      document.getElementById('harga').value = totalCost;
  }
  
  function updateTotal()
  {
      let TotalTagihan = 0;
      
      var hari_wisata = document.getElementById('hari_wisata').value;
      var jumlah_peserta = document.getElementById('jumlah_peserta').value;
      var harga = document.getElementById('harga').value;
      
      TotalTagihan = hari_wisata * jumlah_peserta * harga;
      
      document.getElementById('total').value = TotalTagihan;
  }
  
  document.getElementById('paket_inap').addEventListener('change', updateTotalCost);
  document.getElementById('paket_transport').addEventListener('change', updateTotalCost);
  document.getElementById('paket_makan').addEventListener('change', updateTotalCost);
  
  document.getElementById('paket_inap').addEventListener('change', updateTotal);
  document.getElementById('paket_transport').addEventListener('change', updateTotal);
  document.getElementById('paket_makan').addEventListener('change', updateTotal);
  
  document.getElementById('hari_wisata').addEventListener('change', updateTotalCost);
  document.getElementById('jumlah_peserta').addEventListener('change', updateTotalCost);
  
  document.getElementById('hari_wisata').addEventListener('change', updateTotal);
  document.getElementById('jumlah_peserta').addEventListener('change', updateTotal);
  
  updateTotalCost();
  updateTotal();
  </script>  </div>
  </main>