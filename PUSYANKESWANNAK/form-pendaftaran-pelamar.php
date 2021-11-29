<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Form Pendaftaran Pelamar</title>
  </head>
  <body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="beranda-after-login.php">
          <img src="logo-dki-1.png" alt="" width="169" height="97" class="d-inline-block align-text-top" />
        </a>

        <text class="nav-item dropdown">
          <a class="navbar-brand fs-6 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Halo, PELAMAR! </a>
          <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
            <li><a class="dropdown-item" href="profile.php">Profil</a></li>
            <li><a class="dropdown-item" href="beranda.php">Keluar</a></li>
          </ul>
        </text>
      </div>
    </nav>

    <div class="container">
      <div class="py-5 text-left">
        <h3>Form Pendaftaran</h3>
      </div>
    </div>

  <div class="container">
    <form class="row g-3 needs-validated">
          <div class="col-md-12 mb-4">

            <label for="input-posisi" class="form-label">POSISI</label>
            <div class="mb-4 col-md-6">
              <select class="form-select" required aria-label="select example">
                <option value="">Pilih...</option>
                <option value="1">Petugas Kesehatan Hewan</option>
                <option value="2">Petugas Laboratorium</option>
                <option value="3">Tenaga Teknis Perawat Satwa</option>
                <option value="4">Petugas IPAL</option>
                <option value="5">Petugas Keurmaster</option>
                <option value="6">Tenaga Mekanik dan Listrik</option>
                <option value="7">Petugas Customer Relation</option>
                <option value="8">Petugas Informasi</option>
                <option value="9">Petugas Penerima Tamu</option>
                <option value="10">Tenaga Supir</option>
                <option value="11">Tenaga Keamanan Kantor</option>
                <option value="12">Tenaga Kebersihan Kantor</option>
              </select>
              <div class="invalid-feedback">Pilih salah satu jawaban.</div>
            </div>

            <fieldset disabled>
              <div class="form-group mb-4">
                <label for="input-nik" class="form-label">NIK</label>
                <input type="text" id="nik" class="form-control" placeholder="">
              </div>
            </fieldset>

            <div class="form-group mb-4">
              <label for="input-no-kk">NO. KK</label>
              <input type="text" class="form-control" id="no-kk" placeholder="" required />           
            </div>
            
            <fieldset disabled>
            <div class="form-group mb-4">
              <label for="input-nama">NAMA (Sesuai KTP)</label>
              <input type="text" class="form-control" id="nama" placeholder="" required/>
            </div>
            </fieldset>

            <div class="form-group row mb-2">
              <label for="input-alamat">ALAMAT</label>
              <div class="col-md-8">
                <input type="text" class="form-control" placeholder="Jalan" aria-label="">
              </div>
              <div class="col-md-2">
                <input type="text" class="form-control" placeholder="RT" aria-label="">
              </div>
              <div class="col-md-2">
                <input type="text" class="form-control" placeholder="RW" aria-label="">
              </div>
            </div>

            <div class="form-group row mb-2">
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Kelurahan" aria-label="">
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Kecamatan" aria-label="">
              </div>
            </div>

            <div class="form-group row mb-4">
              <div class="col-md-6">
                <select class="form-select" required aria-label="select example">
                  <option value="">Kota</option>
                  <option value="1">Jakarta Timur</option>
                </select>
                <div class="invalid-feedback">Pilih salah satu jawaban.</div>
              </div>
              
              <div class="col-md-6">
                <select class="form-select" required aria-label="select example">
                  <option value="">Provinsi</option>
                  <option value="1">DKI Jakarta</option>
                </select>
                <div class="invalid-feedback">Pilih salah satu jawaban.</div>
              </div>
            </div>

            <div class="form-group mb-4 col-md-4">
              <label for="input-tanggal-lahir">TANGGAL LAHIR</label>
              <input type="date" class="form-control" id="tanggal-lahir" name="date-start" value="" required/>
            </div>
            
            <div class="form-group mb-4">
              <label for="input-no-hp">NO. HP</label>
              <input type="text" class="form-control" id="no-hp" placeholder="" required />
            </div>

            <label for="input-pendidikan" class="form-label">PENDIDIKAN TERAKHIR</label>
            <div class="mb-4">
              <select class="form-select" required aria-label="select example">
                <option value="">Pilih...</option>
                <option value="1">SMP/Sederajat</option>
                <option value="2">SMA/SMK/Sederajat</option>
                <option value="3">Diploma 1 (D1)</option>
                <option value="4">Diploma 2 (D2)</option>
                <option value="5">Diploma 3 (D3)</option>
                <option value="6">Diploma 4 (D4)</option>
                <option value="7">Sarjana (S1)</option>
                <option value="8">Magister (S2)</option>
              </select>
              <div class="invalid-feedback">Pilih salah satu jawaban.</div>
            </div>
            
            <div class="form-group mb-4">
              <label for="input-npwp">NPWP</label>
              <input type="text" class="form-control" id="npwp" placeholder="" required />
            </div>

            <div class="form-group mb-4 col-md-4">
              <label for="input-tanggal-skck">TANGGAL SKCK</label>
              <input type="date" class="form-control" id="tanggal-skck" name="date-start" value="" required/>
            </div>

            <div class="form-group row mb-4">
              <label for="input-alamat">REKENING</label>
              
              <div class="col-md-2">
                <fieldset disabled>
                <input type="text" class="form-control" placeholder="Bank DKI" aria-label="">
              </fieldset>
              </div>
             
              <div class="col-md-4">
                <input type="text" class="form-control" placeholder="" aria-label="">
              </div>
            </div>

            <label for="input-instansi-surkes" class="form-label">INSTANSI SURAT KESEHATAN</label>
            <div class="mb-4">
              <select class="form-select" required aria-label="select example">
                <option value="">Pilih...</option>
                <option value="1">Puskesmas</option>
                <option value="2">Rumah Sakit Pemerintah</option>
              </select>
            </div>

          </div>
      </div>

    <div class="container">
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="form-unggah-berkas.php">
          <button class="btn btn-primary" type="button">Selanjutnya ❯</button>
        </a>
      </div>
    </div>
    </form>
  </div>

</br></br></br></br>

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
