@extends('layout.main')

@section('content')
<main id="main">
  
    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row about-container">
  
          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Apasih TEBANK itu?</h2>
            <p>
              TEBANK adalah website bank sampah yang dibuat untuk kampung agar mempermudah para ibu-ibu kader kampung dalam mengelola bank sampah yang sudah ada. Apa sih manfaatnya?
            </p>
  
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Mempermudah kader</a></h4>
              <p class="description">Dengan TEBANK pekerjaan kader akan lebih mudah karena membantu mengurangi kesalahan dalam pencatatan dan masuknya data baru</p>
            </div>
  
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Sumber pemasukan warga</a></h4>
              <p class="description">TEBANK juga bisa menjadi salah satu sumber pemasukaan warga yang cukup tidak perlu kerja keras karena sampah anorganik yang bisa kita setorkan di bank sampah sangat mudah dijumpai</p>
            </div>
  
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <h4 class="title"><a href="">Mepermudah warga</a></h4>
              <p class="description">Tidak hanya kader yang dipermudah tapi warga juga dalam melihat data tabungan yang sudah di inputkan oleh kader</p>
            </div>
  
          </div>
  
          <div class="col-lg-6 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100"></div>
        </div>
  
      </div>
    </section><!-- End About Section -->
  
    <!-- ======= Facts Section ======= -->
    <section id="facts">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Jumlah peserta</h3>
          <p class="section-description">Peserta yang ikut dalam TEBANK adalah warga RT.04 RW.05</p>
        </div>
        <div class="row counters center justify-content-center">
  
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>WARGA</p>
          </div>
  
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="534" data-purecounter-duration="1" class="purecounter"></span>
            <p>DATA</p>
          </div>
  
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>SAMPAH</p>
          </div>
  
        </div>
  
      </div>
    </section><!-- End Facts Section -->
  
    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Kegiatan</h3>
          <p class="section-description">Dokumentasi Kegiatan Bank Sampah</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
                <div class="icon"><a href=""><img src="{{asset('Template')}}/img/g1.jpg" alt=""></a></div>
              <h4 class="title"><a href="">Proses Pengumpulan Sampah</a></h4>
              <p class="description">Warga mengumpulkan sampah ke tempat pengumpulan sampah kader</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
                <div class="icon"><a href=""><img src="{{asset('Template')}}/img/g2.jpg" alt=""></a></div>
              <h4 class="title"><a href="">Proses Pembelian Sampah</a></h4>
              <p class="description">Kader membeli sampah dari warga</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
            <div class="icon"><a href=""><img src="{{asset('Template')}}/img/g3.jpg" alt=""></a></div>
              <h4 class="title"><a href="">Proses penginputan Sampah</a></h4>
              <p class="description">Kader menginputkan jumlah sampah yang dibawa warga</p>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
            <div class="icon"><a href=""><img src="{{asset('Template')}}/img/g4.jpg" alt=""></a></div>
              <h4 class="title"><a href="">Proses Penjualan Sampah</a></h4>
              <p class="description">warga menginputkan harga jual dari pengepul</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
            <div class="icon"><a href=""><img src="{{asset('Template')}}/img/g5.jpg" alt=""></a></div>
              <h4 class="title"><a href="">Tabungan</a></h4>
              <p class="description">Kader menginputkan tabungan warga</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
            <div class="icon"><a href=""><img src="{{asset('Template')}}/img/g6.jpg" alt=""></a></div>
              <h4 class="title"><a href="">Tabungan</a></h4>
              <p class="description">Warga cek saldo</p>
            </div>
          </div>
        </div>
  
      </div>
    </section><!-- End Services Section -->
  
    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3 class="cta-title">Hubungi jika ada kesalahan</h3>
            <p class="cta-text">Jika ada kesalahan dalam penginputan data bisa hubungi nomor dibawah ini.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Hubungi</a>
          </div>
        </div>
  
      </div>
    </section><!-- End Call To Action Section -->
   {{-- <!-- ======= Team Section ======= --> --}}
     <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Team</p>
        </div>

        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Tim Dokumentasi</h4>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Tim Penginputan</h4>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Tim Pengumpulan</h4>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Tim Jual Beli</h4>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
@endsection