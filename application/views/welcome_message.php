<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Sertifikiasi</title>
    <link
      rel="stylesheet"
      href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="<?php echo base_url(); ?>bootstrap/css/shop-homepage.css"
    />
    <script src="<?php echo base_url(); ?>bootstrap/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="container">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Unit Sertifikasi Akakom</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#"
                  >Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('profile') ?>">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pengumuman</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('login') ?>">Admin</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Page Content -->
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h3 class="my-4">Sertifikasi</h3>
            <div class="list-group">
              <a href="#" class="list-group-item">CCNA</a>
              <a href="#" class="list-group-item">ORACLE</a>
              <a href="#" class="list-group-item">TOEFL</a>
            </div>
          </div>
          <!-- /.col-lg-3 -->

          <div class="col-lg-9">
            <div
              id="carouselExampleIndicators"
              class="carousel slide my-4"
              data-ride="carousel"
            >
              <ol class="carousel-indicators">
                <li
                  data-target="#carouselExampleIndicators"
                  data-slide-to="0"
                  class="active"
                ></li>
                <li
                  data-target="#carouselExampleIndicators"
                  data-slide-to="1"
                ></li>
                <li
                  data-target="#carouselExampleIndicators"
                  data-slide-to="2"
                ></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img
                    class="d-block img-fluid"
                    src="<?php echo base_url(); ?>bootstrap/images/CNNA1.png"
                    alt="First slide"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    class="d-block img-fluid"
                    src="<?php echo base_url(); ?>bootstrap/images/ORLANCE1.png"
                    alt="Second slide"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    class="d-block img-fluid"
                    src="<?php echo base_url(); ?>bootstrap/images/TOEFEL1.png"
                    alt="Third slide"
                  />
                </div>
              </div>
              <a
                class="carousel-control-prev"
                href="#carouselExampleIndicators"
                role="button"
                data-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="sr-only">Previous</span>
              </a>
              <a
                class="carousel-control-next"
                href="#carouselExampleIndicators"
                role="button"
                data-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

            <div class="row">
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="#"
                    ><img
                      class="card-img-top"
                      src="<?php echo base_url(); ?>bootstrap/images/logoccna.png"
                      alt=""
                  /></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#">CCNA</a>
                    </h4>
                    <h5>IDR 850.000</h5>
                    <p class="card-text">
                      sertifikasi CCNA adalah sertifikasi untuk spesialisasi jaringan komputer. 
                      Wireless.
                    </p>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-primary">Daftar</button>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="#"
                    ><img
                      class="card-img-top"
                      src="<?php echo base_url(); ?>bootstrap/images/logooracle.png"
                      alt=""
                  /></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#">ORACLE</a>
                    </h4>
                    <h5>IDR 850.000</h5>
                    <p class="card-text">
                      sertifikasi ORACLE adalah sertifikasi untuk spesialisasi managment database.
                    </p>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-primary">Daftar</button>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="#"
                    ><img
                      class="card-img-top"
                      src="<?php echo base_url(); ?>bootstrap/images/logotoefl.png"
                      alt=""
                  /></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#">TOEFL</a>
                    </h4>
                    <h5>IDR 50.000</h5>
                    <p class="card-text">
                      sertifikasi TOEFL adalah sertifikasi untuk spesialisasi bahasa inggris.
                    </p>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-primary">Daftar</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.col-lg-9 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->

      <!-- Footer -->
      <footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white">
            Copyright &copy; Unit Sertifikasi Akakom 2019
          </p>
        </div>
        <!-- /.container -->
      </footer>
    </div>
  </body>
</html>
