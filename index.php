<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Company Profile</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- navigasi -->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
    >
      <div class="container">
        <a class="navbar-brand" href="#">Okta Studio's.</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#hobi">Hobi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portofolio">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tentang">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#staff">Social</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kontak">FAQ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- banner -->
    <div class="container-fluid banner">
      <div class="container text-center">
        <h4 class="display-6">Welcome To My Website</h4>
        <h3 class="display-1">HolA</h3>
        <a href="#hobi">
          <button type="button" class="btn btn-danger btn-lg">
            let's explore!
          </button>
        </a>
      </div>
    </div>
    <!-- hobi -->
    <div class="container-fluid hobi pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="hobi">Hobi</h2>
        <p>
          Berikut ditampilkan beberapa hobi dari owner
        </p>
        <div class="row pt-4">
          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-code fa-5x"></i></span>
            <h3 class="mt-3">Programming</h3>
            <p>
              Aktivitas menulis dan mengembangkan kode untuk membuat aplikasi, website, atau solusi digital
            </p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-palette fa-5x"></i></span>
            <h3 class="mt-3">Design</h3>
            <p>
              Kegiatan pembuatan konsep visual atau karya estetis, seperti desain grafis, interior, fashion, atau produk
            </p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"
              ><i class="fas fa-network-wired fa-5x"></i
            ></span>
            <h3 class="mt-3">Sport</h3>
            <p>
              Aktivitas fisik yang dilakukan seseorang secara rutin untuk menjaga kesehatan, kebugaran, dan kesenangan
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- portofolio -->
    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="portofolio">Portofolio</h2>
        <p>
          Developer adalah seorang penulis web dengan pengalaman dalam membuat konten berkualitas tinggi untuk berbagai platform digital
        </p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="fototk.jpeg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Taman Kanak-Kanak</h5>
                <p class="card-text">
                  Penulis menempuh pendidikan taman kanak-kanak di TK Negeri Pembina Serongga, Gianyar, Bali.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="sd.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Sekolah Dasar</h5>
                <p class="card-text">
                 Penulis menempuh pendidikan sekolah dasar di SD Negeri 1 Lebih, Gianyar, Bali.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="Sekolahsmp.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Sekolah Menengah Pertama</h5>
                <p class="card-text">
                  Penulis menempuh pendidikan sekolah menengah pertama di SMP Negeri 1 Gianyar, Bali.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="anaksma.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Sekolah Menengah Atas</h5>
                <p class="card-text">
                  Penulis menempuh pendidikan sekolah menengah atas di SMA Negeri 1 Gianyar, Bali.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="curug.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Perguruan Tinggi</h5>
                <p class="card-text">
                  Penulis menempuh pendidikan perguruna tinggi di Sekolah Kedinasan Politeknik Penerbangan Indonesia Curug, Tangerang, Banten.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="karir.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Pekerjaan</h5>
                <p class="card-text">
                  Saat ini penulis bekerja di Politeknik Penerbangan Medan dengan jabatan pranata laboratorium.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- tentang -->
    <div class="container-fluid pt-5 pb-5">
      <div class="container">
        <h2 class="display-3 text-center" id="tentang">Tentang Penulis</h2>
        <p class="text-center">
          Berikut ditampilkan biografi singkat dari penulis website
        </p>
        <div class="clearfix pt-5">
          <img
            src="tentang.jpg"
            class="col-md-6 float-md-end mb-3 crop-img"
            width="300"
            height="300"
          />
          <p>
            Made Okta lahir pada 7 Oktober 2002 di Jakarta, Indonesia. Sejak kecil, 
            ia menunjukkan minat yang besar dalam bidang teknologi, 
            terutama pengembangan perangkat lunak.
          </p>
          <p>
            Selama 5 tahun belajar, ia berhasil memimpin memimpin beberapa proyek yg
            melibatkan pengembangan aplikasi web dan mobile untuk berbagai klien. 
          </p>
          <p>
            Selain bekerja, Okta juga aktif sebagai mentor di berbagai komunitas 
            teknologi, berbagi pengetahuan dengan generasi pengembang muda. 
          </p>
        </div>
      </div>
    </div>
    <!-- tim -->
    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="staff">Social Media</h2>
        <p>
          Berikut social media yang bisa dicari untuk mengeksplor
          lebih dalam tentang penulis.
        </p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4 text-center tim">
            <img
              src="ig.jpg"
              class="rounded-circle mb-3"
            />
            <h4>Instagram</h4>
            <p>@oktadwipayana</p>
            <p>
              <a href="" class="social"><i class="fab fa-twitter"></i></a>
              <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
            </p>
          </div>
          <div class="col-md-4 text-center tim">
            <img
              src="line.jpeg"
              class="rounded-circle mb-3"
            />
            <h4>Line</h4>
            <p>@okta_dwipayana</p>
            <p>
              <a href="" class="social"><i class="fab fa-twitter"></i></a>
              <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
            </p>
          </div>
          <div class="col-md-4 text-center tim">
            <img
              src="wa.jpg"
              class="rounded-circle mb-3"
            />
            <h4>Whatsapp</h4>
            <p>089534059476</p>
            <p>
              <a href="" class="social"><i class="fab fa-twitter"></i></a>
              <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Client -->
    <div class="container-fluid client pt-5 pb-5">
      <div class="container text-center">
        <div class="row pt-4 gx-4 gy-4">
          <div class="col">
            <img
              src="https://cdn.iconscout.com/icon/free/png-256/microsoft-28-761688.png"
            />
          </div>
          <div class="col">
            <img
              src="https://cdn3.iconfinder.com/data/icons/glypho-social-and-other-logos/64/logo-facebook-512.png"
            />
          </div>
          <div class="col">
            <img src="ighitam.png" />
          </div>
          <div class="col">
            <img
              src="https://i.pinimg.com/originals/20/1d/17/201d17590b3a7bc8939ca37e577bbbd8.png"
            />
          </div>
          <div class="col">
            <img
              src="https://www.ictmagazine.nl/wp-content/uploads/2020/10/ibm-720x340-1.png"
            />
          </div>
        </div>
      </div>
    </div>
    <!-- kontak -->
    <div class="container-fluid pt-5 pb-5 kontak">
  <div class="container">
    <h2 class="display-3 text-center" id="kontak">Hubungi Penulis</h2>
    <p class="text-center">
      Silahkan diisi jika ada hal yang ingin disampaikan.
    </p>
    <form action="proses_kontak.php" method="POST">
  <div class="row pb-3">
    <div class="col-md-6">
      <input class="form-control form-control-lg mb-3" type="text" placeholder="Nama" name="nama" required />
      <input class="form-control form-control-lg mb-3" type="email" placeholder="Email" name="email" required />
      <input class="form-control form-control-lg" type="text" placeholder="No. Phone" name="no_telp" required />
    </div>
    <div class="col-md-6">
      <textarea class="form-control form-control-lg" rows="5" placeholder="Pesan" name="pesan" required></textarea>
    </div>
  </div>
  <div class="col-md-3 mx-auto text-center">
    <button type="submit" class="btn btn-danger btn-lg">Kirim Pesan</button>
  </div>
</form>
    <!-- Menampilkan pesan status jika ada -->
    <?php
  // Menampilkan pesan status jika ada
  if (isset($_GET['status'])) {
    if ($_GET['status'] == 'success') {
      echo '<div class="alert alert-success mt-3">Pesan Anda berhasil dikirim!</div>';
    } elseif ($_GET['status'] == 'error') {
      echo '<div class="alert alert-danger mt-3">Terjadi kesalahan, pesan gagal dikirim.</div>';
    }
  }
?>
  </div>
</div>
    </div>
    <div class="container text-center pt-5 pb-5">
      All Rights Reserved & copy; 2024
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
