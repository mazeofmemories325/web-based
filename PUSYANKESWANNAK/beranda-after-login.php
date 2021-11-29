<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Beranda</title>
  </head>

  <body>
     <!-- Navigation bar -->
     <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="beranda-after-login.php">
          <img src="logo-dki-1.png" alt="" width="169" height="97" class="d-inline-block align-text-top" />
        </a>

        <text class="nav-item dropdown">
          <a class="navbar-brand fs-6 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">

          Halo, PELAMAR! </a>

          <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
            <li><a class="dropdown-item" href="profile.php">Profil</a></li>
            <li><a class="dropdown-item" href="beranda.php">Keluar</a></li>
          </ul>
        </text>
      </div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner" align="center">
        <div class="carousel-item active">
          <img src="homepage_01.png" class="w-75 center" alt="" />
        </div>
        <div class="carousel-item">
          <img src="homepage_02.png" class="w-75 center" alt="" />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <br /><br /><br /><br />

    <div class="container">
      <div class="row row-cols-4 row-cols-md-4 g-6">
        
        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="001.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Petugas Kesehatan Satwa</h5>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="002.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Tenaga Laboratorium</h5>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="003.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Tenaga Teknis Perawat Satwa</h5>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="04.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Petugas IPAL</h5>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="05.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Petugas Keurmaster</h5>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="06.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Tenaga Mekanik dan Listrik</h5>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="007.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Petugas Customer Relation</h5>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="08.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Petugas Informasi</h5>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="010.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Tenaga Supir</h5>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="09.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Petugas Penerima Tamu</h5>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="11.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Tenaga Keamanan Kantor</h5>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="12.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Tenaga Kebersihan Kantor</h5>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Petugas Kesehatan Satwa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                
                <div class="modal-body">
                <text class="fw-bold">Uraian Umum Pekerjaan</text></br>
                Memeriksa, mendiagnosa, melakukan terapi pengobatan dan memberikan rekomendasi medis terkait kesehatan satwa/ternak dan membuat laporan medis.
                </div>
              
                <div class="modal-footer">
                <a href="form-pendaftaran-pelamar.php">
                <button type="button" class="btn btn-primary">DAFTAR SEKARANG!</button>
                </a>
                </div>
            
                </div>
              </div>
          </div>

      </div>
    </div>

    <br /><br /><br /><br />

    <!-- Footer -->
    <footer class="text-lg-start text-white" style="background-color: #929fba">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
             <!-- Grid column -->
             <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold">PUSYANKESWANNAK</h5>
              <p>Jl. Raya Bambu Apus Cipayung</br>
              Jakarta Timur</br>
              Telp. 021 8455748</br>
              Fax. 8455753</br>
              Email : puspelkeswan1@gmail.com</p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold">Link Terkait</h5>
              <p> <a class="text-white" href="https://jakarta.go.id/">Pemerintah Provinsi DKI Jakarta</a></p>
              <p> <a class="text-white" href="https://www.pertanian.go.id/">Kementerian Pertanian</a></p> 
              <p> <a class="text-white" href="https://dkpkp.jakarta.go.id/">Dinas Ketahanan Pangan Kelautan dan Pertanian</a></p> </br>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold">Follow us</h5>

              <!-- Facebook -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="fa fa-facebook-f"></i></a>

              <!-- Youtube -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="https://www.youtube.com/channel/UC2Ipz8jxMVKEvffY3aH7TYg" role="button"><i class="fa fa-youtube"></i></a>

              <!-- Instagram -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="https://www.instagram.com/pusyankeswannak.jakarta/" role="button"><i class="fa fa-instagram"></i></a>
            </div>
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2021 Hak Cipta:
        <a class="text-white" href="https://pusyankeswanak.jakarta.go.id/">PUSYANKESWANNAK</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
