<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>My Company Profile</title>
  </head>
  <body id="home">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info shadow-sm navbar fixed-top">
      <div class="container">
        <img src="img/logo.jpg" alt="" width="110" height="64">
  
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Abaout Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar  -->
    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/gerai.jpg" alt="gerai" class="rounded-circle img-thumbnail" />
      <h5 class="display-4">PT Indomarco Prismatama</h5>
      <p class="lead">perusahaan pengelola jaringan ritel Indomaret</p>
    </section>
    <!-- Akhir Jumbotron -->
    <!-- Abaout -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About Us</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p>
                PT Indomarco Prismatama
                Berbekal dedikasi dan inovasi, Indomaret mengukuhkan statusnya sebagai perusahaan waralaba minimarket pertama dan terbesar di Indonesia
            </p>
          </div>
          <div class="col-md-4">
            <p>Pada mulanya Indomaret membentuk konsep penyelenggaraan gerai yang berlokasi di dekat hunian konsumen, menyediakan berbagai kebutuhan pokok maupun kebutuhan sehari- hari, melayani masyarakat umum yang bersifat majemuk, serta memiliki luas toko sekitar 200 m2.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Abaout -->
    <!-- Service -->
    <section id="services">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Service/drivethru.jpg" class="card-img-top" alt="Servicedrivethru" />
              <div class="card-body">
                <p class="card-text">Dengan layanan "Drive Thru", anda dapat melakukan pembelian lebih praktis, lebih cepat dan lebih mudah untuk memesan, membayar dan menerima barang</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Service/titippaket.jpg" class="card-img-top" alt="Servicetitppaket" />
              <div class="card-body">
                <p class="card-text">Layanan titip paket di Toko Indomaret, dan diambil di toko Indomaret yang sama</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Service/bayartagihan.jpg" class="card-img-top" alt="Servicebayartagihan" />
              <div class="card-body">
                <p class="card-text">Bayar Tagihan Layanan ITC Group lebih mudah di Indomaret bisa TEBUS MURAH 1 btl NU Green Tea Original/Honey 330ml ATAU NU ZUZU Original/Cokelat 200 ml hanya Rp2.200.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Service -->
        <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Us</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
          <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" />
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" />
            </div>
            <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
          </form>
        </div>
        </div>
      </div>
    </section>
    <!-- Akhir Contact -->
    <!-- footer -->
<footer class="bg-info text-white text-center">
    <p> Created by ...</p>
</footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
